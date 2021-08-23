<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import lib session
use Illuminate\Support\Facades\Session;

//import lib jwt
use \Firebase\JWT\JWT;

//import lib Response
use Illuminate\Response;

//import lib validasi
use Illuminate\Support\Facades\Validator;

//import fungsi encrypt
use Illuminate\Contracts\Encryption\DecryptException;

//import model suplier
use App\M_Suplier;

//import model admin
use App\M_Admin;

class Suplier extends Controller
{
    //
    public function login(){

        return view('suplier.login');
    }

    public function masukSuplier(Request $request){

        $this->validate($request,
            [
                'email'=> 'required',
                'password'=> 'required'
            ]
        );

        $cek = M_Suplier::where('email',$request->email)->count();

        $sup = M_Suplier::where('email',$request->email)->get();

        if ($cek > 0){
            foreach($sup as $su){
                if(decrypt($su->password) == $request->password){

                    $key = env('APP_KEY');

                    $data = array (

                        "id_suplier"=> $su->id_suplier
                    );

                    $jwt = JWT::encode($data, $key);

                    if(M_Suplier::where('id_suplier',$su->id_suplier)->update([

                        'token'=> $jwt
                        ]
                    )){

                        Session::put('token',$jwt);
                        Session::put('nama_usaha',$su->nama_usaha);
                        
                        return redirect('/listSuplier');

                    }else{
                        return redirect ('/login')->with('gagal','Token Gagal Diupdate');
                    }

                }else{
                    return redirect ('/login')->with('gagal','Password Tidak Sama');        
                }
            }
        }else{
            return redirect ('/login')->with('gagal','Email Tidak Terdaftar');
        }
    }

    public function suplierKeluar(){
         $token = Session::get('token');
         if(M_Suplier::where('token', $token)->update(
            [
                'token' => 'kosong',

            ]
        )){

            Session::put('token', "");
            return redirect('/');

         }else{
            return redirect('/login')->with('gagal','Anda Gagal Logout');

         }
    }

     public function listSup(){

        $token = Session::get('token');
        $tokenDb = M_Admin::where('token',$token)->count();

        if($tokenDb > 0){
            $data['suplier'] = M_Suplier::paginate(15);
            return view('admin.listSup', $data);

        }else{

            return redirect('/masukAdmin')->with('gagal','Anda sudah logout, silahkan Login Kembali');
        }
    }


    public function nonAktif($id){

        $token = Session::get('token');
        $tokenDb = M_Admin::where('token',$token)->count();

        if($tokenDb > 0){
           if(M_Suplier::where('id_suplier', $id)->update(
            [

                "status" => "0"

            ])){

                return redirect('/listSup')->with('berhasil','Data Berhasil di Update');

           }else{

                return redirect('/listSup')->with('gagal','Data Gagal di Update');

           }

        }else{

            return redirect('/masukAdmin')->with('gagal','Anda sudah logout, silahkan Login Kembali');
        }
    }

    public function aktivasiSup($id){

        $token = Session::get('token');
        $tokenDb = M_Admin::where('token',$token)->count();

        if($tokenDb > 0){
           if(M_Suplier::where('id_suplier', $id)->update(
            [

                "status" => "1"

            ])){

                return redirect('/listSup')->with('berhasil','Data Berhasil di Update');

           }else{

                return redirect('/listSup')->with('gagal','Data Gagal di Update');

           }

        }else{

            return redirect('/masukAdmin')->with('gagal','Anda sudah logout, silahkan Login Kembali');
        }
    }


    public function ubahPassword(Request $request){

        $token = Session::get('token');
        $tokenDb = M_Suplier::where('token',$token)->count();

        if($tokenDb > 0){

            $key = env('APP_KEY');

            $sup = M_Suplier::where('token',$token)->first();

            $decode = JWT::decode($token, $key, array ('HS256'));
            $decode_array = (array) $decode;

            if(decrypt($sup->password) == $request->passwordlama){

                if(M_Suplier::where('id_suplier', $decode_array['id_suplier'])->update(
                    [

                         "password" => encrypt($request->password)

                    ])){

                         return redirect('/login')->with('berhasil','Password Berhasil di Update,Silahkan Login Kembali Dengan Password Yang Baru');

                }else{

                         return redirect('/listSuplier')->with('gagal','Password Gagal di Update');

                }
            }else{


                return redirect('/listSuplier')->with('gagal','Password Lama Anda Tidak Sama');

            }    

        }else{

            return redirect('/login')->with('gagal','Anda sudah logout, silahkan Login Kembali');
        }

    }
}


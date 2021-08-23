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

//import model admin
use App\M_Admin;

//import model pengadaan
use App\M_Pengadaan;

//import model suplier
use App\M_Suplier;


//import lib storage
use Illuminate\Support\Facades\Storage;



class Pengadaan extends Controller
{
    public function index(){


        $token = Session::get('token');

        $tokenDb = M_Admin::where('token', $token)->count();

        if($tokenDb > 0){

            $data['pengadaan'] = M_Pengadaan::where('status','1')->paginate(10);
            
            return view('pengadaan.list', $data);
        }else{
            return redirect ('/masukAdmin')->with('gagal','Silahkan Login Dulu !'); 

        };
    }

    public function tambahPengadaan(Request $request){

        $token = Session::get('token');

        $tokenDb = M_Admin::where('token', $token)->count();

        if($tokenDb > 0){

            $this->validate($request,
                [
                'nama_pengadaan'=> 'required',
                'deskripsi'=> 'required',
                'gambar'=> 'required | image | mimes:jpg,png,jpeg | max:10000',
                'anggaran'=> 'required'
                ]
            );


            $path = $request->file('gambar')->store('public/gambar');

            if(M_Pengadaan::create(

                [
                  "nama_pengadaan" => $request->nama_pengadaan,
                  "deskripsi" => $request->deskripsi,
                  "gambar" => $path,
                  "anggaran" => $request->anggaran

                ])){

                    return redirect ('/listPengadaan')->with('berhasil','Data Berhasil Disimpan');  
                }else{

                    return redirect ('/listPengadaan')->with('gagal','Data Gagal Disimpan');
                }

        }else{

           return redirect ('/masukAdmin')->with('gagal','Silahkan Login Dulu !');  
        }

    }

    public function hapusGambarPengadaan($id){

        $token = Session::get('token');

        $tokenDb = M_Admin::where('token', $token)->count();

        if($tokenDb > 0){
            $pengadaan = M_Pengadaan::where('id_pengadaan', $id)->count();

            if($pengadaan > 0){

                $dataPengadaan = M_Pengadaan::where('id_pengadaan', $id)->first();

                if(Storage::delete($dataPengadaan->gambar)){

                    if(M_Pengadaan::where('id_pengadaan', $id)->update(["gambar" => "-"])){

                        return redirect ('/listPengadaan')->with('berhasil','Gambar Berhasil Dihapus'); 

                    }else{

                        return redirect ('/listPengadaan')->with('gagal','Gambar Gagal Dihapus'); 
                    }

                }else{

                    return redirect ('/listPengadaan')->with('gagal','Gambar gagal Dihapus'); 
                }
            }else{
                return redirect ('/listPengadaan')->with('gagal','Gambar Tidak Ditemukan'); 

            }

        }else{

            return redirect ('/masukAdmin')->with('gagal','Silahkan Login Dulu !');
        }

    }

     public function tambahGambarPengadaan(Request $request){

        $token = Session::get('token');

        $tokenDb = M_Admin::where('token', $token)->count();

        if($tokenDb > 0){

            $this->validate($request,
                [
                
                'gambar'=> 'required | image | mimes:jpg,png,jpeg | max:10000',

                ]
            );


            $path = $request->file('gambar')->store('public/gambar');

            if(M_Pengadaan::where('id_pengadaan', $request->id_pengadaan)->update(

                [
                  "gambar" => $path,

                ])){

                    return redirect ('/listPengadaan')->with('berhasil','Gambar Berhasil Diupdate');  
                }else{

                    return redirect ('/listPengadaan')->with('gagal','Gambar Gagal Diupdate');
                }

        }else{

           return redirect ('/masukAdmin')->with('gagal','Silahkan Login Dulu !');  
        }

    }


     public function hapusPengadaan($id){

        $token = Session::get('token');

        $tokenDb = M_Admin::where('token', $token)->count();

        if($tokenDb > 0){
            $pengadaan = M_Pengadaan::where('id_pengadaan', $id)->count();

            if($pengadaan > 0){

                $dataPengadaan = M_Pengadaan::where('id_pengadaan', $id)->first();

                if(Storage::delete($dataPengadaan->gambar)){

                    if(M_Pengadaan::where('id_pengadaan', $id)->delete()){

                        return redirect ('/listPengadaan')->with('berhasil','Data Berhasil Dihapus'); 

                    }else{

                        return redirect ('/listPengadaan')->with('gagal','Data Gagal Dihapus'); 
                    }

                }else{

                    return redirect ('/listPengadaan')->with('gagal','Data gagal Dihapus'); 
                }
            }else{
                return redirect ('/listPengadaan')->with('gagal','Data Tidak Ditemukan'); 

            }

        }else{

            return redirect ('/masukAdmin')->with('gagal','Silahkan Login Dulu !');
        }

    }

    public function ubahPengadaan(Request $request){

        $token = Session::get('token');

        $tokenDb = M_Admin::where('token', $token)->count();

        if($tokenDb > 0){

            $this->validate($request,
                [
                
                  "u_nama_pengadaan" => 'required',
                  "u_deskripsi" => 'required',
                  "u_anggaran" => 'required'

                ]
            );


            if(M_Pengadaan::where('id_pengadaan', $request->id_pengadaan)->update(

                [
                 "nama_pengadaan" => $request->u_nama_pengadaan,
                  "deskripsi" => $request->u_deskripsi,
                  "anggaran" => $request->u_anggaran

                ])){

                    return redirect ('/listPengadaan')->with('berhasil','Data Berhasil Diupdate');  
                }else{

                    return redirect ('/listPengadaan')->with('gagal','Data Gagal Diupdate');
                }

        }else{

           return redirect ('/masukAdmin')->with('gagal','Silahkan Login Dulu !');  
        }

    }

     public function listSuplier(){


        $token = Session::get('token');

        $tokenDb = M_Suplier::where('token', $token)->count();

        if($tokenDb > 0){

            $data['pengadaan'] = M_Pengadaan::where('status','1')->paginate(10);
            
            return view('suplier.pengadaan', $data);
        }else{
            return redirect ('/masukSuplier')->with('gagal','Silahkan Login Dulu !'); 

        };
    }
}

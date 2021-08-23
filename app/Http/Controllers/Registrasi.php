<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import lib validasi
use Illuminate\Support\Facades\Validator;

//import lib session
use Illuminate\Support\Facades\Session;

//import fungsi encrypt
use Illuminate\Contracts\Encryption\DecryptException;

//import model suplier
use App\M_Suplier;

class Registrasi extends Controller
{
    /*== FUNGSI Memanggil view registrasi==*/

    public function index(){

        $token = Session::get('token');
       
        $tokenDb = M_Suplier::where('token', $token)->count();
        if($tokenDb > 0){
            $data['token'] = $token;

        }else{
            $data['token'] = "kosong";        
        }

        return view('registrasi.registrasi',$data);
       
    }
    /*== End memanggil view registrasi==*/

    /*== FUNGSI memvalidasi inputan registrasi agar tidak kosong==*/    
    public function regis(Request $request){

        $this->validate($request,
            [
                'nama_usaha'=> 'required',
                'email'=> 'required',
                'alamat'=> 'required',
                'no_npwp'=> 'required',
                'password'=> 'required'
            ]
        );

    /*== End FUNGSI memvalidasi inputan registrasi agar tidak kosong==*/



        /*== FUNGSI create registrasi ==*/
        if(M_Suplier::create(
            [
                'nama_usaha' => $request->nama_usaha,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'no_npwp' => $request->no_npwp,
                'password' => encrypt($request->password)
            ]
        
        /*== End FUNGSI create registrasi ==*/
        )){
            /*== mengirimkan ke VIEW keterangan 'berhasil' jika data sukses disimpan ==*/
            return redirect('/registrasi')->with('berhasil','Data berhasil disimpan');

        }else{
            /*== mengirimkan ke VIEW keterangan 'gagal' jika data gagal disimpan ==*/
            return redirect('/registrasi')->with('gagal','Data gagal disimpan');

        }
    }
}

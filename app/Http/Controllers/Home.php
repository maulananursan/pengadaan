<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//import lib session
use Illuminate\Support\Facades\Session;
//import model suplier
use App\M_Suplier;
//import model pengadaan
use App\M_Pengadaan;

class Home extends Controller
{
    //

    public function index(){
        //echo "Fungsi Index Home";

        //panggile view di root view
        //return view('home');

        //panggil view di subfolder
        $token = Session::get('token');
       
        $tokenDb = M_Suplier::where('token', $token)->count();
        if($tokenDb > 0){
            $data['token'] = $token;

        }else{
            $data['token'] = "kosong";        
        }

        $data['pengadaan'] = M_Pengadaan::where('status', '1')->paginate(6);
       return view ('utama.home',$data);
        
    }
}

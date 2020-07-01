<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view('form');
    }
    
    public function sapa(Request $request){
       // var_dump($request);
      // dd($request["nama"]);
        return "OK";
    }

    public function sapa_post(Request $request){
        //dd($request->all());
        $nama1 = $request["first_name"];
        $nama2 = $request["last_name"];
        return view ("selamatdatang", ["nama1"=>"$nama1", "nama2"=>"$nama2"]);
    }
}

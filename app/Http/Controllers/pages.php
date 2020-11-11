<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    //
    public function login(){
        return view('admon.login');
    }

    public function validarLogin(Request $request){
        return 'Login exitoso';
    }
}
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
        $user = $request->input('user');
        $pass = $request->input('password');
        $key = $request->input('key');

        if ($user === 'marina.santaanna'){
            $url='menu';
        } else {
            $url='admon.login';
        }
        return view($url, [
            'user'=>$request->input('user')
        ]);
    }

    public function carlosBazan(){
        return view('01-Carlos-Bazan');
    }

    public function carlosBazan(){
        return view('01-Carlos-Bazan');
    }



}
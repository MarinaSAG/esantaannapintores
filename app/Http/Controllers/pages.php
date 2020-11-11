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

    public function menu(){
        return view('menu');
    }

    public function manuelFelguerez(){
        return view('01-Manuel-Felguerez');
    }

    public function leonidAfremov(){
        return view('02-Leonid-Afremov');
    }

    public function jeanLeonGerome(){
        return view('03-Jean-Leon-Gerome');
    }

    public function carlosBazan(){
        return view('04-Carlos-Bazan');
    }

    



}
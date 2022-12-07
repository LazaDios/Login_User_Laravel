<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller
{
    //para acceder a la carperta a la hora de LOGUEAR
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if (auth()->attempt(request(['email' , 'password'])) == false ){
            return back()->withErrors([
                'message' => 'El gmail o el Password son incorrecto , verificar'
            ]);
        }
        return redirect()->to('/');
    }

    public function destroy(){
        //para cerrar seccion
        auth()->logout();
        return redirect()->to('/');
    }

}

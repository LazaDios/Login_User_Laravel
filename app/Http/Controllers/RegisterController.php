<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.registre');
    }

    public function store(){

        //validar formulario
        $this->validate(request(), [
            'name'=> 'required|',
            'email'=> 'required|email',
            'password'=> 'required|confirmed'
        ]);

        //mandar datos del Formulario
        $user = User::create(request(['name' , 'email' , 'password']));

        auth()->login($user);//cuando loguemos , nos mostrara el USER
        return redirect()->to('/');

    }
}

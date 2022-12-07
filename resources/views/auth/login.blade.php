@extends('layauts.app ')
@section('title', 'Login')

@section('content')

    <div class="container mx-2 p-3 bg-ligth border-button">

        <h1 class="text-center pt-5"  >Bienvenido , Abrir Seccion :)</h1>

    </div>


    <form action="" class="w-50" method="POST" >
        @csrf
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="pwd">
        </div>

        @error('message')
            <p  class="w-50 bg-danger border alert " >ha ocurrido un error, al iniciar seccion!</p>
        @enderror

            <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>

    

    

@endsection
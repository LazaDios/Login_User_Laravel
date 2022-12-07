@extends('layauts.app ')
@section('title', 'Register')

@section('content')

    <h1 class="text-center pt-5"  >Hola , Registrate!</h1>
    
    @csrf

    <form action="" class="w-50  text-center justify-content-center" method="POST" >
        <div class="form-group">
            <label for="name">NOMBRE: </label>
            <input type="name" name="nombre" class="form-control" id="name">
        </div>
        @error('name')
        <p  class="w-50 bg-danger border " >{{$message}}</p>
        @enderror


        <div class="form-group">
            <label for="email">CORREO ELECTRONICO: </label>
            <input type="email" name="email" class="form-control" id="email">
        </div>

        @error('email')
        <p  class="w-50 bg-danger border " >{{$message}}</p>
        @enderror

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="PassWord , plis">
        </div>

        <div class="form-group">
            <label for="password_c">Password:</label>
            <input type="password" name="password_c" class="form-control" id="password_c" placeholder="Password Confirmation" >
        </div>

        @error('password')
        <p  class="w-50 bg-danger border " >{{$message}}</p>
        @enderror

            <button type="submit" class="btn btn-primary">Submit</button>
        
    </form>


@endsection
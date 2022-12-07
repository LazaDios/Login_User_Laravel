<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') - Login User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body class="bg-secondary text-dark" >



    @if (auth()->check())
    <!--Si ya estoy logueado entro aca-->
        <ul class="nav m-2 nav-tabs">
            <li class="nav-item">
               <p class="text-center">Welcome <b> {{ auth()->user()->name }}</b></p>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login.destroy') }}">Log Out</a>
            </li>
    </ul>

    @else
    <div class="row container">
            
            <ul class="nav m-2 nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login.index')  }}">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register.index') }}">Register</a>
                    </li>
            </ul>
        </div>
    @endif
    


    @yield('content')


</body>
</html>

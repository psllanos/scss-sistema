@extends('adminlte::auth.register')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="aP4Ic0vSzJ1zOkxNQuASDdKFkNg83fI3Yn4o7NiO">

    
    
    
    <title>
                AdminLTE 3            </title>

    
        <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/icheck-bootstrap/icheck-bootstrap.min.css">

    
            <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/overlayScrollbars/css/OverlayScrollbars.min.css">

        
        
        <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/adminlte/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    
    
    
    
            
    
    
</head>

<body class="login-page" >

    
        <div class="login-box">

        
        <div class="login">
            <a href="http://127.0.0.1:8000/home">
                {{-- /*<img src="http://127.0.0.1:8000/vendor/adminlte/dist/img/AdminLTELogo.png" height="50">*/ --}}
                <b>SCSS</b>V.1.2001
            </a>
        </div>

        
        <div class="card card-outline card-primary">

            
                            <div class="card-header ">
                    <h3 class="card-title float-none text-center">
                        
Regístrese para iniciar su sesión                   </h3>
                </div>
            
            
            <div class="card-body login-card-body ">
                    <form action="http://127.0.0.1:8000/login" method="post">
        <input type="hidden" name="_token" value="aP4Ic0vSzJ1zOkxNQuASDdKFkNg83fI3Yn4o7NiO">
        
        <div class="input-group mb-3">
            <input type="email" name="email" class="form-control "
                   value="" placeholder="Correo electronico" autofocus>

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope "></span>
                </div>
            </div>

                    </div>

        
        <div class="input-group mb-3">
            <input type="password" name="password" class="form-control "
                   placeholder="Contraseña">

            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock "></span>
                </div>
            </div>

                    </div>

        
        <div class="row">
            <div class="col-7">
                <div class="icheck-primary" title="Keep me authenticated indefinitely or until I manually logout">
                    <input type="checkbox" name="remember" id="remember" >

                    <label for="remember">
                        Recuerdame
                    </label>
                </div>
            </div>

            <div class="col-5">
                <button type=submit class="btn btn-block btn-flat btn-primary">
                    <span class="fas fa-sign-in-alt"></span>
                    Sign In
                </button>
            </div>
        </div>

    </form>
            </div>

            
                            <div class="card-footer ">
                        
            <p class="my-0">
            <a href="http://127.0.0.1:8000/password/reset">
                I forgot my password
            </a>
        </p>
    
    
            <p class="my-0">
            <a href="http://127.0.0.1:8000/register">
                Register a new membership
            </a>
        </p>
                    </div>
            
        </div>

    </div>

    
            <script src="http://127.0.0.1:8000/vendor/jquery/jquery.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="http://127.0.0.1:8000/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

        
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@8" ></script>
            
                
        <script src="http://127.0.0.1:8000/vendor/adminlte/dist/js/adminlte.min.js"></script>
    
    
    
    
            
</body>

</html>

    
@endsection
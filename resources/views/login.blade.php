<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>CISS - Student Kiosk Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free-V6/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/coas-style.css') }}">
    <link rel="stylesheet" href="{{ asset('template/dist/css/trans-style.css') }}">
    <!-- Logo for demo purposes -->
    <link rel="shortcut icon" type="" href="{{ asset('template/img/CPSU_L.png') }}">

    <style>
        .btn-app{
            box-shadow: 5px 8px 10px rgba(0, 0, 0, 0.2) !important;
        }

        .btn-app.clicked {
            animation: haptic-animation 0.3s ease !important;
        }

        @keyframes haptic-animation {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.1);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card custom-card" style="border: 3px solid #04401f;">
            <div class="card-body login-card-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 pr-4 pl-4 pt-2 pb-2 w-100 col-12" style="background-color: #04401f; border-radius: 5px;">
                        <div class="login-logo mt-2">
                            <a href="">
                                <img src="{{ asset('template/img/cpsulogo.png') }}" class="img-circle" width="100px" height="100px">
                            </a>
                            
                        </div>
                        <h5 class="login-box-msg text-light">LOGIN</h5>

                        <div>
                            <form action="" method="post">
                                @csrf

                                @if(session('error'))
                                    <div class="alert alert-danger" style="font-size: 12pt;">
                                        <i class="fas fa-exclamation-triangle "></i> {{session('error')}}
                                    </div>
                                @endif

                                @if(session('success'))
                                    <div class="alert alert-success" style="font-size: 10pt;">
                                    <i class="fas fa-check"></i> {{session('success')}}
                                    </div>
                                @endif

                                <div class="input-group mb-3">
                                    <input type="text" id="studID_no" name="stud_id" class="form-control form-control-lg" placeholder="Student ID Number" autofocus required>
                                    <div class="input-group-append" style="background-color: #fff; border-radius: 5px 5px 5px 5px">
                                        <div class="input-group-text">
                                            <span class="fas fa-id-card"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" required="">
                                    <div class="input-group-append" style="background-color: #fff; border-radius: 5px 5px 5px 5px">
                                        <div class="input-group-text">
                                            <span class="fas fa-lock"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mt-4 mb-3">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-warning btn-block">
                                            <i class="fas fa-sign-in-alt"></i> Sign In
                                        </button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>   
                    <div class="col-md-7 d-none d-md-block">
                        <h3 style="font-weight: bold;color:#04401f;" class="card-footer text-center">
                            CISS V.1.0 Student Kiosk
                        </h3>
                        <hr>
                        <div class="">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a id="btn-1" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-1 mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-2" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-2 mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-3" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-3 mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-4" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-4 mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-5" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-5 mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-6" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-6 mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-7" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-7 mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-8" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-8 mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-9" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-9 mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-0" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-0 mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-minus" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-minus mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-reset" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-arrow-left mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-k" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-k mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-g" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-g mt-1 text-dark"></i>
                                        </a>
                                        <a id="btn-u" class="btn btn-app" style="border: 2px solid #252525">
                                            <i class="fas fa-u mt-1 text-dark"></i>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        {{-- <p>Visit <a href="https://cpsu.edu.ph" target="_blank" style="color:#04401f;"><b>Official Website</b></a> for more information.</p> --}}
                    </div>
                </div> 
            </div>
        </div>
        <div class="loader"></div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/coas.min.js') }}"></script>
    <!-- Context -->
    {{-- <script src="{{ asset('js/basic/contextmenucoas.js') }}"></script> --}}

    <script>
        document.getElementById("password").addEventListener("focus", function () {
            currentInput = "password";
        });
    </script>
    @include('script.numpad_script')

    <script>
        window.addEventListener("load", () => {
            const loader = document.querySelector(".loader");
                loader.classList.add("loader--hidden");
                loader.addEventListener("transitioned", () => {
                    document.body.removeChild(loader);
            });
        });
    </script>
</body>
</html>
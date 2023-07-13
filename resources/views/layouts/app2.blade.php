<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GESTOR CPD') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Styles -->
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #93cae4;
            background-repeat: no-repeat;
        }

        .card0 {
            box-shadow: 0px 4px 8px 0px #757575;
            border-radius: 0px;
        }

        .card2 {
            margin: 0px 40px;
        }

        .logo {
            width: auto !important;
            height: 200px;
            margin-top: 20px;
            margin-left: 35px;
        }

        .image {
            width: 200px;
            height: 180px;
        }

        .border-line {
            border-right: 1px solid #EEEEEE;
        }

        .facebook {
            background-color: #3b5998;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer;
        }

        .twitter {
            background-color: #1DA1F2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer;
        }

        .linkedin {
            background-color: #2867B2;
            color: #fff;
            font-size: 18px;
            padding-top: 5px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
            cursor: pointer;
        }

        .line {
            height: 1px;
            width: 45%;
            background-color: #E0E0E0;
            margin-top: 10px;
        }

        .or {
            width: 10%;
            font-weight: bold;
        }

        .text-sm {
            font-size: 14px !important;
        }

        ::placeholder {
            color: #BDBDBD;
            opacity: 1;
            font-weight: 300
        }

        :-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        ::-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        input, textarea {
            padding: 10px 12px 10px 12px;
            border: 1px solid lightgrey;
            border-radius: 2px;
            margin-bottom: 5px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px;
        }

        input:focus, textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #3078fe;
            outline-width: 0;
        }

        a {
            color: inherit;
            cursor: pointer;
        }

        /* .btn-blue {
            background-color: #1A237E;
            width: 150px;
            color: #fff;
            border-radius: 2px;
        } */

        .bg-blue {
            color: #fff;
            background-color: #0084ff;
        }

                    .project-tab {
                        padding: 10%;
                        margin-top: -8%;
                    }
                    .project-tab #tabs{
                        background: #007b5e;
                        color: #eee;
                    }
                    .project-tab #tabs h6.section-title{
                        color: #eee;
                    }
                    .project-tab #tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
                        color: #0062cc;
                        background-color: transparent;
                        border-color: transparent transparent #f3f3f3;
                        border-bottom: 3px solid !important;
                        font-size: 16px;
                        font-weight: bold;
                    }
                    .project-tab .nav-link {
                        border: 1px solid transparent;
                        border-top-left-radius: .25rem;
                        border-top-right-radius: .25rem;
                        color: #0062cc;
                        font-size: 16px;
                        font-weight: 600;
                    }
                    .project-tab .nav-link:hover {
                        border: none;
                    }
                    .project-tab thead{
                        background: #f3f3f3;
                        color: #333;
                    }
                    .project-tab a{
                        text-decoration: none;
                        color: #333;
                        font-weight: 600;
                    }
                
        @media screen and (max-width: 991px) {
            .logo {
                margin-left: 0px;
            }

            .image {
                width: 300px;
                height: 220px;
            }

            .border-line {
                border-right: none;
            }

            .card2 {
                border-top: 1px solid #EEEEEE !important;
                margin: 0px 15px;
            }
        }
    </style>
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('fontawesome/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/brands.min.css') }}">

    <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/fontawesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('fontawesome/css/regular.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/regular.min.css') }}">

    <link rel="stylesheet" href="{{ asset('fontawesome/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome/css/solid.min.css') }}">

    <link rel="stylesheet" href="{{ asset('fontawesome/css/svg-with-js.css') }}">

</head>
<body class="" style="height: 100%">
    <nav class="navbar navbar-expand-md navbar-light bg-light ">
        {{-- <div class="container"> --}}
            <a class="navbar-brand" href="{{ url('home') }}">
                <img src="{{asset('image/logo.png')}}" height="70px" style="margin-bottom: -20px; margin-top: -20px; margin-left: 0">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav md-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastre-se') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        {{-- </div> --}}
    </nav>

    <div class="flex-shrink-0 p-3 bg-white" style="width: 280px; position: absolute; height: 100%;">
        <ul class="list-unstyled ps-0 pt-3">
          <li class="mb-1">
            <a class="pl-3  collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                <i class="fa-solid fa-clock"></i> <b>Ponto</b>
            </a>
            <div class="collapse" id="home-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-3 pl-4">
                <hr>
                <li class="mb-2">
                    <a href="{{route('ponto.index')}}" class="" style="text-decoration: none"><i class="fa-solid fa-business-time"></i> <b>Pontos</b></a>
                </li>
                <hr>  
                <li class="mb-2">
                    <a href="{{route('ponto.create')}}" class="" style="text-decoration: none"><i class="fa-solid fa-calendar-plus"></i> <b>Cadastrar</b></a>
                </li>
                <hr>
                <li class="mb-2">
                    <a href="#" class="" style="text-decoration: none"><i class="fa-solid fa-file-pdf"></i> <b>Relatório</b></a>
                </li>
                <hr>
              </ul>
            </div>
          </li>
        </ul>
    </div>

    <div class="row">

        <div class="container-fluid px-lg-2 px-xl-5 py-5 mx-auto">
            @yield('content')
        </div>

    </div>

      <!-- Scripts -->
    <script src="{{ asset('fontawesome/js/all.js') }}"></script>
    <script src="{{ asset('fontawesome/js/all.min.js') }}"></script>

    <script src="{{ asset('fontawesome/js/brands.js') }}"></script>
    <script src="{{ asset('fontawesome/js/brands.min.js') }}"></script>

    <script src="{{ asset('fontawesome/js/fontawesome.js') }}"></script>
    <script src="{{ asset('fontawesome/js/fontawesome.min.js') }}"></script>

    <script src="{{ asset('fontawesome/js/regular.js') }}"></script>
    <script src="{{ asset('fontawesome/js/regular.min.js') }}"></script>

    <script src="{{ asset('fontawesome/js/solid.js') }}"></script>
    <script src="{{ asset('fontawesome/js/solid.min.js') }}"></script>

    <script src="{{ asset('fontawesome/js/v4-shims.js') }}"></script>
</body>
</html>

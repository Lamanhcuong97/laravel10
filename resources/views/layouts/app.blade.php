<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        body{
            background: #364150;
        }

        .card-login{
            width: 55%;
            margin: auto;
            /*margin-top: 24vh;*/
            background: #eceef1;
        }


        .card-register{
            width: 80%;
            margin: auto;
            /*margin-top: 15vh;*/
            background: #eceef1;
        }

        .card-header{
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            font-family: serif;
            color: #2a9caf;
        }

        .card-body {
             padding: 1.25rem 0; 
        }

        .text-md-left{
            text-align: left;
            margin-left: 15px;
        }

        label {
            margin-left: 1rem;
            display: inline-block;
            margin-bottom: .5rem;
            margin-top: 0.5rem;
        }

        .btn-left{
            width: 90%;
            margin-left:17px;
           
            /*margin: 0 5px;*/
           

        }

        .btn-right{
            width: 90%;
           
           
        }

        .btn-right a{
            color: #fff; 
            width: 100%;
        }

        .btn-right a:hover{
            text-decoration: none; 
        }

        .title{
            font-size: 30px;
            text-align: center;
            color: #fff;
            margin-top: 2vh;

        }

        .title span{
            color: #f19a13;

        }

        
    </style>
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}
{{-- 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('admin.login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('admin.register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div> --}}
            </div>
        </nav>

        <main class="py-4">
            <h2 class="title">ZENT <span>SHOP</span></h2>
            @yield('content')
        </main>
    </div>
    <script type="text/javascript">
        // $(document).ready(function(){
        //     $('.btn-right').click(function(e){
        //         // e.preventDefault();
        //     })
        // })
    </script>
</body>
</html>
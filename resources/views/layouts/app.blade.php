<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Todo App | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
{{-- Bootstrap css --}}
<link rel="stylesheet" href="{{ URL::asset('bootstrap\css\bootstrap.min.css') }}">
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css\animate.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   ToDoApp
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item active">
                                <a class="nav-link disabled " href="#">
                                    <span><i class="fa fa-user mr-3" aria-hidden="true"></i></span>{{ Auth::user()->name }} <span class="caret"></span>
                                </a>


                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('task.create')}}">New Task</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{ route('task.index')}}">Task List</a>
                                  </li>
                                  <li class="nav-item">
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                        <button class="btn btn-group-sm btn-outline-danger ml-3" type="submit">logout</button>
                                    </form>
                                  </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('landing')
            <div class="container">
                    @include('alerts.message_alerts')
                    @yield('content')
            </div>


        </main>
    </div>

     {{-- Bootstrap js --}}
<script type="text/javascript" src="{{ URL::asset('bootstrap\js\jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('bootstrap\js\popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('bootstrap\js\bootstrap.min.js') }}"></script>
</body>
</html>

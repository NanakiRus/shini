<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
@foreach($page as $value)
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $value->title }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Каталог шин <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Зима</a></li>
                            <li><a href="#">Лето</a></li>
                            <li><a href="#">Всесезонная</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/tires">Все шины</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <div class="page-header">
            <h1>{{$value->header}}</h1>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                {!! $value->text !!}
            </div>
        </div>



    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
@endforeach
</html>

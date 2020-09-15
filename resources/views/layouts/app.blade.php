<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
    <title>COPUSD</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.css')

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        @include('layouts.navbar')
        @include('layouts.aside')


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(session('info'))
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @yield('content')
        </div>
        @include('layouts.footer')

    </div>
    @include('layouts.scripts')
</body>

</html>
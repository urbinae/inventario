<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
    <title>Fenix</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        FENIX
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->                    
                    <ul class="nav navbar-nav">
                        @guest
                        
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Configuración<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                @can('documents.index')
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('documents.index') }}">Tipos de Documento</a>
                                </li>
                                @endcan
                                @can('iva.index')
                                <li class="nav-item">
                                    <a class="nav-link" href="#">IVA</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Productos<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                    @can('categories.index')
                                    <li>
                                        <a href="{{ route('categories.index') }}">
                                            Categorias
                                        </a>
                                    </li>
                                    @endcan
                                    @can('products.index')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('products.index') }}">Productos</a>
                                    </li>
                                    @endcan
                                </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Compras<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                    @can('providers.index')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('providers.index') }}">Proveedores</a>
                                    </li>
                                    @endcan
                                    @can('purchases.index')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('purchases.index') }}">Entradas</a>
                                    </li>
                                    @endcan
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>Almacén<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                @can('store.in.index')
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('store.index') }}">Materia Prima</a>
                                    </li>
                                    @endcan
                                    @can('purchases.index')
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Productos Terminados</a>
                                    </li>
                                    @endcan
                            </ul>
                        </li>                                
                        @endguest                        
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Iniciar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
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

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

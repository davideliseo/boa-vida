<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- <link rel="icon" href="/img/favicon.ico" type="image/x-icon"> -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-deg-dark shadow align-items-center">
            <div class="container">
                <a class="navbar-brand pr-2" href="{{ route('home') }}">
                    {{ config('app.name', 'BVCI') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @auth
                            @can('viewAny', \App\Models\Product::class)
                                <li class="nav-item pr-2">
                                    <a class="nav-link" href="{{ route('products.index') }}" role="button">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-round pr-2 md-18"> star_rate </i>
                                            {{ __('Productos') }}
                                        </div>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', \App\Models\Supply::class)
                                <li class="nav-item pr-2">
                                    <a class="nav-link" href="{{ route('supplies.index') }}" role="button">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-round pr-2 md-18"> category </i>
                                            {{ __('Insumos') }}
                                        </div>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', \App\Models\Sale::class)
                                <li class="nav-item pr-2">
                                    <a class="nav-link" href="{{ route('sales.index') }}" role="button">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-round pr-2 md-18"> attach_money </i>
                                            {{ __('Ventas') }}
                                        </div>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', \App\Models\Supplier::class)
                                <li class="nav-item pr-2">
                                    <a class="nav-link" href="{{ route('suppliers.index') }}" role="button">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-round pr-2 md-18"> local_shipping </i>
                                            {{ __('Proveedores') }}
                                        </div>
                                    </a>
                                </li>
                            @endcan
                            @can('viewAny', \App\Models\User::class)
                                <li class="nav-item pr-2">
                                    <a class="nav-link" href="{{ route('users.index') }}" role="button">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-round pr-2 md-18"> people </i>
                                            {{ __('Usuarios') }}
                                        </div>
                                    </a>
                                </li>
                            @endcan
                        @endauth
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item pr-2">
                                <div class="btn-group">
                                    <a class="btn btn-dark" href="{{ route('users.index') }}" role="button">
                                        <div class="d-flex align-items-center">
                                            <i class="material-icons-round pr-2 md-18"> person </i>
                                            {{ Auth::user()->name }}
                                        </div>
                                    </a>
                                    <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only"> {{ __('Toggle navigation') }} </span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex align-items-center">
                                                <i class="material-icons-round pr-2 md-18"> settings </i>
                                                {{ __('Ajustes') }}
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <div class="d-flex align-items-center">
                                                <i class="material-icons-round pr-2 md-18"> power_settings_new </i>
                                                {{ __('Cerrar sesión') }}
                                            </div>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="post" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="pt-4">
            @yield('content')
        </main>
    </div>
</body>

</html>

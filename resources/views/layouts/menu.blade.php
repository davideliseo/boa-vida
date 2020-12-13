<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav>
            <a id="resp-menu" class="responsive-menu" href="#"><i
                    class="fa fa-reorder"></i> Menu</a>
            <ul class="menu">
                <li><a href="/"><i class="fa fa-user"></i> Boa Vida</a></li>
                <li><a href="/productos"><i class="fa fa-camera"></i>
                        Productos</a>
                </li>
                <li><a href="/insumos"><i class="fa fa-bullhorn"></i>
                        Insumos</a>
                </li>
                <li><a href="/ventas"><i class="fa fa-bullhorn"></i> Ventas </a>
                </li>
                <li><a href="/proveedores"><i class="fa fa-bullhorn"></i>
                        Proveedores</a></li>
                <li><a href="/usuarios"><i class="fa fa-tags"></i> Usuarios</a>
                </li>
                <li><a href="#"><i
                            class="fa fa-camera"></i>{{ Auth::user()->email }}</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>

                            <form id="logout-form"
                                action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

</body>

</html>

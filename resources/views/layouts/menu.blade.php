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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav>
            <ul class="menu">
                <li>
                    <a href="{{ route('home') }}">
                        Boa Vida
                    </a>
                </li>
                <li>
                    <a href="{{ route('productos.index') }}">
                        Productos
                    </a>
                </li>
                <li>
                    <a href="{{ route('insumos.index') }}">
                        Insumos
                    </a>
                </li>
                <li>
                    <a href="{{ route('ventas.index') }}">
                        Ventas
                    </a>
                </li>
                <li>
                    <a href="{{ route('proveedores.index') }}">
                        Proveedores
                    </a>
                </li>
                <li>
                    <a href="{{ route('usuarios.index') }}">
                        Usuarios
                    </a>
                </li>

                <li><a href="#">{{ Auth::user()->email }}</a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>

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

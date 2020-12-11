<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Boa Vida | Inicio</title>
    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">

</head>

<body>
    <nav>
        <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>
        <ul class="menu">
            <li><a href="/"><i class="fa fa-user"></i> Boa Vida</a></li>
            <li><a href="/productos"><i class="fa fa-camera"></i> Productos</a></li>
            <li><a href="/insumos"><i class="fa fa-bullhorn"></i> Insumos</a></li>
            <li><a href="/ventas"><i class="fa fa-bullhorn"></i> Ventas </a></li>
            <li><a href="/proveedores"><i class="fa fa-bullhorn"></i> Proveedores</a></li>
            <li><a href="/usuarios"><i class="fa fa-tags"></i> Usuarios</a></li>
            <li><a href="#"><i class="fa fa-camera"></i>{{ Auth::user()->email }}</a>
                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Cerrar sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="welcome">
        <div class="container">
            <div class="flower">
                <img src="/img/logo.jpg" alt="Logo Boa Vida">
                <h1>Bienvenido:</h1>
                {{--TODO: reemplazar con nombre de usuario--}}
                <h2>"Usuario"</h2>
                <p>Al sistema de inventario "Boa Vida"</p>
            </div>
        </div>
    </div>
</body>

</html>

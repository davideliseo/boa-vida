@extends('layouts.menu')

@section('contenido')
    <div class="welcome">
        <div class="container">
            <img class="displayed" src="/img/logo.jpg" alt="Logo Boa Vida">
            <h1>Bienvenido:</h1>
            <h2>{{ Auth::user()->name }}</h2>
            <p>Al sistema de inventario "Boa Vida"</p>
        </div>
    </div>
@endsection

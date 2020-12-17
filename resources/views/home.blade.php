@extends('layouts.app')

@section('contenido-original')
    <div class="welcome">
        <div class="container">
            <img class="displayed" src="/img/logo.jpg" alt="Logo Boa Vida">
            <h1>Bienvenido:</h1>
            <h2>{{ Auth::user()->name }}</h2>
            <p>Al sistema de inventario "Boa Vida"</p>
        </div>
    </div>
@endsection

@section('contenido')
    <div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow" style="border-radius: 0.5rem;">
                <div class="card-body">
                    <img class="mx-auto d-block" src="/img/logo.jpg" width="60%" alt="Logo Boa Vida">
                    <div class="d-flex flex-column mb-3">
                        <div style="color: red;">TODO:</div>
                        <div class="p-2 mx-auto" style="font-family: Helvetica, sans-serif;">
                            Bienvenido
                        </div>
                        <div class="p-2 mx-auto">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="p-2 mx-auto">Al sistema</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

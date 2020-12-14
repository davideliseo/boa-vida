@extends('layouts.menu')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <x-cabecera titulo="Productos" btntipo="btn-primary" btntexto="Agregar"
                            btnruta="productos.create" />
                    </div>
                    <div class="card-body">
                        <x-tabla tabla="productos" :encabezados="\App\Models\Producto::$indexables"
                            :coleccion="\App\Models\Producto::all()" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

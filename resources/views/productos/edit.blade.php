@extends('layouts.menu')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <x-cabecera titulo="Editar producto" btntipo="btn-dark" btntexto="Atrás"
                            btnruta="productos.index" />
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('productos.update', $producto) }}">
                            @csrf
                            @method('PATCH')
                            <x-formulario ruta="productos.update" btntexto="Editar"
                                :encabezados="\App\Models\Producto::$camposIndexables" :item="$producto" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

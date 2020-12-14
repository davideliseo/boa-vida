@extends('layouts.menu')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <x-cabecera titulo="Agregar producto" btntipo="btn-dark" btntexto="Atrás"
                            btnruta="productos.index" />
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('productos.store') }}">
                            @csrf
                            <x-formulario ruta="productos.store" btntexto="Agregar"
                                :encabezados="\App\Models\Producto::$indexables" :item="null" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

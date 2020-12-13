@extends('layouts.menu')

@section('content')
    <a href="{{ route('productos.create') }}">Agregar</a>
    <div class="row pt-5">
        @foreach (\App\Models\Producto::all() as $producto)
            <div>
                {{ $producto->nombre }}
                {{ $producto->id }}
                <a href="{{ route('productos.edit', $producto) }}">Editar</a>
            </div>
        @endforeach
    </div>
@endsection

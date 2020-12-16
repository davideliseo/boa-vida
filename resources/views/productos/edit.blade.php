@extends('layouts.app')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Editar producto" btntipo="btn-dark" btntexto="Atrás" btnruta="productos.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-formulario ruta="productos.update" btntexto="Editar" :encabezados="\App\Models\Producto::$indexables"
        :item="$producto" />
@endsection

@section('contenido')
    <x-tarjeta :ancho="8" />
@endsection

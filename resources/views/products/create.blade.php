@extends('layouts.app')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Agregar producto" btntipo="btn-dark" btntexto="Atrás" btnruta="productos.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-formulario ruta="productos.store" btntexto="Agregar" :encabezados="\App\Models\Producto::$indexables" :item="null" />
@endsection

@section('contenido')
    <x-tarjeta ancho="8" />
@endsection

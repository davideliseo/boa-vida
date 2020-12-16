@extends('layouts.app')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Productos" btntipo="btn-primary" btntexto="Agregar" btnruta="productos.create" />
@endsection

@section('tarjeta-cuerpo')
    <x-tabla tabla="productos" :encabezados="App\Models\Producto::$indexables" :coleccion="\App\Models\Producto::all()" />
@endsection

@section('contenido')
    <x-tarjeta ancho="12" />
@endsection

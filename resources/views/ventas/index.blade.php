@extends('layouts.menu')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Ventas" btntipo="btn-primary" btntexto="Agregar" btnruta="ventas.create" />
@endsection

@section('tarjeta-cuerpo')
    <x-tabla tabla="ventas" :encabezados="App\Models\Venta::$indexables" :coleccion="\App\Models\Venta::all()" />
@endsection

@section('contenido')
    <x-tarjeta ancho="12" />
@endsection

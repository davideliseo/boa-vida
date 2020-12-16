@extends('layouts.app')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Agregar venta" btntipo="btn-dark" btntexto="Atrás" btnruta="ventas.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-formulario ruta="ventas.store" btntexto="Agregar" :encabezados="\App\Models\Venta::$indexables" :item="null" />
@endsection

@section('contenido')
    <x-tarjeta ancho="8" />
@endsection

@extends('layouts.app')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Editar venta" btntipo="btn-dark" btntexto="Atrás" btnruta="ventas.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-formulario ruta="ventas.update" btntexto="Editar" :encabezados="\App\Models\Venta::$indexables"
        :item="$venta" />
@endsection

@section('contenido')
    <x-tarjeta :ancho="8" />
@endsection

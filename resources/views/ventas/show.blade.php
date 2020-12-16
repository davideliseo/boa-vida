@extends('layouts.menu')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Ficha de venta" btntipo="btn-dark" btntexto="Atrás" btnruta="ventas.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-detalle :item="$venta" :encabezados="\App\Models\Venta::$indexables" btntexto="Editar" tabla="ventas" />
@endsection

@section('contenido')
    <x-tarjeta ancho="8" />
@endsection

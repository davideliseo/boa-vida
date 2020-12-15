@extends('layouts.menu')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Ficha de insumo" btntipo="btn-dark" btntexto="Atrás" btnruta="insumos.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-detalle :item="$insumo" :encabezados="\App\Models\Insumo::$indexables" btntexto="Editar" tabla="insumos" />
@endsection

@section('contenido')
    <x-tarjeta ancho="8" />
@endsection

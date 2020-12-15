@extends('layouts.menu')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Agregar insumo" btntipo="btn-dark" btntexto="Atrás" btnruta="insumos.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-formulario ruta="insumos.store" btntexto="Agregar" :encabezados="\App\Models\Insumo::$indexables" :item="null" />
@endsection

@section('contenido')
    <x-tarjeta ancho="8" />
@endsection

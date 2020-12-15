@extends('layouts.menu')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Editar insumo" btntipo="btn-dark" btntexto="Atrás" btnruta="insumos.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-formulario ruta="insumos.update" btntexto="Editar" :encabezados="\App\Models\Insumo::$indexables"
        :item="$insumo" />
@endsection

@section('contenido')
    <x-tarjeta :ancho="8" />
@endsection

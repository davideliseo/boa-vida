@extends('layouts.app')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Insumos" btntipo="btn-primary" btntexto="Agregar" btnruta="insumos.create" />
@endsection

@section('tarjeta-cuerpo')
    <x-tabla tabla="insumos" :encabezados="App\Models\Insumo::$indexables" :coleccion="\App\Models\Insumo::all()" />
@endsection

@section('contenido')
    <x-tarjeta ancho="12" />
@endsection

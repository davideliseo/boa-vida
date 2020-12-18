@extends('layouts.app')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Proveedores" btntipo="btn-primary" btntexto="Agregar" btnruta="proveedores.create" />
@endsection

@section('tarjeta-cuerpo')
    <x-tabla tabla="proveedores" :encabezados="App\Models\Proveedor::$indexables" :coleccion="\App\Models\Proveedor::all()" />
@endsection

@section('contenido')
    <x-tarjeta ancho="12" />
@endsection

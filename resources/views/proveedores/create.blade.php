@extends('layouts.menu')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Agregar proveedor" btntipo="btn-dark" btntexto="Atrás" btnruta="proveedores.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-formulario ruta="proveedores.store" btntexto="Agregar" :encabezados="\App\Models\Proveedor::$indexables" :item="null" />
@endsection

@section('contenido')
    <x-tarjeta ancho="8" />
@endsection

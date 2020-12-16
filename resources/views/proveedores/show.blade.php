@extends('layouts.app')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Ficha de proveedor" btntipo="btn-dark" btntexto="Atrás" btnruta="proveedores.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-detalle :item="$proveedor" :encabezados="\App\Models\Proveedor::$indexables" btntexto="Editar" tabla="proveedores" />
@endsection

@section('contenido')
    <x-tarjeta ancho="8" />
@endsection

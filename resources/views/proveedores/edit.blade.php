@extends('layouts.app')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Editar proveedor" btntipo="btn-dark" btntexto="Atrás" btnruta="proveedores.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-formulario ruta="proveedores.update" btntexto="Editar" :encabezados="\App\Models\Proveedor::$indexables"
        :item="$proveedor" />
@endsection

@section('contenido')
    <x-tarjeta :ancho="8" />
@endsection

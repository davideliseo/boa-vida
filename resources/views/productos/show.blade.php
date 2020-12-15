@extends('layouts.menu')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Ficha de producto" btntipo="btn-dark" btntexto="Atrás" btnruta="productos.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-detalle :item="$producto" :encabezados="\App\Models\Producto::$indexables" btntexto="Editar" tabla="productos" />
@endsection

@section('contenido')
    <x-tarjeta ancho="8" />
@endsection

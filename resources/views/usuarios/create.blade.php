@extends('layouts.menu')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Agregar usuario" btntipo="btn-dark" btntexto="Atrás" btnruta="usuarios.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-formulario ruta="usuarios.store" btntexto="Agregar" :encabezados="\App\Models\User::$indexables" :item="null" />
@endsection

@section('contenido')
    <x-tarjeta ancho="8" />
@endsection

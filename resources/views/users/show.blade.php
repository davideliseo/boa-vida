@extends('layouts.app')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Ficha de usuario" btntipo="btn-dark" btntexto="Atrás" btnruta="usuarios.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-detalle :item="$user" :encabezados="\App\Models\User::$indexables" btntexto="Editar" tabla="usuarios" />
@endsection

@section('contenido')
    <x-tarjeta ancho="8" />
@endsection

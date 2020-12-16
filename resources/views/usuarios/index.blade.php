@extends('layouts.menu')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Usuarios" btntipo="btn-primary" btntexto="Agregar" btnruta="usuarios.create" />
@endsection

@section('tarjeta-cuerpo')
    <x-tabla tabla="usuarios" :encabezados="\App\Models\User::$indexables" :coleccion="\App\Models\User::all()" />
@endsection

@section('contenido')
    <x-tarjeta ancho="12" />
@endsection

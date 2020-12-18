@extends('layouts.app')

@section('tarjeta-encabezado')
    <x-encabezado titulo="Editar usuario" btntipo="btn-dark" btntexto="Atrás" btnruta="usuarios.index" />
@endsection

@section('tarjeta-cuerpo')
    <x-formulario ruta="usuarios.update" btntexto="Editar" :encabezados="\App\Models\User::$indexables"
        :item="$user" />
@endsection

@section('contenido')
    <x-tarjeta :ancho="8" />
@endsection

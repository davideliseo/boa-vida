@extends('layouts.app')

@section('card-header')
    <x-header titulo="Editar usuario" btntipo="btn-dark" btntexto="Atrás" btnruta="users.index" />
@endsection

@section('card-body')
    <x-form ruta="users.update" btntexto="Editar" :encabezados="\App\Models\User::$indexables"
        :item="$user" />
@endsection

@section('content')
    <x-card :ancho="8" />
@endsection

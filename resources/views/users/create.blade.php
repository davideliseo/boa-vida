@extends('layouts.app')

@section('card-header')
    <x-header titulo="Agregar usuario" btntipo="btn-dark" btntexto="Atrás" btnruta="users.index" />
@endsection

@section('card-body')
    <x-form ruta="users.store" btntexto="Agregar" :encabezados="\App\Models\User::$indexables" :item="null" />
@endsection

@section('content')
    <x-card ancho="8" />
@endsection

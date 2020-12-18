@extends('layouts.app')

@section('card-header')
    <x-header titulo="Usuarios" btntipo="btn-primary" btntexto="Agregar" btnruta="users.create" />
@endsection

@section('card-body')
    <x-table tabla="users" :encabezados="\App\Models\User::$indexables" :coleccion="\App\Models\User::all()" />
@endsection

@section('content')
    <x-card ancho="12" />
@endsection

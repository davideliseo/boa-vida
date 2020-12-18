@extends('layouts.app')

@section('card-header')
    <x-header titulo="Ficha de usuario" btntipo="btn-dark" btntexto="Atrás" btnruta="users.index" />
@endsection

@section('card-body')
    <x-sheet :item="$user" :encabezados="\App\Models\User::$indexables" btntexto="Editar" tabla="users" />
@endsection

@section('content')
    <x-card ancho="8" />
@endsection

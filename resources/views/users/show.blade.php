@extends('layouts.app')

@section('card-header')
    <x-header title="Ficha de usuario" btntype="btn-dark" btntext="Atrás" btnroute="users.index"/>
@endsection

@section('card-body')
    <x-sheet :item="$user" :headers="\App\Models\User::$indexables" btntext="Editar" table="users"/>
@endsection

@section('content')
    <x-card width="8"/>
@endsection

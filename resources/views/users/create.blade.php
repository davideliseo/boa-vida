@extends('layouts.app')

@section('card-header')
    <x-header title="Agregar usuario" btntype="btn-dark" btntext="Atrás" btnroute="users.index" />
@endsection

@section('card-body')
    <x-form route="users.store" btntext="Agregar" :headers="\App\Models\User::$indexables" :item="null" />
@endsection

@section('content')
    <x-card width="8" />
@endsection

@extends('layouts.app')

@section('card-header')
    <x-header title="Usuarios" btntype="btn-primary" btntext="Agregar" btnroute="users.create" />
@endsection

@section('card-body')
    <x-table table="users" :headers="\App\Models\User::$indexables" :collection="\App\Models\User::all()" />
@endsection

@section('content')
    <x-card width="12" />
@endsection

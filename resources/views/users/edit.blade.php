@extends('layouts.app')

@section('card-header')
    <x-header title="Editar usuario" btntype="btn-dark" btntext="Atrás" btnroute="users.index"/>
@endsection

@section('card-body')
    <x-form route="users.update" btntext="Editar" :headers="\App\Models\User::$indexables"
        :item="$user"/>
@endsection

@section('content')
    <x-card :width="8"/>
@endsection

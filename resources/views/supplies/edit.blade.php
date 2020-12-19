@extends('layouts.app')

@section('card-header')
    <x-header title="Editar insumo" btntype="btn-dark" btntext="Atrás" btnroute="supplies.index" />
@endsection

@section('card-body')
    <x-form route="supplies.update" btntext="Editar" :headers="\App\Models\Supply::$indexables"
        :item="$supply" />
@endsection

@section('content')
    <x-card :width="8" />
@endsection

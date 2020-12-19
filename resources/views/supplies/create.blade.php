@extends('layouts.app')

@section('card-header')
    <x-header title="Agregar insumo" btntype="btn-dark" btntext="Atrás" btnroute="supplies.index" />
@endsection

@section('card-body')
    <x-form route="supplies.store" btntext="Agregar" :headers="\App\Models\Supply::$indexables" :item="null" />
@endsection

@section('content')
    <x-card width="8" />
@endsection

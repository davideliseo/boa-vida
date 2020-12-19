@extends('layouts.app')

@section('card-header')
    <x-header title="Editar venta" btntype="btn-dark" btntext="Atrás" btnroute="sales.index" />
@endsection

@section('card-body')
    <x-form route="sales.update" btntext="Editar" :headers="\App\Models\Sale::$indexables"
        :item="$venta" />
@endsection

@section('content')
    <x-card :width="8" />
@endsection

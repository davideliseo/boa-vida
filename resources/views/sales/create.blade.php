@extends('layouts.app')

@section('card-header')
    <x-header title="Agregar venta" btntype="btn-dark" btntext="Atrás" btnroute="sales.index" />
@endsection

@section('card-body')
    <x-form route="sales.store" btntext="Agregar" :headers="\App\Models\Sale::$indexables" :item="null" />
@endsection

@section('content')
    <x-card width="8" />
@endsection

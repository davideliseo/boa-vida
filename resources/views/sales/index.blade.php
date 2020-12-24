@extends('layouts.app')

@section('card-header')
    <x-header title="Ventas" btntype="btn-primary" btntext="Agregar" btnroute="sales.create"/>
@endsection

@section('card-body')
    <x-table table="sales" :headers="App\Models\Sale::$indexables" :collection="\App\Models\Sale::all()"/>
@endsection

@section('content')
    <x-card width="12"/>
@endsection

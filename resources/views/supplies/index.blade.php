@extends('layouts.app')

@section('card-header')
    <x-header title="Insumos" btntype="btn-primary" btntext="Agregar" btnroute="supplies.create"/>
@endsection

@section('card-body')
    <x-table table="supplies" :headers="App\Models\Supply::$indexables" :collection="\App\Models\Supply::all()"/>
@endsection

@section('content')
    <x-card width="12"/>
@endsection

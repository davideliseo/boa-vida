@extends('layouts.app')

@section('card-header')
    <x-header title="Productos" btntype="btn-deg-green-2" btntext="Agregar" btnroute="products.create" />
@endsection

@section('card-body')
    <x-table table="products" :headers="App\Models\Product::$indexables" :collection="\App\Models\Product::all()" />
@endsection

@section('content')
    <x-card width="12" />
@endsection

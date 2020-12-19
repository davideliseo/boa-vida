@extends('layouts.app')

@section('card-header')
    <x-header title="Agregar producto" btntype="btn-dark" btntext="Atrás" btnroute="products.index" />
@endsection

@section('card-body')
    <x-form route="products.store" btntext="Agregar" :headers="\App\Models\Product::$indexables" :item="null" />
@endsection

@section('content')
    <x-card width="8" />
@endsection

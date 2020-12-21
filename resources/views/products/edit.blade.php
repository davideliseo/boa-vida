@extends('layouts.app')

@section('card-header')
    <x-header title="Editar producto" btntype="btn-dark" btntext="Atrás" btnroute="products.index" />
@endsection

@section('card-body')
    <x-form route="products.update" btntext="Editar" :headers="\App\Models\Product::$indexables"
        :item="$product" />
@endsection

@section('content')
    <x-card :width="8" />
@endsection

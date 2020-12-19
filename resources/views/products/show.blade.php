@extends('layouts.app')

@section('card-header')
    <x-header title="Ficha de producto" btntype="btn-dark" btntext="Atrás" btnroute="products.index" />
@endsection

@section('card-body')
    <x-sheet :item="$producto" :headers="\App\Models\Product::$indexables" btntext="Editar" table="products" />
@endsection

@section('content')
    <x-card width="8" />
@endsection

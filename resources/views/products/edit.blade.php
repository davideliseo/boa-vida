@extends('layouts.app')

@section('content')
    <x-resource.edit resource="products" title="Editar producto" :item="$product" />
@endsection

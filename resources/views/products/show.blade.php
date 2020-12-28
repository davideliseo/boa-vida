@extends('layouts.app')

@section('content')
    <x-resource.show resource="products" title="Ficha de producto" :item="$product" />
@endsection

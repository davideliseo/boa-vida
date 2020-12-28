@extends('layouts.app')

@section('content')
    <x-resource.index resource="products" :collection="$collection" />
@endsection

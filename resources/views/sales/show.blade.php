@extends('layouts.app')

@section('content')
    <x-resource.show resource="sales" title="Ficha de venta" :item="$sale" />
@endsection

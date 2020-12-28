@extends('layouts.app')

@section('content')
    <x-resource.edit resource="sales" title="Editar venta" :item="$sale" />
@endsection

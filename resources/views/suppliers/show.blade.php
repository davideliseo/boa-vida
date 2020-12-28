@extends('layouts.app')

@section('content')
    <x-resource.show resource="suppliers" title="Ficha de proveedor" :item="$supplier" />
@endsection

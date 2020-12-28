@extends('layouts.app')

@section('content')
    <x-resource.edit resource="suppliers" title="Editar proveedor" :item="$supplier" />
@endsection

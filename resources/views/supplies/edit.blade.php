@extends('layouts.app')

@section('content')
    <x-resource.edit resource="supplies" title="Editar insumo" :item="$supply" />
@endsection

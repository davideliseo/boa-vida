@extends('layouts.app')

@section('content')
    <x-resource.show resource="supplies" title="Ficha de insumo" :item="$supply" />
@endsection

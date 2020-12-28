@extends('layouts.app')

@section('content')
    <x-resource.index resource="supplies" :collection="$collection" />
@endsection

@extends('layouts.app')

@section('content')
    <x-resource.index resource="sales" :collection="$collection" />
@endsection

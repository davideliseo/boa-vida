@extends('layouts.app')

@section('content')
    <x-resource.index resource="suppliers" :collection="$collection" />
@endsection

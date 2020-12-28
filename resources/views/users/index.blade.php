@extends('layouts.app')

@section('content')
    <x-resource.index resource="users" :collection="$collection" />
@endsection

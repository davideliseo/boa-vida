@extends('layouts.app')

@section('content')
    <x-resource.show resource="users" title="Ficha de usuario" :item="$user" />
@endsection

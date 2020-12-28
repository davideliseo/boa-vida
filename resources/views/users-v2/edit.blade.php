@extends('layouts.app')

@section('content')
    <x-resource.edit resource="users" title="Editar usuario" :item="$user" />
@endsection

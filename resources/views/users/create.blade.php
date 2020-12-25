@extends('layouts.app')

@section('content')
    <x-card.create title="Agregar usuario" resource="users">
        <x-slot name="fields">
            <x-form.row.create resource="users" key="name" />
            <x-form.row.create resource="users" key="email" />
            <x-form.row.create resource="users" key="rut" />
            <x-form.row.create resource="users" key="address" />
            <x-form.row.create resource="users" key="phone_number" />
        </x-slot>
    </x-card.create>
@endsection

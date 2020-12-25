@extends('layouts.app')

@section('content')
    <x-card.edit title="Editar usuarios" resource="users" :item="$user">
        <x-slot name="fields">
            <x-form.row.edit resource="users" key="name"         :item="$user" />
            <x-form.row.edit resource="users" key="email"        :item="$user" />
            <x-form.row.edit resource="users" key="rut"          :item="$user" />
            <x-form.row.edit resource="users" key="address"      :item="$user" />
            <x-form.row.edit resource="users" key="phone_number" :item="$user" />
        </x-slot>
    </x-card.edit>
@endsection

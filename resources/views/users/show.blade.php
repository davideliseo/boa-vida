@extends('layouts.app')

@section('content')
    <x-card.show title="Ficha de usuario" resource="users" :item="$user">
        <x-slot name="fields">
            <x-form.row.show resource="users" key="id">
                <x-slot name="value">
                    {{ '#' . $user->id }}
                </x-slot>
            </x-form.row.show>

            <x-form.row.show resource="users" key="name"         :item="$user" />
            <x-form.row.show resource="users" key="email"        :item="$user" />
            <x-form.row.show resource="users" key="rut"          :item="$user" />
            <x-form.row.show resource="users" key="address"      :item="$user" />
            <x-form.row.show resource="users" key="phone_number" :item="$user" />
            <x-form.row.show resource="users" key="created_at"   :item="$user" />
            <x-form.row.show resource="users" key="updated_at"   :item="$user" />
        </x-slot>
    </x-card.show>
@endsection

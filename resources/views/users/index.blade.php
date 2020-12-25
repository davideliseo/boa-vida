@extends('layouts.app')

@section('content')
    <x-card.index title="Usuarios" resource="users" :model="App\Models\User::class" :collection="$collection">
        <x-slot name="table">
            <x-slot name="headers">
                    <x-table.header resource="users" key="name" />
                    <x-table.header resource="users" key="email" />
                    <x-table.header resource="users" key="rut" />
                    <x-table.header resource="users" key="address" />
                    <x-table.header resource="users" key="phone_number" />
            </x-slot>
            <x-slot name="rows">
                @foreach ($collection as $user)
                    <tr>
                        <x-table.cell resource="users" key="name"         :item="$user" />
                        <x-table.cell resource="users" key="email"        :item="$user" />
                        <x-table.cell resource="users" key="rut"          :item="$user" />
                        <x-table.cell resource="users" key="address"      :item="$user" />
                        <x-table.cell resource="users" key="phone_number" :item="$user" />
                        <td>
                            <x-table.row.actions resource="users" :item="$user" />
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-slot>
    </x-card.index>
@endsection

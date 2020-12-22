@extends('layouts.app')

@section('card-header')
    <div class="d-flex align-items-center justify-content-between">
        <div class="font-weight-bold"> Productos </div>
        <x-button-create resource="products" />
    </div>
@endsection

@section('card-body')
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-left"> Nombre </th>
                    <th scope="col" class="text-left"> Cantidad </th>
                    <th scope="col" class="text-left"> Precio </th>
                    <th scope="col" class="text-left"> Fecha de elaboración </th>
                    <th scope="col" class="text-left"> Fecha de vencimiento </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collection as $item)
                    <tr>
                        <td scope="col" class="text-left">
                            @can('view', $item)
                                <a href="{{ route('products.show', $item) }}">
                                    {{ $item->name }}
                                </a>
                            @else
                                {{ $item->name }}
                            @endcan
                        </td>

                        <td scope="col" class="text-left">
                            {{ $item->quantity }}
                        </td>

                        <td scope="col" class="text-left">
                            {{ $item->price }}
                        </td>

                        <td scope="col" class="text-left">
                            {{ $item->manufacturing_date }}
                        </td>

                        <td scope="col" class="text-left">
                            {{ $item->expiry_date }}
                        </td>

                        <td>
                            <div class="d-flex align-items-center">
                                @can('update', $item)
                                    <div class="pr-2">
                                        <x-button-update resource="products" :item="$item" />
                                    </div>
                                @endcan
                                @can('delete', $item)
                                    <x-button-delete resource="products" :item="$item" />
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('content')
    <div class="container pt-2">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow">
                    <div class="card-header"> @yield('card-header') </div>
                    <div class="card-body"> @yield('card-body') </div>
                </div>
            </div>
        </div>
    </div>
@endsection

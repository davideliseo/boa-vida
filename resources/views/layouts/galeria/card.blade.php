@extends('layouts.menu')

@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>@yield('card-header')</div>
                            <a class="btn btn-dark" href="{{ route('productos.index') }}">
                                Atrás
                            </a>
                        </div>
                    </div>
                    <div class="card-body">@yield('card-body')</div>
                </div>
            </div>
        </div>
    </div>
@endsection

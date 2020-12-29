@extends('layouts.app')

@section('content')
    <div class="container pt-2">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card shadow-lg">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="font-weight-bold"> Registrarse </div>
                            <div>
                                <a class="btn-v2 btn-deg-dark shadow-sm px-2" href="http://localhost:8000/login"
                                   role="button">
                                    <div class="d-flex align-items-center">
                                        <i class="material-icons-round  pr-2  md-18"> arrow_back </i>
                                        Atrás
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body my-2 pb-1 ml-5 mr-4 px-0">
                        <form id="register" method="post" action="{{ route('register') }}">
                            @csrf
                            <x-form.row.create resource="users" key="name" />
                            <x-form.row.create resource="users" key="rut" />
                            <x-form.row.create resource="users" key="email" />
                            <x-form.row.create resource="users" key="password" />
                            <x-form.row.create resource="users" key="address" />
                            <x-form.row.create resource="users" key="phone_number" />
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="form-group row mb-0 justify-content-center">
                            <button form="register" type="submit" class="btn-v2 btn-deg-dark-blue rounded shadow-sm">
                                Registrarse
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

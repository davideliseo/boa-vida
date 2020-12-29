@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow" style="border-radius: 0.5rem 0.5rem 0rem 0rem;">
                    <div class="card-body p-4"
                         style="background: linear-gradient(0deg, #dcdcdc 0%, white 10%); border-radius: 0.5rem 0.5rem 0rem 0rem; border-bottom: 0px;">
                        <img class="mx-auto d-block" src="/img/logo.png" width="50%" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card text-light bg-dark shadow">
                    <div class="card-header p-3">
                        <strong>Iniciar sesión</strong>
                    </div>
                    <div class="card-body my-2 pb-1 ml-5 mr-4 px-5">
                        <form id="login" method="post" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="rut" class="col-md-4 col-form-label text-md-left">
                                    <x-icon-label label="RUT" icon="fingerprint" pr="3" md="auto" />
                                </label>
                                <div class="col-md-7">
                                    <x-input.text :is-required="true" key="rut" />
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-left">
                                    <x-icon-label label="Contraseña" icon="vpn_key" pr="3" md="auto" />
                                </label>
                                <div class="col-md-7">
                                    <x-input.text :is-required="true" key="password" type="password" />
                                </div>
                            </div>

                            <div class="form-group row align-middle">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                               {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            Recordarme
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="row justify-content-center py-0">
                            <button form="login" type="submit" class="btn-v2 btn-deg-dark-blue">
                                Iniciar sesión
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow"
                     style="background: linear-gradient(180deg, #c1c0c0 0%, white 82%); border-radius: 0rem 0rem 0.5rem 0.5rem; border-top: 0px;">
                    <div class="card-body p-3" style=" border-radius: 0rem 0rem 0.5rem 0.5rem;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

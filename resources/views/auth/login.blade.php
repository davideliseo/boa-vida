<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Boa Vida | Inicio de sesión</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="welcome">
            <div class="pinkbox">
                <div class="signup nodisplay"></div>
                <div class="signin">
                    <h1 class="title"><span>Iniciar sesión</h1>
                    <hr grey width="75%" />
                    {{-- <form class="more-padding" autocomplete="off">
                        <input type="text" placeholder="Usuario">
                        <input type="password" placeholder="Contraseña">
                        <div class="checkbox">
                            <input type="checkbox" id="remember" /><label fur="remember">Guardar</label>
                        </div>
                        <button class="button submit">Ingresar</button>
                    </form> --}}
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="example@example.com"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="*****"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar sesión') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4 pb-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <div> &nbsp </div>
                                    <div><a
                                            href="{{ route('password.request') }}">{{ __('¿Olvidó su contraseña?') }}</a>
                                    </div>

                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="rightbox">
                <img class="flower" src="/img/logo.jpg" alt="" />
            </div>
        </div>
    </div>
    <!-- partial -->

</body>

</html>

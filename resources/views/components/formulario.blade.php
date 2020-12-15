<div>
    @if($item == null)
        <form method="post" action="{{ route($ruta) }}">
    @else
        <form method="post" action="{{ route($ruta, $item) }}">
            @method('PATCH')
    @endif
            @csrf
            @foreach ($encabezados as $key => $value)
                <div class="form-group row">
                    <label for="{{ $key }}" class="col-md-4 col-form-label text-md-right">
                        {{ $value['nombreCompleto'] }}
                    </label>

                    <div class="col-md-6">
                        <input id="{{ $key }}" type="text" class="form-control @error('{{ $key }}') is-invalid @enderror"
                            name="{{ $key }}" value="{{ old($key) ?? ($item[$key] ?? null) }}"
                            @if (in_array('required', $value['reglas']))
                                required
                            @endif
                            autocomplete="{{ $key }}"
                            @if ($loop->first)
                                autofocus
                            @endif>

                        @error($key)
                            <span class="text-danger" role="alert">
                                <div class="d-flex pt-1">
                                    <small>{{ $message }}</small>
                                </div>

                            </span>
                        @enderror
                    </div>
                </div>
            @endforeach

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-5">
                    <button type="submit" class="btn btn-primary">
                        {{ $btntexto }}
                    </button>
                </div>
            </div>
        </form>
</div>

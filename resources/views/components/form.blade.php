<div>
    @if($item == null)
        <form method="post" action="{{ route($route) }}">
    @else
        <form method="post" action="{{ route($route, $item) }}">
            @method('PATCH')
    @endif
            @csrf
            @foreach ($headers as $key => $value)
                <div class="form-group row">
                    <label for="{{ $key }}" class="col-md-4 col-form-label text-md-right">
                        {{ $value['displayName'] }}
                    </label>

                    <div class="col-md-6">
                        <input id="{{ $key }}" type="text" class="form-control @error($key) is-invalid @enderror"
                            name="{{ $key }}" value="{{ old($key) ?? ($item[$key] ?? null) }}"
                            @if (in_array('required', $value['rules']))
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
                        {{ $btntext }}
                    </button>
                </div>
            </div>
        </form>
</div>
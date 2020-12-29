<div class="container pt-2">
    <div class="row justify-content-center">
        <div class="col-md-{{ $type == "index" ? 12 : ($type == "form-like" ? 7 : 8) }}">
            <div class="card shadow-lg">
                <div class="card-header">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="font-weight-bold"> {{ __($title) }} </div>
                        <div>
                            {{ $header ?? '' }}
                        </div>
                    </div>
                </div>
                <div class="card-body my-2 pb-1 ml-5 mr-4 px-0">
                    {{ $body }}
                </div>
                <div class="card-footer text-muted">
                    <div class="row justify-content-center py-0">
                        {{ $footer ?? '' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

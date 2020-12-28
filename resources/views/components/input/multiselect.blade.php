@props(['model', 'key'])

<div class="col-md-6">
    <drop-down-multi :options="{{ json_encode($model::all()) }}" input="{{ $key }}"></drop-down-multi>
</div>

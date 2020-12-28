@props(['model', 'key'])

<div class="col-md-6">
    <drop-down-single :options="{{ json_encode($model::latest('id')->get()->toArray()) }}" input="{{ $key }}"></drop-down-single>
</div>

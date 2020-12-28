<div class="col-md-6">
    <select-supplier :options="{{ json_encode(App\Models\Supplier::latest('id')->get()->toArray()) }}"></select-supplier>
</div>

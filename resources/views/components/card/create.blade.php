<x-card type="form-like" :title="$title">
    <x-slot name="header">
        <x-button type="back" :resource="$resource" :show-text="true" />
    </x-slot>
    <x-slot name="body">
        <form method="post" action="{{ route($resource . '.store') }}">
            @csrf
            {{ $fields }}
        </form>
    </x-slot>
    <x-slot name="footer">
        <x-button type="store" :resource="$resource" :show-text="true" />
    </x-slot>
</x-card>

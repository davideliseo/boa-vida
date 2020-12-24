@props(['title', 'resource'])

<x-card.base type="form-like" :title="$title">
    <x-slot name="header">
        <x-button.back :resource="$resource" :show-text="true" />
    </x-slot>
    <x-slot name="body">
        <form id="{{ $resource . '_form' }}" method="post" action="{{ route($resource . '.store') }}">
            @csrf
            {{ $fields }}
        </form>
    </x-slot>
    <x-slot name="footer">
        <x-button.store :resource="$resource" :show-text="true" />
    </x-slot>
</x-card.base>

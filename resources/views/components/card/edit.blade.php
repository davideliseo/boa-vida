@props(['title', 'resource', 'item'])

<x-card.base type="form-like" :title="$title">
    <x-slot name="header">
        <x-button.back :resource="$resource" :show-text="true" />
    </x-slot>
    <x-slot name="body">
        <form id="{{ $resource . '_form' }}" method="post" action="{{ route($resource . '.update', $item) }}">
            @csrf
            @method('patch')
            {{ $fields }}
        </form>
    </x-slot>
    <x-slot name="footer">
        <x-button.update :resource="$resource" :show-text="true" />
    </x-slot>
</x-card.base>

@props(['inputType' => 'text', 'resource', 'key', 'item'])

<x-form.row.base
    type="edit"
    :input-type="$inputType"
    :label="config('resources.' . $resource . '.fields.' . $key . '.label')"
    :icon="config('resources.' . $resource . '.fields.' . $key . '.icon')"
    :key="$key"
    :item="null"
    :is-required="config('resources.' . $resource . '.fields.' . $key . '.is-required') ?? false" />

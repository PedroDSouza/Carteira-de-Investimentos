@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-stone-50']) }}>
    {{ $value ?? $slot }}
</label>

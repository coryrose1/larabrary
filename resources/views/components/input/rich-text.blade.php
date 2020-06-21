@props(['initialValue' => ''])

<div
    class="rounded-md shadow-sm"
    wire:ignore
    {{ $attributes }}
    x-data
    @trix-blur="$dispatch('change', $event.target.value)"
>
    <input id="x" value="{{ $initialValue }}" type="hidden">
    <trix-editor input="x" class="flex-1 block w-full transition duration-150 ease-in-out sm:leading-5
            bg-transparent border-3 border-blue-300 border-dashed rounded text-xl leading-loose p-2 text-charcoal focus:bg-yellow-100"></trix-editor>
</div>

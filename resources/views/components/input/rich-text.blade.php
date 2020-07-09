@props(['initialValue' => '', 'theme' => 'light'])

<div
    wire:ignore
    {{ $attributes }}
    x-data
    @trix-blur="$dispatch('change', $event.target.value)"
>
    <input id="x" value="{{ $initialValue }}" type="hidden">
    <trix-editor input="x" class="{{ $theme == 'light' ? 'border-charcoal focus:bg-yellow-100 text-charcoal' : 'border-yellow-100 text-white focus:border-white' }}
        flex-1 block w-full transition duration-150 ease-in-out sm:leading-5 bg-transparent border-3 rounded-funky text-lg leading-loose p-2"></trix-editor>
</div>

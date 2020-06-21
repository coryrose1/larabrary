@props([
'leadingAddOn' => false
])

<div class="flex rounded-md shadow-sm">
    @if ($leadingAddOn)
        <span class="inline-flex items-center px-3 rounded-l-md border-3 border-r-0 border-dashed border-gray-400 text-lg text-gray-500 sm:text-sm">
            {{ $leadingAddOn }}
        </span>
    @endif

    <input {{ $attributes }}
           class="{{ $leadingAddOn ? 'rounded-none rounded-r-md border-t-3 border-b-3 border-r-3' : 'border-3' }} flex-1 block w-full transition duration-150 ease-in-out sm:leading-5
            bg-transparent border-gray-400 border-dashed rounded text-lg leading-loose p-2 text-charcoal focus:bg-yellow-100"
    />
</div>

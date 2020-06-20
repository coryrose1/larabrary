@props([
'leadingAddOn' => false
])

<div class="flex rounded-md shadow-sm">
    @if ($leadingAddOn)
        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-dashed border-orange-300 font-cursive text-lg text-gray-500 sm:text-sm">
            {{ $leadingAddOn }}
        </span>
    @endif

    <input {{ $attributes }}
           class="{{ $leadingAddOn ? 'rounded-none rounded-r-md border-t border-b border-r' : 'border-3' }} flex-1 block w-full transition duration-150 ease-in-out sm:leading-5
            bg-white border-orange-300 border-dashed rounded text-xl font-cursive leading-loose p-2 text-charcoal focus:bg-yellow-100"
    />
</div>

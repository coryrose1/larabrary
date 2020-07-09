@props([
'leadingAddOn' => false,
'theme' => 'light'
])

<div class="flex rounded-md shadow-sm">
    @if ($leadingAddOn)
        <span class="{{ $theme == 'light' ? 'border-charcoal text-gray-500' : 'border-white text-white' }}
            inline-flex items-center px-3 border-3 border-r-0 rounded-funky-addon-l text-lg">
            {{ $leadingAddOn }}
        </span>
    @endif

    <input {{ $attributes }}
           class="{{ $leadingAddOn ? 'border-t-3 border-b-3 border-r-3 rounded-funky-addon-r' : 'border-3' }}
    {{ $theme == 'light' ? 'border-charcoal focus:bg-yellow-100 text-charcoal' : 'border-yellow-100 text-white focus:border-white' }}
        flex-1 block w-full transition duration-150 ease-in-out sm:leading-5 bg-transparent
        rounded-funky text-lg leading-loose p-2"
    />
</div>

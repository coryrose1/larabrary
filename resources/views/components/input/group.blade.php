@props([
'label',
'for',
'error' => false,
'helpText' => false,
'theme' => 'light'
])

<div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:pt-5">
    <label for="{{ $for }}" class="{{ $theme == 'light' ? 'text-gray-700' : 'text-white' }}
        block font-medium leading-5 sm:mt-px sm:pt-2">
        {{ $label }}
    </label>

    <div class="mt-1 sm:mt-0 sm:col-span-2">
        {{ $slot }}

        @if ($error)
            <div class="{{ $theme == 'light' ? 'text-charcoal' : 'text-red-200' }} mt-1 text-sm">{{ $error }}</div>
        @endif

        @if ($helpText)
            <p class="{{ $theme == 'light' ? 'text-gray-500' : 'text-white' }} mt-2 text-sm">{!! $helpText !!}</p>
        @endif
    </div>
</div>

@props([
'label',
'for',
'error' => false,
'helpText' => false,
])

<div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
    <label for="{{ $for }}" class="block font-medium leading-5 text-gray-700 sm:mt-px sm:pt-2">
        {{ $label }}
    </label>

    <div class="mt-1 sm:mt-0 sm:col-span-2">
        {{ $slot }}

        @if ($error)
            <div class="mt-1 text-red-500 text-sm">{{ $error }}</div>
        @endif

        @if ($helpText)
            <p class="mt-2 text-sm text-gray-500">{!! $helpText !!}</p>
        @endif
    </div>
</div>

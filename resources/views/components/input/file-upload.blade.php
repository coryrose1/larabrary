@props([
'theme' => 'light'
])
<div class="flex items-center">
    {{ $slot }}

    <div x-data="{ focused: false }">
        <span class="ml-5">
            <input @focus="focused = true" @blur="focused = false" class="sr-only" type="file" {{ $attributes }}>
            <label for="{{ $attributes['id'] }}" :class="{ 'outline-none shadow-outline-blue': focused }"
                   class="{{ $theme == 'light' ? 'border-charcoal text-charcoal hover:bg-yellow-200' : 'border-yellow-100 text-yellow-50 hover:border-yellow-50' }}
                       cursor-pointer py-2 px-3 border-3 border-dashed rounded-funky leading-4 font-medium active:bg-yellow-400 transition duration-150 ease-in-out">
                Change
            </label>
        </span>
    </div>
</div>

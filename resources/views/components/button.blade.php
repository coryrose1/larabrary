@props(['type' => 'button', 'text' => 'charcoal', 'color' => 'charcoal', 'activeColor' => 'yellow-200'])
<button type="{{ $type }}" {{ $attributes->merge([
'class' => 'text-lg inline-flex items-center justify-center px-4 py-2 border-3 border-dashed border-'.$color.' leading-6 font-medium rounded-funky text-'.$text.' bg-transparent hover:bg-'.$activeColor.' focus:outline-none focus:border-'.$activeColor.' focus:shadow-outline-indigo active:bg-'.$activeColor.' transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>

@props(['type' => 'button', 'text' => 'white', 'color' => 'purple-800', 'activeColor' => 'purple-600'])
<button type="{{ $type }}" {{ $attributes->merge([
'class' => 'inline-flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-'.$text.' bg-'.$color.' hover:bg-'.$activeColor.' focus:outline-none focus:border-'.$activeColor.' focus:shadow-outline-indigo active:bg-'.$activeColor.' transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</button>

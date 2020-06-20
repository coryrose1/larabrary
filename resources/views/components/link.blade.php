@props(['color' => 'yellow-800', 'activeColor' => 'yellow-600'])
<a {{ $attributes->merge([
'class' => 'text-base leading-6 font-medium text-'.$color.' hover:text-'.$activeColor.' focus:outline-none focus:text-'.$activeColor.' transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</a>

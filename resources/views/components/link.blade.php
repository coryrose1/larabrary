@props(['color' => 'purple-800', 'activeColor' => 'purple-600'])
<a {{ $attributes->merge([
'class' => 'text-base leading-6 font-medium text-'.$color.' hover:text-'.$activeColor.' focus:outline-none focus:text-'.$activeColor.' transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</a>

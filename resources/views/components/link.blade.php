@props(['color' => 'charcoal', 'activeColor' => 'yellow-800'])
<a {{ $attributes->merge([
'class' => 'text-lg leading-6 font-medium text-'.$color.' border-b-3 border-transparent border-dashed hover:border-'.$color.' focus:outline-none focus:border-'.$color.' transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</a>

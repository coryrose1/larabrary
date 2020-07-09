@props(['color' => 'charcoal', 'border' => 'red-400', 'activeColor' => 'yellow-800'])
<a {{ $attributes->merge([
'class' => 'text-lg leading-6 font-medium text-'.$color.' border-b-3 border-transparent border-dashed hover:border-'.$border.' focus:outline-none focus:border-'.$border.' transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</a>

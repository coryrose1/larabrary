@props(['text' => 'white', 'color' => 'blue-400', 'activeColor' => 'blue-500'])
<a {{ $attributes->merge([
'class' => 'text-lg inline-flex items-center justify-center px-4 py-2 bg-'.$color.' leading-6 font-medium rounded-funky text-'.$text.' hover:bg-'.$activeColor.' focus:outline-none focus:border-'.$activeColor.' focus:shadow-outline-indigo active:bg-'.$activeColor.' transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</a>

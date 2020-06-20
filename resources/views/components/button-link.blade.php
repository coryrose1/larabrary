@props(['text' => 'charcoal', 'color' => 'yellow-200', 'activeColor' => 'yellow-200'])
<a {{ $attributes->merge([
'class' => 'font-cursive text-lg inline-flex items-center justify-center px-4 py-2 border-3 border-dashed border-'.$text.' leading-6 font-medium rounded-md text-'.$text.' bg-transparent hover:bg-'.$activeColor.' focus:outline-none focus:border-'.$activeColor.' focus:shadow-outline-indigo active:bg-'.$activeColor.' transition ease-in-out duration-150'
]) }}>
    {{ $slot }}
</a>

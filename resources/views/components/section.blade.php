@props(['title', 'color' => 'charcoal', 'link' => false, 'href' => ''])
<section {{ $attributes->merge([
'class' => 'py-12 px-4 sm:px-6 lg:px-8 relative max-w-screen-xl mx-auto'
]) }}>
    @if ($link)
        <div class="w-full flex justify-between">
            <h3 class="text-4xl font-semibold text-{{ $color }} font-seuss leading-6">{{ $title }}</h3>
            <x-link color="{{ $color }}" href="{{ $href }}">{{ $link }}</x-link>
        </div>
        @else
        <h3 class="text-3xl font-semibold text-{{ $color }} leading-6">{{ $title }}</h3>
    @endif

    {{ $slot }}
</section>

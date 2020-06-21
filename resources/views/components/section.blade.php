@props(['title'])
<section class="py-12 px-4 sm:px-0 relative max-w-7xl mx-auto">
    <h3 class="text-3xl font-semibold text-charcoal leading-6">{{ $title }}</h3>
    {{ $slot }}
</section>

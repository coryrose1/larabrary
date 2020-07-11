<div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-4 lg:max-w-none">
    @foreach ($courses as $course)
    <div class="flex flex-col overflow-hidden">
        <div class="flex-shrink-0 rounded-lg bg-gray-50 relative">
            <div class="absolute h-full w-full p-4 rounded-lg bg-gray-900 bg-opacity-50">
                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">
                    {{ $course->name }}
                </h3>
                <p class="mt-3 text-base leading-6 text-gray-500">
                    {{ $course->summary }}
                </p>
                <p class="mt-3 text-sm leading-6 text-gray-500">
                    Starts at: $99
                </p>
            </div>
            <div class="p-4">
            <img class="h-48 w-full object-contain"
                 src="{{ $course->imageUrl }}" alt="{{ $course->name }}" />
            </div>
        </div>
    </div>
        @endforeach
</div>

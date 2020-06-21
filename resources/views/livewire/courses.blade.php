<div class="mt-12 grid gap-12 max-w-lg mx-auto lg:grid-cols-2 lg:max-w-none">
    @foreach ($courses as $course)
        <div class="bg-gray-50 shadow-lg flex items-center rounded-lg overflow-hidden">
            <div class="flex-shrink-0 p-4">
                <img class="w-48 h-full object-contain object-center"
                     src="{{ $course->imageUrl }}"
                     alt="{{ $course->name }}"/>
            </div>
            <div class="h-full flex-1 p-6 flex flex-col justify-between">
                <div class="flex-1">
                    <x-link href="{{ route('courses.show', $course->slug) }}" class="inline-flex">
                        <h3 class="text-2xl tracking-wide leading-7 font-semibold text-charcoal">
                            {{ Str::title($course->name) }}
                        </h3>
                    </x-link>
                    <p class="mt-3 text-base leading-6 text-gray-500">
                        {{ $course->summary }}
                    </p>
                </div>
                <div>
                    <ul class="mt-4 flex flex-wrap-reverse items-end text-sm leading-5 text-gray-500">
                        @foreach ($course->categories as $category)
                            <li class="pr-2 pt-4">
                                <a class="bg-gray-100 text-gray-500 px-2 py-1 rounded-md">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="mt-6 flex items-center">
                    <div class="flex-shrink-0">
                        <a href="#">
                            <img class="h-10 w-10 rounded-full object-cover"
                                 src="{{ $course->authors->first()->avatarUrl }}"
                                 alt="{{ $course->authors->first()->name }}"/>
                        </a>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm leading-5 font-medium text-gray-900">
                            <a href="#" class="hover:underline">
                                {{ $course->authors->first()->name }}
                            </a>
                        </p>
                        <ul class="mt-1 flex text-sm leading-5 text-gray-500 space-x-2">
                            <li>
                                <a>
                                    <x-icon-github class="h-4 w-4 text-gray-300 fill-current"/>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <x-icon-twitter class="h-4 w-4 text-gray-300 fill-current"/>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <x-heroicon-s-globe-alt class="h-4 w-4 text-gray-300 fill-current"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

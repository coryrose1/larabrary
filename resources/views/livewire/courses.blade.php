<div class="relative max-w-7xl mx-auto">
    <h3 class="text-3xl font-semibold leading-6">Courses</h3>
    <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">
        @foreach ($courses as $course)
        <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
            <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover object-top"
                     src="{{ $course->imageUrl }}"
                     alt="{{ $course->name }}"/>
            </div>
            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                <div class="flex-1">
                    <a href="#" class="block">
                        <h3 class="text-xl leading-7 font-semibold text-gray-900">
                            {{ Str::title($course->name) }}
                        </h3>
                        <p class="mt-3 text-base leading-6 text-gray-500">
                           {!! $course->description !!}
                        </p>
                    </a>
                    <ul class="mt-4 flex text-sm leading-5 text-gray-500 space-x-2">
                        @foreach ($course->categories as $category)
                            <li>
                                <a class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded-md">
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
                                    <x-icon-github class="h-4 w-4 text-gray-300 fill-current" />
                                </a>
                            </li>
                            <li>
                                <a>
                                    <x-icon-twitter class="h-4 w-4 text-gray-300 fill-current" />
                                </a>
                            </li>
                            <li>
                                <a>
                                    <x-heroicon-s-globe-alt class="h-4 w-4 text-gray-300 fill-current" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

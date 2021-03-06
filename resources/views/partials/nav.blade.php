<div x-data="{ open: false }" class="relative">
    <div class="container mx-auto">
        <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
            <div class="lg:w-0 lg:flex-1">
                <a href="/" class="flex">
                    <x-logo class="h-12 w-auto"/>
                </a>
            </div>
            <div class="-mr-2 -my-2 md:hidden">
                <x-button @click="open = true"
                          color="transparent"
                          activeColor="yellow-200"
                          text="yellow-800">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </x-button>
            </div>
            <nav class="hidden md:flex space-x-10">
                <x-link href="{{ route('courses') }}" class="flex items-center">
                    <x-icon-ebook class="h-6 w-6"/>
                    <span class="ml-1">Courses</span>
                </x-link>
                <x-link href="#" class="flex items-center">
                    <x-icon-teamwork class="h-6 w-6"/>
                    <span class="ml-1">Authors</span>
                </x-link>
                <x-link href="#" class="flex items-center">
                    <x-icon-search class="h-6 w-6"/>
                    <span class="ml-1">Categories</span>
                </x-link>
            </nav>
            <div class="hidden md:flex items-center justify-end space-x-8 md:flex-1 lg:w-0">
                <x-link href="#">Sign In</x-link>
                <span class="inline-flex rounded-md shadow-sm">
                        <x-button-link href="#">
                            Sign up
                        </x-button-link>
                    </span>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on mobile menu state. -->
    <div x-show="open" x-cloak
         x-transition:enter="transition duration-200 ease-out"
         x-transition:enter-start="opacity-0 transform scale-95"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-100"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-95"
         class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right z-50 md:hidden">
        <div class="rounded-lg shadow-lg">
            <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
                <div class="pt-5 pb-6 px-5 space-y-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <x-logo class="h-10 w-auto"/>
                        </div>
                        <div class="-mr-2">
                            <x-button @click="open = false"
                                      color="transparent"
                                      activeColor="yellow-200"
                                      text="yellow-800">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </x-button>
                        </div>
                    </div>
                    <div>
                        <nav class="grid gap-6">
                            <a href="#"
                               class="-m-3 p-3 flex items-center space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                <x-icon-ebook class="h-10 w-10"/>
                                <div class="text-base leading-6 font-medium text-gray-900">
                                    Courses
                                </div>
                            </a>
                            <a href="#"
                               class="-m-3 p-3 flex items-center space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                <x-icon-teamwork class="h-10 w-10"/>
                                <div class="text-base leading-6 font-medium text-gray-900">
                                    Authors
                                </div>
                            </a>
                            <a href="#"
                               class="-m-3 p-3 flex items-center space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                                <x-icon-search class="h-10 w-10"/>
                                <div class="text-base leading-6 font-medium text-gray-900">
                                    Categories
                                </div>
                            </a>
                        </nav>
                    </div>
                </div>
                <div class="py-6 px-5 space-y-6">
            <span class="w-full flex rounded-md shadow-sm">
                <x-button-link href="#" class="w-full">Sign Up</x-button-link>
            </span>
                    <p class="text-center text-base leading-6 font-medium text-gray-500">
                        Already registered?
                        <x-link href="#">Sign in</x-link>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

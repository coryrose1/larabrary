<div x-data="{ open: false }" class="relative">
    <div class="container mx-auto">
        <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
            <div>
                <a href="/" class="flex">
                    <span class="font-cursive text-4xl text-orange-400 leading-loose">Larabrary</span>
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
            <div class="hidden md:flex-1 md:flex md:items-center md:justify-between md:space-x-12">
                <nav class="flex space-x-10">
                    <x-link href="#" class="flex items-center">
                        <x-icon-ebook class="h-6 w-6"/>
                        <span class="ml-1">Courses</span>
                    </x-link>
                    <x-link href="#" class="flex items-center">
                        <x-icon-author class="h-6 w-6"/>
                        <span class="ml-1">Authors</span>
                    </x-link>
                </nav>
                <div class="flex items-center space-x-8">
                    <x-link href="#">Sign In</x-link>
                    <span class="inline-flex rounded-md shadow-sm">
                        <x-button-link href="#">
                            Sign up
                        </x-button-link>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!--
      Mobile menu, show/hide based on mobile menu state.

      Entering: "duration-200 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-100 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
    <div x-show="open" x-cloak
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
                                <x-icon-author class="h-10 w-10"/>
                                <div class="text-base leading-6 font-medium text-gray-900">
                                    Authors
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

<x-layout>
    <section class="py-10 mx-auto max-w-screen-xl px-4 sm:py-12 sm:px-6 md:py-16 lg:py-20">
        <div class="text-center">
            <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-charcoal sm:text-5xl sm:leading-none md:text-6xl">
                Browse the best courses in
                <br/>
                the <span class="text-stroke-lg">Laravel ecosystem
          </span>
            </h2>
            <p class="mt-3 max-w-md mx-auto text-base text-yellow-900 text-lg sm:text-xl md:mt-5 md:text-2xl md:max-w-3xl">
                Featuring a collection of the greatest online courses created by authors in the Laravel ecosystem<span
                    class="font-sans">.</span>
            </p>
            <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                <div>
                    <x-button-link href="#"
                                   class="px-8 py-3 md:py-4 md:text-lg md:px-10">Get started
                    </x-button-link>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                    <x-button-link href="#"
                                   class="px-8 py-3 md:py-4 md:text-lg md:px-10">Get started
                    </x-button-link>
                </div>
            </div>
        </div>
    </section>
    <x-section title="Courses">
        @livewire('courses')
    </x-section>
    <x-section title="Add a Course">
        @livewire('course-form')
    </x-section>
</x-layout>

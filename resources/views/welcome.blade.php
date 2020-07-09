<x-layout hero="true">
    <div class="w-full py-6">
        <x-section title="Courses" color="blue-200" link="View All" href="{{ route('courses') }}">
            @livewire('courses')
        </x-section>
    </div>
</x-layout>

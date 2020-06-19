@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-col min-h-screen py-12 sm:px-6 lg:px-8">
{{--                    @livewire('courses')--}}
{{--            @livewire('author-form')--}}
            @livewire('course-form')
        </div>
    </div>
@endsection

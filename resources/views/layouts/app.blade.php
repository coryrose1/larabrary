@extends('layouts.base')

@section('body')
    @include('partials.nav')
    @yield('content')
    <x-notification />
@endsection

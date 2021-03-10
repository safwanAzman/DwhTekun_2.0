@extends('layouts.base')

@section('body')
<div class="relative h-screen">
    <div class="inset-0 h-screen">
        <img class="object-cover w-full h-full opacity-50" 
        src="https://www.seekpng.com/png/full/92-921017_red-vector-png-background-vectors-png-high-resolution.png"
        alt="">
    </div>
    <div class="absolute inset-0">
        <div class="flex flex-col justify-center  h-screen  sm:px-6 lg:px-8">
            @yield('content')

            @isset($slot)
                {{ $slot }}
            @endisset
        </div>
    </div>
</div>

@endsection

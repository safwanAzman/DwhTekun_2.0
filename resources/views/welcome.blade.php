@extends('layouts.app')

@section('content')
<body class="bg-gray-900 antialiased font-sans">
    <header class="relative lg:overflow-hidden">
        <div class="inset-0 h-screen">
            <img class="object-cover w-full h-full " 
            src="https://www.seekpng.com/png/full/92-921017_red-vector-png-background-vectors-png-high-resolution.png"
            alt="">
        </div>
        <div class="absolute inset-0">
            <div data-aos="zoom-out-up" class="mx-auto mt-20 lg:px-16 px-4 py-4 flex justify-center items-center">
                <div class="md:pl-8">
                    <div class="flex justify-center">
                    <img class="h-64 w-auto" 
                        src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.tekun.gov.my%2Fwp-content%2Fuploads%2F2016%2F09%2Fcropped-Fav-logo-tekun.png&f=1&nofb=1"
                        alt="">
                    </div>
                    <h1 class="text-white md:text-6xl text-2xl font-bold font-sans m-0 leading-tight text-center md:max-w-4xl italic">
                        SELAMAT DATANG KE
                    </h1>
                    <h1 class="text-white md:text-6xl text-2xl font-bold font-sans m-0 leading-tight text-center md:max-w-4xl italic">
                        DWH TEKUN
                    </h1>
                    <div class="flex justify-center">
                        <a href="{{route('login')}}" class="mt-5 font-semibold flex items-center  px-8 py-3 border border-transparent text-base rounded-lg text-white bg-red-600 hover:bg-red-500 md:py-4 md:text-lg md:px-10">
                            LOG MASUK SEKARANG
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
@endsection
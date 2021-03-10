<!DOCTYPE html>
<html x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TEKUN DWH</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    
    <!-- Favicon -->

    <link rel="stylesheet" href="{{ asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/overflow.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/datatable.css')}}" />
    <link rel="stylesheet" href="{{ asset('dist/apexcharts.css')}}" />
    
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">

    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
    <script src="{{ asset('dist/apexcharts.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js')}}"></script>
    <script src="https://code.jscharting.com/latest/jscharting.js"></script>
    <script type="text/javascript" src="https://code.jscharting.com/latest/modules/types.js"></script> 
    <script type="text/javascript" src="https://code.jscharting.com/latest/modules/toolbar.js"></script>

    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/my/my-all.js"></script>

    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/ammap.css" type="text/css" media="all" />
    <script src="https://www.amcharts.com/lib/3/ammap.js"></script>
    <script src="https://www.amcharts.com/lib/3/maps/js/worldLow.js"></script>

    @livewireStyles
    
    

</head>
<body>
    <div class="flex h-screen bg-gray-800 " :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('include.sidebar.desktop')
        @include('include.sidebar.mobile')

        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            @include('include.sidebar.topbar')
            <main class="h-full scrollbar pb-10 mx-4 px-0 mb-6 rounded-xl bg-gray-100 border-4 border-red-500 sm:px-8" id="ex3">
                <div class="grid">
                    {{-- content --}}
                    @yield('content')
                </div>
            </main>

        </div>
    </div>
    @livewireScripts

    <script src="{{ url(mix('js/app.js')) }}"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.22/b-1.6.4/b-flash-1.6.4/b-html5-1.6.4/b-print-1.6.4/datatables.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    @stack('js')
</body>
</html>

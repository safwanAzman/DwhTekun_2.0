<div class="grid grid-cols-12 gap-6">
    <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
        <div class="col-span-12 mt-5">
            <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                <div class="p-3 font-bold text-lg">
                    <p>PRESTASI KESELURUHAN</p>
                </div>
                <div class="bg-white shadow-lg">
                    <div class="p-4">
                        <div id="mapdiv" style="width: 100%; height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 mt-5 " >
            <div class="bg-white shadow-lg overflow-x-auto w-full">
                <div class="p-8">

                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
<script>
    AmCharts.makeChart("mapdiv", {
        "type": "map",
        "dataProvider" : {
            "mapURL": "https://www.amcharts.com/lib/3/maps/svg/malaysiaHigh.svg",
            "getAreasFromMap": true,
            "areas":[
                { "id": "115", "color": "#CC0000" },
            ]
        },
        "areasSettings": {
            "autoZoom": true,
            "selectedColor": "#CC0000"
        }
    });
</script>
@endpush


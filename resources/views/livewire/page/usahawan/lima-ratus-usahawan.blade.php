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
                    <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                            <thead>
                                <tr>
                                    <th data-priority="1">NO</th>
                                    <th data-priority="2">GAMBAR</th>
                                    <th data-priority="3">NEGERI</th>
                                    <th data-priority="4">NAMA</th>
                                    <th data-priority="5">SYARIKAT</th>
                                    <th data-priority="6">SEKTOR</th>
                                    <th data-priority="7">DETAIL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.XjS0RZWUnV0qSEFN1DeMkQHaJN%26pid%3DApi&f=1"  class="w-32 h-32"/>
                                    </td>
                                    <td>PERAK</td>
                                    <td>A'ADIAH BINTI MOKHTAR</td>
                                    <td>DAELY ENTERPRISE</td>
                                    <td>GERAI MAKANAN</td>
                                    <td>
                                        <div x-data="{Open : false  }">
                                            <a  x-on:click="Open = true" href="#" class="flex items-center px-2 py-2 font-bold text-white bg-blue-600 rounded  hover:bg-blue-500">
                                                <x-heroicon-o-eye class="w-6 h-6 mr-2" />
                                                <p>Detail</p>
                                            </a>
                                            <x-general.modal modalActive="Open" title="Details" modalSize="lg">
                                                <div class="py-4 px-4">
                                                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.XjS0RZWUnV0qSEFN1DeMkQHaJN%26pid%3DApi&f=1"  class="w-auto h-32"/>
                                                </div>
                                            </x-general.modal>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>  
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
<script>
    $(document).ready(function () {
        let table = $('#example').DataTable({
            "oLanguage": {
                "sSearch": "Carian:",
                },
                "language": {
                    "paginate": {
                    "next": ">>",
                    "previous": "<<",
                    },
                    "info": "Memapar mukasurat 1 dari 12 (112 jumlah rekod)",
                    "zeroRecords": "Tiada rekod",
                },
            "lengthChange": false,
            responsive: true,
        }).columns.adjust().responsive.recalc();
    });
</script>
@endpush


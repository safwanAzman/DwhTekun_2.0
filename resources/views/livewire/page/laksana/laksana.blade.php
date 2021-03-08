<div class="grid grid-cols-12 gap-6">
    <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
        <div class="col-span-12 mt-5">
            <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                <div class="p-3 font-bold text-lg">
                    <p>LAKSANA</p>
                </div>
                <div class="bg-white shadow-lg">
                    <div class="p-4">
                            <x-form.basic-form wire:submit.prevent="addType">
                                <x-slot name="content">
                                    <div class="grid gap-2 lg:grid-cols-2 sm:grid-cols-2">
                                        <x-form.dropdown label="NEGERI" default="yes" value="a" wire:model="">
                                            <option value=""></option>
                                        </x-form.dropdown>
                                        <x-form.dropdown label="CAWANGAN" default="yes" value="a" wire:model="">
                                            <option value=""></option>
                                        </x-form.dropdown>
                                    </div>
                                    <div class="grid gap-2 lg:grid-cols-2 sm:grid-cols-2 mt-4">
                                        <x-form.dropdown label="SKIM" default="yes" value="a" wire:model="">
                                            <option value=""></option>
                                        </x-form.dropdown>
                                        <x-form.input label="TARIKH TRANSAKSI" value="" wire:model=""/>
                                    </div>
                                    <div class="flex justify-start mt-4">
                                        <button type="submit" class="flex px-4 py-2 text-sm font-bold text-white bg-green-600 rounded focus:outline-none hover:bg-green-500">
                                            JANA LAPORAN
                                        </button>
                                    </div>
                                </x-slot>
                            </x-form.basic-form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 mt-5">
            <div class="bg-white shadow-lg">
                <div class="bg-blue-500 p-2 text-white font-bold ">
                    <p>LAPORAN</p>
                </div>
                <div class="p-4">
                    <div class=" leading-8 font-semibold">
                        <p>LAKSANA :  -SEMUA NEGERI -</p>
                        <p>CAWANGAN : - SEMUA CAWANGAN -</p>
                        <p>SKIM : %</p>
                    </div>
                    <div>
                        <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                            <thead>
                                <tr>
                                    <th data-priority="1">MEA SURE</th>
                                    <th data-priority="2">SKIM</th>
                                    <th data-priority="3">DRIVER</th>
                                    <th data-priority="4">NEGERI</th>
                                    <th data-priority="5">STATUS</th>
                                    <th data-priority="6">NO OF BENEFICIARIES</th>
                                    <th data-priority="7">AMAUN</th>
                                    <th data-priority="8">BIL</th>
                                    <th data-priority="9">APPROEVD</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>TEKUN MICRO CREDIT</td>
                                    <td>CBRM</td>
                                    <td>ALL</td>
                                    <td>JOHOR</td>
                                    <td>APPLIED</td>
                                    <td>3632</td>
                                    <td>35281700.00</td>
                                    <td>128</td>
                                    <td>1019000.00</td>
                                </tr>
                                <tr>
                                    <td>TEKUN MICRO CREDIT</td>
                                    <td>CBRM</td>
                                    <td>ALL</td>
                                    <td>JOHOR</td>
                                    <td>APPLIED</td>
                                    <td>3632</td>
                                    <td>35281700.00</td>
                                    <td>128</td>
                                    <td>1019000.00</td>
                                </tr>
                                <tr>
                                    <td>TEKUN MICRO CREDIT</td>
                                    <td>CBRM</td>
                                    <td>ALL</td>
                                    <td>JOHOR</td>
                                    <td>APPLIED</td>
                                    <td>3632</td>
                                    <td>35281700.00</td>
                                    <td>128</td>
                                    <td>1019000.00</td>
                                </tr>
                                <tr>
                                    <td>TEKUN MICRO CREDIT</td>
                                    <td>CBRM</td>
                                    <td>ALL</td>
                                    <td>JOHOR</td>
                                    <td>APPLIED</td>
                                    <td>3632</td>
                                    <td>35281700.00</td>
                                    <td>128</td>
                                    <td>1019000.00</td>
                                </tr>
                                <tr>
                                    <td>TEKUN MICRO CREDIT</td>
                                    <td>CBRM</td>
                                    <td>ALL</td>
                                    <td>JOHOR</td>
                                    <td>APPLIED</td>
                                    <td>3632</td>
                                    <td>35281700.00</td>
                                    <td>128</td>
                                    <td>1019000.00</td>
                                </tr>
                                <tr>
                                    <td>TEKUN MICRO CREDIT</td>
                                    <td>CBRM</td>
                                    <td>ALL</td>
                                    <td>JOHOR</td>
                                    <td>APPLIED</td>
                                    <td>3632</td>
                                    <td>35281700.00</td>
                                    <td>128</td>
                                    <td>1019000.00</td>
                                </tr>
                                <tr>
                                    <td>TEKUN MICRO CREDIT</td>
                                    <td>CBRM</td>
                                    <td>ALL</td>
                                    <td>JOHOR</td>
                                    <td>APPLIED</td>
                                    <td>3632</td>
                                    <td>35281700.00</td>
                                    <td>128</td>
                                    <td>1019000.00</td>
                                </tr>
                                <tr>
                                    <td>TEKUN MICRO CREDIT</td>
                                    <td>CBRM</td>
                                    <td>ALL</td>
                                    <td>JOHOR</td>
                                    <td>APPLIED</td>
                                    <td>3632</td>
                                    <td>35281700.00</td>
                                    <td>128</td>
                                    <td>1019000.00</td>
                                </tr>
                                <tr>
                                    <td>TEKUN MICRO CREDIT</td>
                                    <td>CBRM</td>
                                    <td>ALL</td>
                                    <td>JOHOR</td>
                                    <td>APPLIED</td>
                                    <td>3632</td>
                                    <td>35281700.00</td>
                                    <td>128</td>
                                    <td>1019000.00</td>
                                </tr>
                                <tr>
                                    <td>TEKUN MICRO CREDIT</td>
                                    <td>CBRM</td>
                                    <td>ALL</td>
                                    <td>JOHOR</td>
                                    <td>APPLIED</td>
                                    <td>3632</td>
                                    <td>35281700.00</td>
                                    <td>128</td>
                                    <td>1019000.00</td>
                                </tr>
                                <tr>
                                    <td>TEKUN MICRO CREDIT</td>
                                    <td>CBRM</td>
                                    <td>ALL</td>
                                    <td>JOHOR</td>
                                    <td>APPLIED</td>
                                    <td>3632</td>
                                    <td>35281700.00</td>
                                    <td>128</td>
                                    <td>1019000.00</td>
                                </tr>
                            </tbody>
                            
                        </table>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
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
            dom: 'Blfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        }).columns.adjust().responsive.recalc();
    });
</script>
@endpush
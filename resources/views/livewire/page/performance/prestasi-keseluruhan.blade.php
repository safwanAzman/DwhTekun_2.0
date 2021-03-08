<div class="grid grid-cols-12 gap-6">
    <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
        <div class="col-span-12 mt-5">
            <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                <div class="p-3 font-bold text-lg">
                    <p>PRESTASI KESELURUHAN</p>
                </div>
                <div class="bg-white shadow-lg">
                    <div class="p-4">
                        <x-form.basic-form wire:submit.prevent="">
                            <x-slot name="content">
                                <div class="grid gap-2 lg:grid-cols-3 sm:grid-cols-2">
                                    <x-form.input label="TARIKH" value="" wire:model="" />
                                    <x-form.dropdown label="NEGERI" default="yes" value="a" wire:model="">
                                        <option value=""></option>
                                    </x-form.dropdown>
                                    <x-form.dropdown label="CAWANGAN" default="yes" value="a" wire:model="">
                                        <option value=""></option>
                                    </x-form.dropdown>
                                </div>
                                <div class="flex justify-start mt-4">
                                    <button type="submit"
                                        class="flex px-4 py-2 text-sm font-bold text-white bg-green-600 rounded focus:outline-none hover:bg-green-500">
                                        JANA LAPORAN
                                    </button>
                                    <button type="submit" onclick="printDiv('printableArea')"
                                        class="ml-2 flex px-4 py-2 text-sm font-bold text-white bg-indigo-600 rounded focus:outline-none hover:bg-indigo-500">
                                        CETAK
                                    </button>
                                </div>
                            </x-slot>
                        </x-form.basic-form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-span-12 mt-5 printHide" id="printableArea">
            <div class="bg-white shadow-lg overflow-x-auto w-full">
                <div class="p-8">
                    <div class="">
                        <div>
                            <div class="flex justify-between">
                                <div>
                                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.tekun.gov.my%2Fwp-content%2Fuploads%2F2016%2F09%2Fcropped-Fav-logo-tekun.png&f=1&nofb=1" 
                                    class="w-auto h-48" />
                                </div>
                                <div class="text-2xl font-bold flex items-center ml-0 sm:-ml-72">
                                    <p>LAPORAN PRESTASI TEKUN NEGERI</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="font-semibold">
                                        <p>KESELURUHAN</p>
                                        <br>
                                        <p>JANUARY 2021</p>
                                    </div>
                                </div>
                            </div>
                            <hr id="hr-print" style="border:#000000 thin solid;" class="my-2">
                                @include('pages.performance.prestasasi.module-A-B')
                                @include('pages.performance.prestasasi.module-C-D')
                                @include('pages.performance.prestasasi.module-E-F')
                                @include('pages.performance.prestasasi.module-G')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        $('.printhide').css('visibility', 'hidden');
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endpush
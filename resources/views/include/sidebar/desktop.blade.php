<!-- Desktop sidebar -->
<aside class="z-20 flex-shrink-0 hidden w-60 scrollbar bg-gray-800 md:block" id="ex3">
    <div class="animate">
        <div class="text-white">
            <div class="flex p-2  bg-gray-800">
                <div class="flex py-3 px-2">
                    <x-logo/> 
                    <p class="flex items-center ml-2 font-semibold italic">TEKUN DWH</p>
                </div>
            </div>
            <div>
                <ul class="mt-6 leading-10">

                    {{-- START DASHBOARD --}}
                    <x-sidebar.nav-item title="DASHBOARD" route="{{route('home')}}" uri="home">
                        <x-heroicon-o-chart-pie class="w-7 h-7" />
                    </x-sidebar.nav-item>
                    {{-- END DASHBOARD --}}

                    {{-- START LAKSANA --}}
                    <x-sidebar.nav-item title="LAKSANA" route="{{route('laksana')}}" uri="laksana">
                        <x-heroicon-o-archive class="w-7 h-7" />
                    </x-sidebar.nav-item>
                    {{-- END LAKSANA --}}
                    
                    {{-- START PERFORMANCE --}}
                    <x-sidebar.dropdown-nav-item active="open" title="PERFORMANCE" uri="performance/*">
                        <x-slot name="icon">
                            <x-heroicon-o-archive class="w-7 h-7" />
                        </x-slot>
                        <div class="leading-5">
                            <x-sidebar.dropdown-item title="PRESTASI KESELURUHAN" href="{{route('performance-prestasi-keseluruhan')}}" uri="performance/prestasi-keseluruhan">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="PRESTASI PRODUK" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="BAYARAN BALIK" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="PRESTASI PEMBIAYAAN (LPP)" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>
                        </div>
                    </x-sidebar.dropdown-nav-item>
                    {{-- END PERFORMANCE --}}

                    {{-- START WILMA --}}
                    <x-sidebar.dropdown-nav-item active="open" title="WILMA" uri="stock/*">
                        <x-slot name="icon">
                            <x-heroicon-o-archive class="w-7 h-7" />
                        </x-slot>
                        <div class="leading-5">
                            <x-sidebar.dropdown-item title="LAPORAN WILMA" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="WILMA DETAILS" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="GRAPH TREND NPF" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>
                        </div>
                    </x-sidebar.dropdown-nav-item>
                    {{-- END WILMA --}}

                    {{-- START USAHAWAN BERJAYA --}}
                    <x-sidebar.dropdown-nav-item active="open" title="USAHAWAN BERJAYA" uri="usashawan/*">
                        <x-slot name="icon">
                            <x-heroicon-o-archive class="w-7 h-7" />
                        </x-slot>
                        <div class="leading-5">
                            <x-sidebar.dropdown-item title="KESELURUHAN USAHAWAN" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="500 USAHAWAN" href="{{route('usahawan500')}}" uri="usashawan/usahawan_berjaya_500">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="70 USAHAWAN" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="50 USAHAWAN" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>
                        </div>
                    </x-sidebar.dropdown-nav-item>
                    {{-- END  USAHAWAN BERJAYA --}}

                    {{-- START PEMBIAYAAN --}}
                    <x-sidebar.dropdown-nav-item active="open" title="PEMBIAYAAN" uri="stock/*">
                        <x-slot name="icon">
                            <x-heroicon-o-archive class="w-7 h-7" />
                        </x-slot>
                        <div class="leading-5">
                            <x-sidebar.dropdown-item title="KAUM" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="OKU" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="BLESS" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="JULAT" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>

                            <x-sidebar.dropdown-item title="KONTRAK-I" href="#" uri="#">
                                <x-slot name="icon">
                                    <x-heroicon-o-cube class="w-5 h-5" />
                                </x-slot>
                            </x-sidebar.dropdown-item>
                        </div>
                    </x-sidebar.dropdown-nav-item>
                    {{-- END PEMBIAYAAN --}}

                    {{-- START MAB --}}
                    <x-sidebar.nav-item title="MAB" route="#" uri="#">
                        <x-heroicon-o-chart-pie class="w-7 h-7" />
                    </x-sidebar.nav-item>
                    {{-- END MAB --}}

                    {{-- START HRMS --}}
                    <x-sidebar.nav-item title="HRMS" route="#" uri="#">
                        <x-heroicon-o-chart-pie class="w-7 h-7" />
                    </x-sidebar.nav-item>
                    {{-- END HRMS --}}

                    {{-- START BNM --}}
                    <x-sidebar.nav-item title="BNM" route="#" uri="#">
                        <x-heroicon-o-chart-pie class="w-7 h-7" />
                    </x-sidebar.nav-item>
                    {{-- END BNM --}}

                    {{-- START IKTN --}}
                    <x-sidebar.nav-item title="IKTN" route="#" uri="#">
                        <x-heroicon-o-chart-pie class="w-7 h-7" />
                    </x-sidebar.nav-item>
                    {{-- END IKTN --}}

                    {{-- START BI --}}
                    <x-sidebar.nav-item title="BI" route="https://dwh.tekun.gov.my/main/bi/report" uri="#">
                        <x-heroicon-o-chart-pie class="w-7 h-7" />
                    </x-sidebar.nav-item>
                    {{-- END BI --}}


                </ul>
            </div>
        </div>
    </div>
</aside>
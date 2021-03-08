<div class="grid grid-cols-12 gap-6">
    <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
        <div class="col-span-12 mt-5">
            <div class="grid gap-2 grid-cols-2 lg:grid-cols-2">

                <div class="grid gap-2 grid-cols-2 lg:grid-cols-2">
                    <!-- Start CUMULATIVE 1998 - 2021 -->
                    <div class="bg-white shadow-lg">
                        <div class="bg-blue-500 p-2 text-white font-bold">
                            <p>CUMULATIVE 1998 - 2021</p>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between shadow-lg p-4">
                                <div class="font-semibold" 
                                x-data="{ 
                                        text: '',
                                        textArray : ['RM 4,662,123,458'],
                                        textIndex: 0,
                                        charIndex: 0,
                                        typeSpeed: 200,
                                        }"
                                        x-init="setInterval(function(){
                                        let current = $data.textArray[ $data.textIndex ];
                                        $data.text = current.substring(0, $data.charIndex);
                                        $data.charIndex += 1;
                                        }, $data.typeSpeed);">
                                    <p class="text-gray-400">COLLECTION</p>
                                    <p class="text-xl font-bold " x-text="text"></p>
                                </div>
                                <div>
                                    <a href="#"
                                        class="rounded-full h-10 w-10 flex items-center justify-center bg-indigo-500 text-white hover:bg-indigo-600">
                                        <x-heroicon-o-eye class="w-6 h-6" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between mt-2 shadow-lg p-4">
                                <div class="font-semibold"
                                x-data="{ 
                                        text: '',
                                        textArray : ['RM 20,186,000'],
                                        textIndex: 0,
                                        charIndex: 0,
                                        typeSpeed: 200,
                                        }"
                                        x-init="setInterval(function(){
                                        let current = $data.textArray[ $data.textIndex ];
                                        $data.text = current.substring(0, $data.charIndex);
                                        $data.charIndex += 1;
                                        }, $data.typeSpeed);">
                                    <p class="text-gray-400">DISBURSEMENT</p>
                                    <p class="text-xl font-bold " x-text="text"></p>
                                </div>
                                <div>
                                    <a href="#"
                                        class="rounded-full h-10 w-10 flex items-center justify-center bg-indigo-500 text-white hover:bg-indigo-600">
                                        <x-heroicon-o-eye class="w-6 h-6" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End CUMULATIVE 1998 - 2021 -->

                    <!-- Start February 2021 -->
                    <div class="bg-white shadow-lg">
                        <div class="bg-blue-500 p-2 text-white font-bold">
                            <p>February 2021</p>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between shadow-lg p-4">
                                <div class="font-semibold"
                                x-data="{ 
                                        text: '',
                                        textArray : ['RM 26,662,975'],
                                        textIndex: 0,
                                        charIndex: 0,
                                        typeSpeed: 200,
                                        }"
                                        x-init="setInterval(function(){
                                        let current = $data.textArray[ $data.textIndex ];
                                        $data.text = current.substring(0, $data.charIndex);
                                        $data.charIndex += 1;
                                        }, $data.typeSpeed);">
                                    <p class="text-gray-400">COLLECTION</p>
                                    <p class="text-xl font-bold" x-text="text"></p>
                                </div>
                                <div>
                                    <a href="#"
                                        class="rounded-full h-10 w-10 flex items-center justify-center bg-indigo-500 text-white hover:bg-indigo-600">
                                        <x-heroicon-o-eye class="w-6 h-6" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between mt-2 shadow-lg p-4">
                                <div class="font-semibold"
                                x-data="{ 
                                        text: '',
                                        textArray : ['RM 19,806,000'],
                                        textIndex: 0,
                                        charIndex: 0,
                                        typeSpeed: 200,
                                        }"
                                        x-init="setInterval(function(){
                                        let current = $data.textArray[ $data.textIndex ];
                                        $data.text = current.substring(0, $data.charIndex);
                                        $data.charIndex += 1;
                                        }, $data.typeSpeed);">
                                    <p class="text-gray-400">DISBURSEMENT</p>
                                    <p class="text-xl font-bold" x-text="text"></p>
                                </div>
                                <div>
                                    <a href="#"
                                        class="rounded-full h-10 w-10 flex items-center justify-center bg-indigo-500 text-white hover:bg-indigo-600">
                                        <x-heroicon-o-eye class="w-6 h-6" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End February 2021 -->

                    <!-- Start Year 2021 -->
                    <div class="bg-white shadow-lg">
                        <div class="bg-blue-500 p-2 text-white font-bold">
                            <p>YEAR 2021</p>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between shadow-lg p-4">
                                <div class="font-semibold"
                                x-data="{ 
                                        text: '',
                                        textArray : ['RM 47,516,894'],
                                        textIndex: 0,
                                        charIndex: 0,
                                        typeSpeed: 200,
                                        }"
                                        x-init="setInterval(function(){
                                        let current = $data.textArray[ $data.textIndex ];
                                        $data.text = current.substring(0, $data.charIndex);
                                        $data.charIndex += 1;
                                        }, $data.typeSpeed);">
                                    <p class="text-gray-400">COLLECTION</p>
                                    <p class="text-xl font-bold " x-text="text"></p>
                                </div>
                                <div>
                                    <a href="#"
                                        class="rounded-full h-10 w-10 flex items-center justify-center bg-indigo-500 text-white hover:bg-indigo-600">
                                        <x-heroicon-o-eye class="w-6 h-6" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between mt-2 shadow-lg p-4">
                                <div class="font-semibold"
                                x-data="{ 
                                        text: '',
                                        textArray : ['RM 20,186,000'],
                                        textIndex: 0,
                                        charIndex: 0,
                                        typeSpeed: 200,
                                        }"
                                        x-init="setInterval(function(){
                                        let current = $data.textArray[ $data.textIndex ];
                                        $data.text = current.substring(0, $data.charIndex);
                                        $data.charIndex += 1;
                                        }, $data.typeSpeed);">
                                    <p class="text-gray-400">DISBURSEMENT</p>
                                    <p class="text-xl font-bold" x-text="text"></p>
                                </div>
                                <div>
                                    <a href="#"
                                        class="rounded-full h-10 w-10 flex items-center justify-center bg-indigo-500 text-white hover:bg-indigo-600">
                                        <x-heroicon-o-eye class="w-6 h-6" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Year 2021 -->

                    <!-- Start February 2021 -->
                    <div class="bg-white shadow-lg">
                        <div class="bg-blue-500 p-2 text-white font-bold">
                            <p>February 2021</p>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between shadow-lg p-4">
                                <div class="font-semibold"
                                x-data="{ 
                                        text: '',
                                        textArray : ['RM 26,662,975'],
                                        textIndex: 0,
                                        charIndex: 0,
                                        typeSpeed: 200,
                                        }"
                                        x-init="setInterval(function(){
                                        let current = $data.textArray[ $data.textIndex ];
                                        $data.text = current.substring(0, $data.charIndex);
                                        $data.charIndex += 1;
                                        }, $data.typeSpeed);">
                                    <p class="text-gray-400">COLLECTION</p>
                                    <p class="text-xl font-bold" x-text="text"></p>
                                </div>
                                <div>
                                    <a href="#"
                                        class="rounded-full h-10 w-10 flex items-center justify-center bg-indigo-500 text-white hover:bg-indigo-600">
                                        <x-heroicon-o-eye class="w-6 h-6" />
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-between mt-2 shadow-lg p-4">
                                <div class="font-semibold"
                                x-data="{ 
                                        text: '',
                                        textArray : ['RM 19,806,000'],
                                        textIndex: 0,
                                        charIndex: 0,
                                        typeSpeed: 200,
                                        }"
                                        x-init="setInterval(function(){
                                        let current = $data.textArray[ $data.textIndex ];
                                        $data.text = current.substring(0, $data.charIndex);
                                        $data.charIndex += 1;
                                        }, $data.typeSpeed);">
                                    <p class="text-gray-400">DISBURSEMENT</p>
                                    <p class="text-xl font-bold" x-text="text"></p>
                                </div>
                                <div>
                                    <a href="#"
                                        class="rounded-full h-10 w-10 flex items-center justify-center bg-indigo-500 text-white hover:bg-indigo-600">
                                        <x-heroicon-o-eye class="w-6 h-6" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End February 2021 -->
                </div>

                <div class="mt-6 grid gap-2 grid-cols-1 lg:grid-cols-1">
                    <!-- Start Meter Chart -->
                    <div class="bg-white shadow-lg p-2">
                        <div id="chartDiv" style="max-width: 350px;height: 180px;margin: 0px auto"></div>
                        <div class="flex justify-center leading-6">
                            <div class="text-center">
                                <p class="text-sm text-blue-400 font-semibold">Multiplier Rate : 10%</p>
                                <p class="text-sm">DISBURSEMENT: 20,186,000</p>
                                <p class="text-sm">ALLOCATION: 625,000,000</p>
                                <p class="text-sm">YEAR 2021</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start Meter Chart -->

                    <div class="bg-white shadow-lg p-2">
                        <div id="chartDiv2" style="max-width: 350px;height: 180px;margin: 0px auto"></div>
                        <div class="flex justify-center leading-6">
                            <div class="text-center">
                                <p class="text-sm text-blue-400 font-semibold">Collection Rate: 77%</p>
                                <p class="text-sm">COLLECTED: 47,516,894</p>
                                <p class="text-sm">TARGET: 62,004,649</p>
                                <p class="text-sm">YEAR 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-span-12 mt-5">
            <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                <div class="bg-white shadow-lg">
                    <div class="bg-blue-500 p-2 text-white font-bold">
                        <p>FUND UTILIZATION 2021</p>
                    </div>
                    <div class="-my-2 overflow-x-auto p-4">
                        <div class="">
                            <table width="100%" border="1" cellspacing="0" cellpadding="0"
                                class="min-w-full divide-y divide-gray-200">
                                <tbody>
                                    <tr>
                                        <th class="bg-gray-500 border border-white text-left p-2 text-white">DANA</th>
                                        <th class="bg-gray-500 border border-white text-left p-2 text-white">PRODUK</th>
                                        <th class="bg-gray-500 border border-white text-left p-2 text-white">DANA DITERIMA<br>(1999 - 2020)</th>
                                        <th class="bg-gray-500 border border-white text-left p-2 text-white">ALLOCATION <br>2021</th>
                                        <th class="bg-gray-500 border border-white text-left p-2 text-white">DISBURSEMENT<br>2021</th>
                                        <th class="bg-gray-500 border border-white text-left p-2 text-white">BALANCE</th>
                                        
                                    </tr>
                                    <tr>
                                        <th rowspan="4" class="bg-gray-500 border border-white text-left p-2 text-white">DANA TEKUN</th>
                                        <td class="bg-gray-300 border border-white p-1"><span style="color:#535353">TEKUN NIAGA</span></td>
                                        <td rowspan="4" class="bg-gray-300 border border-white p-1">RM 2,843,599,962</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 100,000,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 9,269,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM90,731,000 </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-gray-300 border border-white p-1 text-white"><span style="color:#535353">TEMAN TEKUN</span></td>
                                        <td class="bg-gray-300 border border-white p-1">RM 90,000,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 1,640,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 88,360,000 </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-gray-300 border border-white p-1 text-white"><span style="color:#535353">KONTRAK-i</span></td>
                                        <td class="bg-gray-300 border border-white p-1">RM 100,000,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 6,432,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 93,568,000 </td>
                                    </tr>
                                    <tr>
                                        <td class="bg-gray-300 border border-white p-1 text-white"><span style="color:#535353">PROGRAM KHAS</span></td>
                                        <td class="bg-gray-300 border border-white p-1">RM 30,000,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 846,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 29,154,000 </td>
                                    </tr>

                                    <tr>
                                        <th class="bg-gray-500 border border-white text-left p-2 text-white">DANA KHAS <br>EPU SPUMI</th>
                                        <td class="bg-gray-300 border border-white p-1"><span style="color:#535353">TEKUN SPUMI</span></td>
                                        <td class="bg-gray-300 border border-white p-1">RM 314,000,000</td> <!-- DANA DITERIMA-->
                                        <td class="bg-gray-300 border border-white p-1">RM 5,000,000</td> <!-- DANA ALLOC-->
                                        <td class="bg-gray-300 border border-white p-1">RM 1,648,000</td> <!-- DANA DISBURSE-->
                                        <td class="bg-gray-300 border border-white p-1">RM 3,352,000 </td>
                                    </tr>
                                    <!-- ADD CBR PRODUCT -->
                                    <tr>
                                        <th class="bg-gray-500 border border-white text-left p-2 text-white">COVID BUSINESS <br>RECOVERY MICRO <br>(CBRM)</th>
                                        <td class="bg-gray-300 border border-white p-1"><span style="color:#535353">CBRM</span></td>
                                        <td class="bg-gray-300 border border-white p-1">RM 200,000,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 200,000,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 0</td>
                                        <td class="bg-gray-300 border border-white p-1">RM200,000,000 </td>
                                    </tr>
                                    <!-- ADD CBR PRODUCT END-->
                                    <!-- ADD TBRS PRODUCT -->
                                    <tr>
                                        <th class="bg-gray-500 border border-white text-left p-2 text-white">TEKUN BUSINESS<br>RECOVERY SCHEME<br>(TBRS)</th>
                                        <td class="bg-gray-300 border border-white p-1"><span style="color:#535353">TBRS</span></td>
                                        <td class="bg-gray-300 border border-whitep-2 p-2">RM 100,000,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 100,000,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM 60,000</td>
                                        <td class="bg-gray-300 border border-white p-1">RM99,940,000 </td>
                                    </tr>
                                    <!-- ADD TBRS PRODUCT END-->
                                    <tr>
                                        <th colspan="2" class="bg-gray-600 border border-white dash_tot_header" style="color:white;">JUMLAH</th>
                                        <td class="bg-gray-500 border border-white p-1 text-white">RM 3,457,599,962</td>
                                        <td class="bg-gray-500 border border-white p-1 text-white">RM 625,000,000</td>
                                        <td class="bg-gray-500 border border-white p-1 text-white">RM 19,895,000</td>
                                        <td class="bg-gray-500 border border-white p-1 text-white">RM 605,105,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
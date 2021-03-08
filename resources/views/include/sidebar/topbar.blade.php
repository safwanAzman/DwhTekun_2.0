<header class="z-40 py-4  bg-gray-800 ">
    <div class="flex items-center justify-between h-8 px-6 mx-auto">
            <!-- Mobile hamburger -->
            <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
                @click="toggleSideMenu" aria-label="Menu">
                <x-heroicon-o-menu class="w-6 h-6 text-white" />
            </button>

            <!-- Search Input -->
            <div class="flex justify-center  mt-2 lg:mr-32">
                <x-form.search-input />
            </div>

            <ul class="flex items-center flex-shrink-0 space-x-6">

                <!-- Notifications menu -->
                <li class="relative">
                    <button class="p-2 bg-white text-red-500 align-middle rounded-full hover:text-white hover:bg-red-500 focus:outline-none">
                        <div class="flex">
                            <x-heroicon-o-annotation class="w-6 h-6" />
                        </div>
                    </button>
                </li>

                <!-- Profile menu -->
                <li class="relative">
                    <button
                        class="p-2 bg-white text-red-500 align-middle rounded-full hover:text-white hover:bg-red-500 focus:outline-none "
                        @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
                        aria-haspopup="true">
                        <div class="flex">
                            <x-heroicon-o-cog class="w-6 h-6" />
                        </div>
                    </button>
                    <template x-if="isProfileMenuOpen">
                        <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0" @click.away="closeProfileMenu"
                            @keydown.escape="closeProfileMenu"
                            class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-red-500 border border-red-400 rounded-md shadow-md"
                            aria-label="submenu">
                            <li class="flex">
                                <a class=" text-white inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                    href="#">
                                    <x-heroicon-o-user class="w-5 h-5 mr-2" />
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="flex">
                                <a class=" text-white inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                    href="#">
                                    <x-heroicon-o-cog class="w-5 h-5 mr-2" />
                                    <span>Edit Access</span>
                                </a>
                            </li>
                            <li class="flex">
                                <a class="text-white inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <x-heroicon-o-login class="w-5 h-5 mr-2" />
                                    <span>Log out</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </template>
                </li>
            </ul>
        
    </div>
</header>
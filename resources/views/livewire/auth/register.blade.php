@section('title', 'Create a new account')

<div>
    <div class="w-full flex flex-wrap">
        <!-- Login Section -->
        <div class=" w-full md:w-2/5 ">
            <div class=" mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="px-4 py-8 bg-gray-900 shadow sm:rounded-lg sm:px-10">
                    <div class="sm:mx-auto sm:w-full sm:max-w-md mb-8">
                        <div class="flex justify-center">
                            <a href="{{ route('home') }}">
                                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.tekun.gov.my%2Fwp-content%2Fuploads%2F2016%2F09%2Fcropped-Fav-logo-tekun.png&f=1&nofb=1"
                                    class="w-auto h-32" />
                            </a>
                        </div>
                        <h2 class="mt-6 text-3xl font-extrabold text-center text-white leading-9 italic">
                            DWH TEKUN
                        </h2>
                    </div>
                    <form wire:submit.prevent="register">
                        <div>
                            <label for="name" class="block text-sm font-medium text-white leading-5">
                                Name
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="name" id="name" type="text" required autofocus
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-red focus:border-red-400 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                            </div>

                            @error('name')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label for="email" class="block text-sm font-medium text-white leading-5">
                                Email address
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="email" id="email" type="email" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-red focus:border-red-400 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                            </div>

                            @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label for="password" class="block text-sm font-medium text-white leading-5">
                                Password
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="password" id="password" type="password" required
                                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-red focus:border-red-400 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                            </div>

                            @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <label for="password_confirmation"
                                class="block text-sm font-medium text-white leading-5">
                                Confirm Password
                            </label>

                            <div class="mt-1 rounded-md shadow-sm">
                                <input wire:model.lazy="passwordConfirmation" id="password_confirmation" type="password"
                                    required
                                    class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 appearance-none rounded-md focus:outline-none focus:shadow-outline-red focus:border-red-400 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                        </div>

                        <div class="mt-6">
                            <span class="block w-full rounded-md shadow-sm">
                                <button type="submit"
                                    class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md hover:bg-red-500 ">
                                    DAFTAR
                                </button>
                            </span>
                        </div>
                        <div class="mt-4">
                            <span class="block w-full rounded-md shadow-sm">
                                <a href="{{ route('login') }}"
                                    class="flex justify-center w-full px-4 py-2 text-sm font-medium text-red-600 bg-white border border-transparent rounded-md hover:bg-gray-200">
                                    LOG MASUK
                                </a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Image Section -->
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-3/5">
            <img class="object-cover w-auto h-full hidden sm:block"
                src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftherohani.com%2Fwp-content%2Fuploads%2F2020%2F04%2Fpermohonan-pinjaman-tekun-covid.png&f=1&nofb=1">
        </div>
    </div>
</div>
@section('title', 'Reset password')
<div>
    <div class="w-full flex flex-wrap">
        <!-- Login Section -->
        <div class=" w-full md:w-2/5 ">
            <div class=" mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div  class="px-4 py-8 bg-gray-900 shadow sm:rounded-lg sm:px-10">
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
                    @if ($emailSentMessage)
                        <div class="rounded-md bg-green-50 p-4">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                </div>

                                <div class="ml-3">
                                    <p class="text-sm leading-5 font-medium text-green-800">
                                        {{ $emailSentMessage }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @else
                        <form wire:submit.prevent="sendResetPasswordLink">
                            <div>
                                <label for="email" class="block text-sm font-medium text-white leading-5">
                                    Email address
                                </label>

                                <div class="mt-1 rounded-md shadow-sm">
                                    <input wire:model.lazy="email" id="email" name="email" type="email" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-red focus:border-red-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                                </div>

                                @error('email')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mt-6">
                                <span class="block w-full rounded-md shadow-sm">
                                    <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md hover:bg-red-500 focus:outline-none">
                                        Send password reset link
                                    </button>
                                </span>
                            </div>
                        </form>
                    @endif
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

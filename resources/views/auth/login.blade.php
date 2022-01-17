
@extends('layouts.auth')
@section('content')

<div class="w-full flex flex-wrap">
    <!-- Login Section -->
    <div class=" w-full md:w-2/5 ">
        <div class=" mt-8 sm:mx-auto sm:w-full sm:max-w-md">
            <div  class="px-4 py-8 bg-gray-900 shadow sm:rounded-lg sm:px-10">
                <div class="sm:mx-auto sm:w-full sm:max-w-md mb-8">
                    <div class="flex justify-center">
                        <a href="#">
                            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.tekun.gov.my%2Fwp-content%2Fuploads%2F2016%2F09%2Fcropped-Fav-logo-tekun.png&f=1&nofb=1"
                                class="w-auto h-32" />
                        </a>
                    </div>
                    <h2 class="mt-6 text-3xl font-extrabold text-center text-white leading-9 italic">
                        DWH TEKUN
                    </h2>
                </div>
                <form action="{{ route('loggingin') }}" method="POST">
                    @if(session()->has('loginerror'))
                        <x-general.alert.base class="bg-red-200 border-2 border-red-300 rounded-md p-2 text-sm my-2">
                            <x-slot name="message">{{ session()->get('loginerror') }}</x-slot>
                        </x-general.alert.base>
                    @endif
                    @csrf
                    <div>
                        <label for="idpengguna" class="block text-sm font-medium text-white leading-5 mb-2">
                            User
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="idpengguna" name="idpengguna" required autofocus
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="password" class="block text-sm font-medium text-white leading-5 mb-2">
                            Password
                        </label>

                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="katalaluan" name="katalaluan"  type="password" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:shadow-outline-red @enderror" />
                        </div>
                    </div>


                    <div class="mt-6">
                        <span class="block w-full rounded-md shadow-sm">
                            <button type="submit"
                                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md hover:bg-red-500">
                                LOG MASUK
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Image Section -->
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-3/5">
        <img class="object-cover w-auto h-full hidden sm:block"
            src="https://images.unsplash.com/photo-1554415707-6e8cfc93fe23?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHJlcG9ydHxlbnwwfHwwfHw%3D&w=1000&q=80">
    </div>
</div>


<script>
    var toggleInputContainer = function(input) {
        if (input.value != "") {
            input.classList.add('filled');
        } else {
            input.classList.remove('filled');
        }
    }
    var labels = document.querySelectorAll('.label');
    for (var i = 0; i < labels.length; i++) {
        labels[i].addEventListener('click', function() {
            this.previousElementSibling.focus();
        });
    }
    window.addEventListener("load", function() {
        var inputs = document.getElementsByClassName("input");
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].addEventListener('keyup', function() {
                toggleInputContainer(this);
            });
            toggleInputContainer(inputs[i]);
        }
    });
</script>

<!-- end new laywout -->
@endsection

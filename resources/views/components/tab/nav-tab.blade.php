
<nav class="flex flex-col sm:flex-row">
    <div class="text-gray-600 py-2 px-6 block focus:outline-none cursor-pointer" x-on:click.prevent="active = {{ $name }}" x-bind:class="{'text-yellow-400 border-b-4 border-yellow-400 ': active === {{ $name }} }"
    {{ $livewire }}
    >
        <div class="">
            {{ $slot }}
        </div>
    </div>
</nav>



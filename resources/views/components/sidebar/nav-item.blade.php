
<li class="relative px-2 py-1 ">
    <a class="inline-flex items-center w-full text-sm font-semibold text-white transition-colors duration-150 cursor-pointer
        @if(Route::current()->uri == $uri)
        bg-red-500 p-1 rounded-lg hover:text-white
        @else
        hover:text-red-500
        @endif" href="{{$route}}">
        {{$slot}}
        <span class="ml-4">{{$title}}</span>
    </a>
</li>
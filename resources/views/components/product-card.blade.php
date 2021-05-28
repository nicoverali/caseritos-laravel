@props(['img', 'title', 'stars', 'reviewCount', 'price'])

<div class="h-32 p-4 shadow-sm border border-gray-150 rounded-md group flex sm:flex-col sm:h-auto">

    {{--  IMAGE WITH HIDE BACKGROUND  --}}
    <div class="flex-shrink-0 w-24 h-full relative sm:w-full sm:h-64">
        <div class="absolute top-0 left-0 w-full h-full bg-red-400"></div>
        <img class="relative w-full h-full object-cover shadow-sm sm:group-hover:p-1 transition-all"
             src="{{$img}}" alt="{{$title}}">
    </div>

    {{--  DESCRIPTION AND PRICE  --}}
    <div class="flex flex-grow ml-4 mt-1 sm:ml-0 sm:mt-3">
        <div class="pr-2 flex-grow flex flex-col w-full overflow-hidden">
            <p class="text-sm">The Bakery</p>
            <a class="flex-grow ">
                <h3 class="text-base font-semibold leading-5 line-clamp-2" href="#">{{$title}}</h3>
            </a>
            @isset($stars)
                <div>
                    @for ($_ = 0; $_ < $stars; $_++)
                        <x-svg-s-star class="w-4 h-4 text-red-500 inline"/>
                    @endfor
                    @for ($_ = 0; $_ < 5-$stars; $_++)
                        <x-svg-o-star class="w-4 h-4 text-red-500 inline"/>
                    @endfor

                    <p class="text-sm inline align-bottom">({{$reviewCount}})</p>
                </div>
            @endisset
        </div>
        <p class="font-semibold self-end"><span class="text-red-400 font-bold mr-1">$</span>{{$price}}</p>
    </div>
</div>

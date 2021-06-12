@props(['links' => []])

<div x-data="{open: false}">
    <x-svg.hamburguer @click="open = true" class="sm:hidden"/>

    <div :class="{'-translate-x-full':!open, 'opacity-100':open}"
         class="fixed z-50 sm:hidden h-screen w-screen px-6 py-4 top-0 left-0 bg-gray-50 transition-all transform opacity-0">

        <div class="text-right">
            <x-svg.close @click="open = false"/>
        </div>

        <div class="mt-6">
            @foreach($links as $name => $href)
                <x-guest.responsive-nav-link href="{{$href}}" :isFirst="$loop->first">
                    {{$name}}
                </x-guest.responsive-nav-link>
            @endforeach
        </div>

    </div>
</div>

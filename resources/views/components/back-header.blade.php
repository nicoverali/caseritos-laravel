<div {{$attributes->merge(['class' => "w-full"])}}>
    <x-svg-o-arrow-left class="w-6 h-6 text-red-400 inline-block"/>
    @isset($slot)
        <h1 class="inline-block align-middle ml-2 text-xl">{{$slot}}</h1>
    @endisset
</div>

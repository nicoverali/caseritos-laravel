<div {{$attributes->merge(['class' => "w-full"])}}>
    <x-svg-o-arrow-left class="w-6 h-6 text-red-400 inline-block"/>
    <p class="inline-block align-middle">{{$slot}}</p>
</div>

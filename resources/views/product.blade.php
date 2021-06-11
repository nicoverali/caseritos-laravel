@extends('layouts.app')

@section('body')
    @include('includes.navigation')

    <x-app-container>

        <x-banner/>

        <x-back-header class="px-6 mt-6"></x-back-header>

        <div class="px-6 py-4 sm:py-12 flex flex-col sm:flex-row">


            <div class="sm:hidden">
                <h1 class="mt-4 text-2xl ">{{$product->name}}</h1>
                <p class="mt-1 text-sm opacity-60">{{$product->owner->store_name}}</p>
            </div>

            <img class="mt-4 sm:mt-0 h-64 w-full sm:h-auto sm:object-cover sm:w-2/5" src="{{$product->picture}}" alt=""/>

            <div class="mt-4 sm:ml-24">
                <div class="hidden sm:flex sm:flex-col">
                    <h1 class="mt-4 sm:mt-0 text-2xl ">{{$product->name}}</h1>
                    <p class="mt-1 sm:mt-0 text-sm opacity-60 sm:order-first">{{$product->owner->store_name}}</p>
                </div>
                <p class="hidden text-2xl mt-4 sm:block"><span class="text-red-400">$</span>{{$product->price}}</p>
                <p class="mt-6">{{$product->description}}</p>
                <div class="mt-8 flex flex-wrap items-center justify-between sm:justify-start sm:justify-items-start">
                    <p class="text-2xl sm:hidden"><span class="text-red-400">$</span>{{$product->price}}</p>
                    <div class="text-center inline-block">
                        <p class="mt-1 mr-2 inline">{{__('pages/product.quantity')}}: </p>
                        <x-input class="w-24 pl-5 text-center" type="number" min="0" max="{{$product->stock}}" value="1" oninput="validity.valid||(value='');"/>
                        <p class="opacity-60 text-left">{{__('pages/product.on_stock')}}: {{$product->stock}}</p>
                    </div>
                    <button class="w-full py-4 mt-4 sm:mt-0 sm:ml-6 text-center text-white bg-red-400 rounded sm:w-48">{{__('pages/product.buy')}}</button>
                </div>
            </div>
        </div>
    </x-app-container>

@endsection

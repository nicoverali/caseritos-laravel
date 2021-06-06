@extends('layouts.app')

@section('body')
    @include('includes.navigation')

    <x-app-container>

        @include('includes.sm-banner')

        <x-back-header class="px-6 mt-6"></x-back-header>

        <div class="p-6 flex flex-col sm:flex-row">


            <div class="sm:hidden">
                <h1 class="mt-4 text-2xl ">Lorem Ipsum dolor sit amet </h1>
                <p class="mt-1 text-sm opacity-60">The bakery</p>
            </div>

            <img class="mt-4 sm:mt-0 h-64 w-full sm:h-auto sm:object-cover sm:w-2/5" src="https://thumbor.thedailymeal.com/xElyMCHUR1drRJYvuniWfcIGv1M=/870x565/filters:focal(895x584:896x585)/https://www.thedailymeal.com/sites/default/files/2020/07/13/maine-whoopie-pies.jpg" alt=""/>

            <div class="mt-4 sm:ml-24">
                <div class="hidden sm:flex sm:flex-col">
                    <h1 class="mt-4 sm:mt-0 text-2xl ">Lorem Ipsum dolor sit amet </h1>
                    <p class="mt-1 sm:mt-0 text-sm opacity-60 sm:order-first">The bakery</p>
                </div>
                <p class="hidden text-2xl mt-4 sm:block"><span class="text-red-400">$</span>500</p>
                <p class="mt-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aut, beatae consectetur eum, minima molestiae nulla, officiis rerum saepe suscipit tenetur vero. Cupiditate debitis enim et quam quisquam ratione voluptatibus?</p>
                <div class="mt-8 flex flex-wrap items-center justify-between sm:justify-start sm:justify-items-start">
                    <p class="text-2xl sm:hidden"><span class="text-red-400">$</span>500</p>
                    <div class="text-center inline-block">
                        <p class="mt-1 mr-2 inline">{{__('pages/product.quantity')}}: </p>
                        <x-input class="w-24 pl-5 text-center" type="number" min="0" value="1" oninput="validity.valid||(value='');"/>
                        <p class="opacity-60 text-left">{{__('pages/product.on_stock')}}: 15</p>
                    </div>
                    <button class="w-full py-4 mt-4 sm:mt-0 sm:ml-6 text-center text-white bg-red-400 rounded sm:w-48">{{__('pages/product.buy')}}</button>
                </div>
            </div>
        </div>
    </x-app-container>

@endsection

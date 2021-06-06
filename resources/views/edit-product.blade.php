@extends('layouts.app')

@section('body')
    @include('includes.navigation')

    <x-app-container>

        @include('includes.sm-banner')

        <x-back-header class="px-6 mt-6">{{__('pages/edit-product.edit_product')}}</x-back-header>

        <div class="p-6 flex flex-col sm:flex-row">

            <img class="h-64 w-full sm:h-auto sm:w-3/6 hidden object-cover sm:block" src="https://thumbor.thedailymeal.com/xElyMCHUR1drRJYvuniWfcIGv1M=/870x565/filters:focal(895x584:896x585)/https://www.thedailymeal.com/sites/default/files/2020/07/13/maine-whoopie-pies.jpg" alt=""/>

            <form class="sm:ml-16 flex-grow" action="#" method="post">
                @csrf
                <div>
                    <x-label for="title" :value="__('pages/edit-product.title')"/>
                    <x-input id="title" class="w-full" type="text" name="title" required autofocus/>
                </div>
                <img class="mt-6 h-64 w-full sm:h-2/5 sm:w-2/5 sm:hidden" src="https://thumbor.thedailymeal.com/xElyMCHUR1drRJYvuniWfcIGv1M=/870x565/filters:focal(895x584:896x585)/https://www.thedailymeal.com/sites/default/files/2020/07/13/maine-whoopie-pies.jpg" alt=""/>
                <div class="w-full mt-4">
                    <input type="file" id="image" accept="image/*" class="hidden">
                    <label for="image" class="block w-full py-4 text-center text-red-400 rounded border border-red-400 cursor-pointer
                    hover:bg-red-400 hover:text-white">
                        {{__('pages/edit-product.change_image')}}
                        <x-svg-s-pencil class="inline ml-2 w-4 h-4"/>
                    </label>
                </div>

                <div class="mt-4">
                    <x-label for="description" :value="__('pages/edit-product.description')"/>
                    <x-textarea id="description" class="w-full h-48" type="text" name="description" required autofocus/>
                </div>
                <div class="flex w-full mt-4">
                    <div class="w-1/2 pr-4">
                        <x-label for="price" :value="__('pages/edit-product.price')"/>
                        <x-input id="price" class="w-full" type="number" name="price" required autofocus/>
                    </div>
                    <div class="w-1/2 pl-4">
                        <x-label for="stock" :value="__('pages/edit-product.stock')"/>
                        <x-input id="stock" class="w-full" type="number" name="stock" required autofocus/>
                    </div>
                </div>
                <button type="submit" class="w-full py-4 mt-4 text-center text-white bg-red-400 rounded sm:w-48 hover:bg-red-300">
                    {{__('pages/edit-product.save')}}
                </button>
            </form>
        </div>
    </x-app-container>

@endsection

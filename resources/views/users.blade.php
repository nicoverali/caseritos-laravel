@extends('layouts.app')

@section('body')
    @include('includes.navigation')

    <x-app-container>

        @include('includes.sm-banner')

        <h1 class="text-3xl mt-6 px-6">{{__('pages/users.users')}}</h1>

        <div class="p-6">
            <table class="w-full text-left">
                <thead class="hidden sm:table-header-group">
                    <tr class="text-red-400 h-12 uppercase">
                        <th>{{__('pages/users.basic_info')}}</th>
                        <th>{{__('pages/users.created_date')}}</th>
                    </tr>
                </thead>
                <tbody class="pt-2">
                @foreach(range(0,10) as $i)
                    <tr class=" border-b border-gray-50 first:border-t">
                        <td class="py-4 text-left ">
                            <div class="flex items-start sm:items-center">
                                <img class="w-16 h-16" src="https://ui-avatars.com/api/?rounded=true&background=FF004&color=FFFFFF" alt="">
                                <div class="ml-6 flex flex-col">
                                    <div>
                                        <p class="text-base font-semibold">Juan Alberto Perez</p>
                                        <p class="opacity-60 overflow-ellipsis">nicolasalevera98@gmail.com</p>
                                    </div>
                                    <div class="sm:hidden mt-1">
                                        <p class="opacity-60">{{__('pages/users.created_date')}}: 13/05/1998</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sm:hidden flex mt-4">
                                <button class="py-2 flex-grow rounded-md shadow-sm border border-gray-100 text-red-400">
                                    <x-svg-o-pencil class="w-4 h-4 inline-block"/>
                                    <p class="inline-block">{{__('misc.edit')}}</p>
                                </button>
                                <button class="ml-2 py-2 flex-grow rounded-md shadow-sm border border-gray-100 text-red-400">
                                    <x-svg-o-trash class="w-4 h-4 inline-block"/>
                                    <p class="inline-block">{{__('misc.delete')}}</p>
                                </button>
                            </div>
                        </td>
                        <td class="py-4 hidden sm:table-cell">13/05/2021</td>
                        <td class="text-right hidden sm:table-cell">
                            <button class="p-2 rounded-md shadow-sm border border-gray-100 text-red-400">
                                <x-svg-o-pencil class="w-4 h-4"/>
                            </button>
                            <button class="ml-2 p-2 rounded-md shadow-sm border border-gray-100 text-red-400">
                                <x-svg-o-trash class="w-4 h-4"/>
                            </button>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </x-app-container>

@endsection

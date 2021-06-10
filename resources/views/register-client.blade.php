@extends('layouts.app-bg')

@section('body')

    <x-auth-card>

{{--        <h1 class="mt-2 text-4xl font-semibold text-center">Welcome !</h1>--}}
        <form method="POST" action="{{ route('become-a-seller') }}" class="mt-4">
        @csrf
            <div class="block mx-auto text-center relative">
                <img class="mx-auto h-40" src="{{asset('images/user-generic.png')}}" alt="">
                <label for="img" class="p-4 rounded-full bg-red-400 text-white relative -top-12 left-16 inline-block cursor-pointer">
{{--                    <button class="p-4 rounded-full bg-red-400 text-white relative -top-12 left-16">--}}
                        <x-svg-s-upload class="w-5 h-5"/>
{{--                    </button>--}}
                </label>
                <input class="hidden" type="file" id="img" name="img" accept="image/*">
            </div>
        <!-- Store name -->
            <div>
                <x-label for="phone" :value="__('client.phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>

            <div class="mt-4">
                <x-label for="address" :value="__('client.address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('phone')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-3">
                    {{ __('misc.register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
@endsection

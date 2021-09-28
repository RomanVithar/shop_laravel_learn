@extends('layout')

@section('title') Sign in @endsection

@section('main_content')

    <x-guest-layout>
        <x-auth-card>
            <x-slot name="logo">
                <h1>Регистрация</h1>
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Name')"/>

                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                             autofocus/>
                </div>

                <!-- surname -->
                <div>
                    <x-label for="surname" :value="__('Surname')"/>

                    <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" required
                             autofocus/>
                </div>

                <!-- Patronomic -->
                <div>
                    <x-label for="patronymic" :value="__('Patronymic')"/>

                    <x-input id="patronymic" class="block mt-1 w-full" type="text" name="patronymic" :value="old('patronymic')" required
                             autofocus/>
                </div>

                <!-- Address -->
                <div>
                    <x-label for="address" :value="__('Address')"/>

                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required
                             autofocus/>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')"/>

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                             required/>
                </div>

                <!-- Phone number -->
                <div class="mt-4">
                    <x-label for="phone" :value="__('phone')"/>

                    <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')"
                             required/>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')"/>

                    <x-input id="password" class="block mt-1 w-full"
                             type="password"
                             name="password"
                             required autocomplete="new-password"/>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                    <x-input id="password_confirmation" class="block mt-1 w-full"
                             type="password"
                             name="password_confirmation" required/>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ml-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>

@endsection

@extends('layouts.jtech_layout')
@section('page')
<H2 style="text-align: center;">Register</H2>
    <form method="POST" action="{{ route('register') }}" style="width: 50%; margin:0 auto; padding:40px">
        @csrf

        <table border="0">
            <tr>
                <td style="width: 100px;"><x-input-label for="name" :value="__('Name')" /></td>
                <td><x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /></td>
                <td><x-input-error :messages="$errors->get('name')" class="mt-2" /></td>
            </tr>
        <!-- Name -->
      
            <tr>
                <td> <x-input-label for="email" :value="__('Email')" /></td>
                <td><x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" /></td>
                <td><x-input-error :messages="$errors->get('email')" class="mt-2" /></td>
            </tr>
            <tr>
                <td> <x-input-label for="password" :value="__('Password')" /></td>
                <td> <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" /></td>
                <td><x-input-error :messages="$errors->get('password')" class="mt-2" /></td>
            </tr>
            <tr>
                <td><x-input-label for="password_confirmation" :value="__('Confirm Password')" /></td>
                <td>  <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" /></td>
                <td><x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /></td>
            </tr>

        </table>

      


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
@endsection

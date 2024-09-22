@extends('layouts.head_foot')
@section('amb')

<x-guest-layout>

    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <br><br><br><br>
                <img src="assets/images/services/service-details-1-img1.jpg" class="mb-5" alt="">
            </div>

            <div class="col-lg-5">

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <x-validation-errors class="mb-4" />
                <h1>
                    Login Here
                </h1>
                @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>

                        <x-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-input id="password" class="block mt-1 w-full" placeholder="Password" type="password"
                            name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif

                        <x-button class="ms-4">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>

</x-guest-layout>
</div>
</div>

</div>

@endsection
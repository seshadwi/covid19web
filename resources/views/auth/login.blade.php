@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center bg-darkblue position-absolute h-100 w-100">
    
    <div class="w-50 m-3">
        <div class="d-flex flex-column align-items-center">
            <div class="text-center">
                <img src="{{ asset('images/app-icon.png') }}" class="icon-app" alt="" srcset="">
                <h3>Covid-19 Tracker</h3>
            </div>
            <form method="POST" class="h-100" action="{{ route('login') }}">
                @csrf
                <div class="form-custom-cvd d-flex flex-column py-2">
                    <label for="username">{{ __('Username') }}</label>
                    <input type="text" class="@error('username') is-invalid @enderror" name="username" value="{{ old("username") }}" required autocomplete="username" autofocus>
                </div>
                <div class="form-custom-cvd d-flex flex-column py-2">
                    <label for="password">{{ __('Password') }}</label>
                    <input type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                <div class="form-custom-cvd d-flex flex-column py-2">
                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>
                    <div class="py-3 d-flex align-items-center flex-nowrap">
                        <hr class="order-1 hr-flex">
                        <span class="order-1 mx-2">Registrasi</span>
                        <hr class="order-1 hr-flex">
                    </div>
                    <a class="btn btn-secondary" href="{{ route("register") }}">{{ __('Registrasi') }}</a>
                </div>
                
            </form>
        </div>
    </div>
    
</div>
@endsection

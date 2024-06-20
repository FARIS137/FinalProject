@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('/front/assets/img/3d.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .form-container {
        background: rgba(255, 255, 255, 0.5); /* Transparan */
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        width: 100%;
        max-width: 500px;
    }
    .form-header {
        background-color: #007bff;
        color: white;
        font-weight: bold;
        text-align: center;
        padding: 1rem;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
        margin: -2rem -2rem 1rem -2rem;
    }
    .btn-primary {
        background-color: #007bff;
        border: none;
        width: 100%;
        padding: 0.75rem;
        border-radius: 5px;
        margin-top: 1rem;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .invalid-feedback {
        display: block;
    }
    label{
        color: black;
       
    }
</style>

<div class="container">
    <div class="form-container">
        <div class="form-header">{{ __('Login to Car Wash') }}</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" type="email" placeholder="Masukkan email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" placeholder="Masukkan password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Lupa Password?') }}
                    </a>
                @endif

                <div class="text-center mt-3">
                    <span>Belum Punya Akun?</span>
                    <a href="{{ route('register') }}" class="btn btn-link">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
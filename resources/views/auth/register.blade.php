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
        background: rgba(255, 255, 255, 0.5);
        padding: 2rem;  padding: 2rem;
        border-radius: 15px;
        box-shadow: 0 8px 16px rgba(0,0,0,0.3);
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
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
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
        <div class="form-header">{{ __('Register for Car Wash') }}</div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">{{ __('Nama') }}</label>
                <input id="name" type="text" placeholder="Masukkan nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">{{ __('Email ') }}</label>
                <input id="email" type="email" placeholder="Masukkan email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" placeholder="Masukkan Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm">{{ __('Konfirmasi Password') }}</label>
                <input id="password-confirm" type="password" placeholder="Konfirmasi Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </form>
    </div>
</div>
@endsection
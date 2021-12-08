@extends('layouts.auth')


{{-- @section('content')
<div class="page-content page-auth" style="background-image:url('../images/login-placeholder.jpg');background-size: 60%;background-repeat: no-repeat;background-position: center;">
    <div class="section-store-auth" data-aos="fade-up">
        <div class="container">
            <div class="row align-items-center row-login">
                <div class="offset-sm-2 col-sm-10 col-md-6 col-lg-6 offset-md-3 text-center">
                    <h2>
                        Petrokimia
                    </h2>
                    Masukkan Username dan Password.
                    <form method="POST" action="{{ route('login') }}" class="mt-3">
                        @csrf
                        <div class="form-group">
                            <input placeholder="Username" id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button
                            type="submit"
                            class="btn btn-success btn-block mt-4"
                        >
                            Masuk
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="display: none;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@section('content')
    <div class="container-custom" style="width: 100vw">
        <div class="row align-items-center row-login">
        <div class="d-none d-sm-none d-md-block col-md-8 col-lg-7 text-center">
            <img
            src="/images/login-new2.jpg"
            style="height: 100vh !important;"
            />
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-5">
            <h2>
                Petrokimia Gresik
            </h2>
            <form method="POST" action="{{ route('login') }}" class="mt-3">
                @csrf
                <div class="form-group">
                    <label>Username</label>
                    <input id="email" type="text" class="form-login-new form-control w-75 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input id="password" type="password" class="form-login-new form-control w-75 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button
                    type="submit"
                    class="btn btn-success btn-block w-75 mt-4"
                >
                    Login
                </button>
                {{-- <a class="btn btn-signup w-75 mt-2" href="{{ route('register') }}">
                    Sign Up
                </a> --}}
            </form>
        </div>
    </div>
    </div>
   
@endsection
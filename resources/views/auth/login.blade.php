@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style=" border-radius: 25px;
    padding: 8px;
    border: 5px solid #BDE626;
    background-color:#474747;" >
                <div class="card-header" style="text-align: center; border: none;background: #BDE626; font-weight: bold; font-size: 300%; border-top-left-radius: 15px;  border-top-right-radius: 15px">{{ __('Login') }}</div>

                <div class="card-body" style="background: #BDE626; border-bottom-left-radius: 15px;  border-bottom-right-radius: 15px">
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
                                <button type="submit" class="btn btn-primary" style=" background: #BDE626 ;border: 5px solid #474747; color: #474747">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style=" color: #474747">
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

<footer class="footer py-3 bg-custom" style="position: absolute; bottom: 0; width: 100%">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-2 textgray" style="font-size: 50px">
                <strong>Logo</strong>
            </div>
            <div class="col-8">

            </div>
            <div class="col-2 textgray">
                <div>Categories</div>
                <div>About us</div>
                <div>Sign in/Log in</div>
                <div>My Account</div>
            </div>
        </div>
    </div>
</footer>

@endsection

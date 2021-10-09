@extends('layouts.app_login')

@section('content')
<div class="logo">
    <img src="{{ asset('/img/aapvr-logo-sem-fundo.png')}}">
</div>

<div class="container">
    <div class="row align-items-center justify-content-center">

        <div class="col-lg-4">
            <div class="card">
                {{-- <div class="card-header">{{ __('Login') }}</div> --}}

                <div class="card-body">
                    <div class="row justify-content-center mb-3">
                        <h2>Login</h2>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col-6">
                                <a href="{{ route('password.request') }}">{{ __('Recuperar senha') }}</a>
                            </div>
                            <div class="col-6">
                                <a href="{{ route('register') }}" style="display: block; text-align: end">{{ __('Cadastre-se') }}</a>
                            </div>
                        </div>


                        <div class="form-group row mt-4">
                            <div class="col-md-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-custom btn-deep-blue px-5">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))

                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

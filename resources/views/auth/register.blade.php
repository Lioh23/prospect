@extends('layouts.app_login')

@section('content')
<div class="container" style="margin-top: 5%">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">

                <div class="card-body">
                    <div class="row justify-content-center mb-3">
                        <h2>Registre-se</h2>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="name" class="text-md-right">{{ __('Nome') }}</label>

                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name"  placeholder="{{ __('Insira seu nome completo') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="email" class="text-md-right">{{ __('E-Mail') }}</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('exemplo@exemplo.com.br')}}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="password" class="text-md-right">{{ __('Senha') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{__('Insira sua senha')}}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="password-confirm" class="text-md-right">{{ __('Confirmação de senha') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{__('Confirme sua senha')}}">
                            </div>
                        </div>

                        <div class="form-group row mt-3 mb-0">
                            <div class="col-md-12 d-flex justify-content-between">
                                <button type="submit" class="btn btn-custom btn-deep-blue">
                                    {{ __('Cadastrar') }}
                                </button>
                                <a href="{{ route('login') }}" class="btn btn-custom btn-outline-danger">
                                    {{ __('voltar') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

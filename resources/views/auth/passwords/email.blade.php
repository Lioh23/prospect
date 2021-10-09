@extends('layouts.app_login')

@section('content')
<div class="container" style="margin-top: 10%">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">

                <div class="card-body">
                    <div class="row justify-content-center mb-3">
                        <h2>Resetar a Senha</h2>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row">

                            <div class="col-md-12 form-group">
                                <label for="email" class="text-md-right">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{__('Informe seu e-mail')}}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3 mb-0">
                            <div class="col-md-12 d-flex justify-content-between">
                                <button type="submit" class="btn btn-custom btn-deep-blue px-3">
                                    {{ __('Enviar Link') }}
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

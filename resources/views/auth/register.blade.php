@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-body">
            <div class="card card0 border-0" style="border-radius: 10px">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card1 pb-5">
                            <div class="row px-3 justify-content-center border-line" style="margin-top: 120px">
                                <img src="{{ asset('image/grupo-mateus-logo.png') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="card2 card border-0 px-4 py-5">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                
                                <div class="row mb-4">
                                    
                                    <small class="text-center"><h5>Cadastro</h5></small>
                                    <hr>
                                </div>
                                <div class="row mb-3 px-3">
                                    <label for="name" class="mb-1"><h6 class="mb-0 text-sm">{{ __('Nome') }}</h6></label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="row mb-3 px-3">
                                    <label for="email" class="mb-1"> <h6 class="mb-0 text-sm">{{ __('Endereço de Email') }}</h6></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-3 px-3">
                                    <label for="password" class="mb-1"><h6 class="mb-0 text-sm">{{ __('Senha') }}</h6></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row mb-3 px-3">
                                    <label for="password-confirm" class="mb-1"><h6 class="mb-0 text-sm">{{('Confirmar Senha') }}</h6></label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="row mb-4 px-3">
                                    <button type="submit" class="btn btn-primary text-center" style="background-color: #0095d9;width: 150px;color: #fff;border-radius: 2px;">{{ __('Cadastrar') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="bg-blue py-4" style="border-bottom-left-radius: 10px; border-bottom-right-radius: 10px">
                    <div class="row">
                        <div class="col">
                            <b class="ml-4 ml-sm-5 mb-2">{{config('app.name')}} &copy; {{date('Y')}}. All rights reserved.</b>
                        </div>
                        <div class=" col social-contact" style="text-align: right">
                            <a href="https://www.facebook.com/grupomateusoficial" target="_bank"><span class="fa fa-facebook mr-4 text-sm"></span></a>
                            <a href="https://www.grupomateus.com.br/" target="_bank"><span class="fa fa-google-plus mr-4 text-sm"></span></a>
                            <a href="https://www.linkedin.com/company/grupo-mateus/" target="_blank"><span class="fa fa-linkedin mr-4 text-sm"></span></a>
                            <a href="https://www.linkedin.com/company/grupo-mateus/" target="_blank"><span class="fa fa-instagram mr-4 text-sm"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

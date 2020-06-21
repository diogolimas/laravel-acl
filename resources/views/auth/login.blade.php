@extends('auth.templates.template')

@section('content')
<form method="POST" action="{{ route('login') }}" class="login form">
    @csrf

    <div class="form-group">

        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Informe o seu e-mail">

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group ">

        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Informe a sua senha">

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>



    <div class="form-group  ">

        <button type="submit" class="btn btn-login">
            {{ __('Login') }}
        </button>


    </div>
    <div class="form-group text-right">
        @if (Route::has('password.request'))
        <a class="recuperar " href="{{ route('password.request') }}">
            {{ __('Esqueceu sua senha?') }}
        </a>
        @endif

    </div>
</form>

@endsection
@extends('auth.templates.template')

@section('content')

@if (session('status'))
<div class="form-control">
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
</div>
@endif
<form method="POST" action="{{ route('password.email') }}" class="login form">
    @csrf

    <div class="form-group ">

        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>

    <div class="form-group">
    
        <button type="submit" class="btn btn-login">
            Enviar link de recuperação da senha
        </button>
        
    </div>
</form>


@endsection
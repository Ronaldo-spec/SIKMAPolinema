@extends('layouts.auth-page')
@section('content')
<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="input-group mb-3">
        <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Email or Username">
        @error('username')
        <span class="invalid-feedback" role="alert">
            <strong style="text-color= red;">{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="input-group mb-3">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong style="text-color= red;">{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    Remember Me
                </label>
            </div>
            @if (Route::has('password.request'))
            <p class="mb-1">
                <a href="{{ route('password.request') }}">
                    {{ __('Lupa Password?') }}
                </a>
            </p>
            @endif
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
        </div>
    </div>
</form>
@endsection
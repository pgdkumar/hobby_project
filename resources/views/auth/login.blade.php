@extends('layouts.app')

@section('content')
<div class="login-form">
    <form method="post" action="{{ route('login') }}">
        @csrf
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email" autofocus>
              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me</label>
            <a href="{{ route('password.request') }}" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href=" {{ route('register') }}">Create an Account</a></p>
</div>
@endsection

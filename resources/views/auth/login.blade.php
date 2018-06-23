@extends('layouts.app')

@section('content')

<div class="login-page">
 <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">{{ __('Login') }}</a>
            <small>Already have an account?</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="{{ route('login') }}">
                       @csrf
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                           <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" class="filled-in chk-col-pink" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                             <button type="submit" class="btn btn-block bg-pink waves-effect">
                                    {{ __('Login') }}
                                </button>

                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="/register">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

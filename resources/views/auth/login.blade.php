@extends('layouts.auth')
@section('title')
    Login
    @endsection
@section('content')
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" role="form" method="POST" action="{{ route('login')}}">
            {{ csrf_field() }}
            <h3 class="form-title">Login to your account</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span> Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Email</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix {{ $errors->has('email') ? ' has-error' : '' }}" type="email" autocomplete="off" id="email" name="email" required autofocus /> </div>
                @if ($errors->has('email'))<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>@endif
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix {{ $errors->has('password') ? ' has-error' : '' }}" type="password" id="password" name="password" required/> </div>
                @if ($errors->has('password')) <span class="help-block"> <strong>{{ $errors->first('password') }}</strong></span> @endif </div>
            <div class="form-actions">
                <label class="checkbox">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} checked/> Remember me </label>
                <button type="submit" class="btn green pull-right"> Login </button>
            </div>

            <div class="forget-password">
                <h4>Forgot your password ?</h4>
                <p> no worries, click
                    <a href="{{ route('password.request') }}" id="forget-password"> here </a> to reset your password. </p>
            </div>
        </form>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="forget-form" action="index.html" method="post">
            <h3>Forget Password ?</h3>
            <p> Enter your e-mail address below to reset your password. </p>
            <div class="form-group">
                <div class="input-icon">
                    <i class="fa fa-envelope"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
                </div>
            </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn grey-salsa btn-outline"> Back </button>
                <button type="submit" class="btn green pull-right"> Submit </button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->

@endsection

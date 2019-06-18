@include('layouts.layout')
{{--<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">--}}
<link href="{{ url('css/main.css') }}" rel="stylesheet">

{{--<div class="h-100 background_color">--}}
    {{--<div class="pt-3 row justify-content-center ">--}}

        {{--<div class="col-md-10 col-lg-5 col-8 py-5">--}}
            {{--<div class="mt-4 p-md-4 base_color"  >--}}
                {{--<div class="card-header h4 off_white" style="font-size: 2rem; font-weight: 700; ">{{ __('The Voice') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--<form method="POST" action="{{ route('login') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-8 offset-md-2 pb-2">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email@gmail.com" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}

                            {{--<div class="col-md-8 offset-md-2 pb-2">--}}
                                {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password123" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="invalid-feedback">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row">--}}
                            {{--<div class="col-md-8 offset-md-2">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label class="text-white">--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0 mx-auto">--}}
                            {{--<div class="col-md-8 offset-md-2">--}}
                                {{--<button type="submit" class="btn p-2 col-12 primary_color_bg off_white">--}}
                                    {{--{{ __('Login') }}--}}
                                {{--</button>--}}
                                {{--<a class="btn p-2 col-12 btn-light primary_color mt-3" href="{{ route('register') }}">New User ?</a>--}}
                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}



<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.3/examples/sign-in/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login · The Voice</title>


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{secure_asset("css/signin.css")}}" rel="stylesheet">
</head>
<body class="text-center" cz-shortcut-listen="true"><div id="i4c-draggable-container" style="position: fixed; z-index: 1499; width: 0px; height: 0px;"><div data-reactroot="" class="resolved" style="all: initial;"></div></div>
    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf

        <h1 class="h3 mb-1 display-4 text-white" style="font-family: Oswald">The Voice</h1>
        <h5 class="text-white display-6 mb-4">21st century blogging</h5>
        <label for="inputEmail" class="sr-only text-white">Email address</label>
        <input id="email" type="email" class="mb-1 form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email@gmail.com" required autofocus>

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
        @endif

        <label for="inputPassword" class="sr-only text-white">Password</label>

        <input id="password" type="password" class="mb-1 form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password123" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
        @endif

        <div class="checkbox mb-3">
        <label class="text-white">
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
        </label>
        </div>
        <button class="btn btn-lg primary_color_bg text-white btn-block mb-3" type="submit">{{ __('Login') }}</button>
        <a class="btn btn-lg btn-block primary_color" href="{{ route('register') }}">Dont have an account ?</a>
        <p class="mt-5 mb-3 text-muted">© Fortune-Creig</p>
    </form>


<div id="i4c-dialogs-container"></div></body></html>
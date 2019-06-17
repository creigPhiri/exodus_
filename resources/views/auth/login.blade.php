@include('layouts.layout')
<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
<link href="{{ url('css/main.css') }}" rel="stylesheet">

<div class="h-100 background_color">
    <div class="pt-3 row justify-content-center ">

        <div class="col-md-10 col-lg-5 col-8 py-5">
            <div class="mt-4 p-md-4 base_color"  >
                <div class="card-header h4 off_white" style="font-size: 2rem; font-weight: 700; ">{{ __('The Voice') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            {{--<label for="email" class="text-white col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            <div class="col-md-8 offset-md-2 pb-2">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="email@gmail.com" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--<label for="password" class="col-md-4 col-form-label text-md-right text-white">{{ __('Password') }}</label>--}}

                            <div class="col-md-8 offset-md-2 pb-2">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password123" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-2 pb-2">
                                <div class="checkbox">
                                    <label class="text-white">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mx-auto">
                            <div class="col-md-8 offset-md-2">
                                <button type="submit" class="btn p-2 col-12 primary_color_bg off_white">
                                    {{ __('Login') }}
                                </button>
                                <a class="btn p-2 col-12 btn-light primary_color mt-3" href="{{ route('register') }}">New User ?</a>
                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--{{ __('Forgot Your Password?') }}--}}
                                {{--</a>--}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

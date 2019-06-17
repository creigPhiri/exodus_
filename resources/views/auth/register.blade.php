@include('layouts.layout')
<link href="{{ secure_asset('css/main.css') }}" rel="stylesheet">
<link href="{{ url('css/main.css') }}" rel="stylesheet">

<div class="h-100 flex-wrap background_color">
    <div class="pt-3 row justify-content-center ">
        <div class="col-md-10 col-lg-6 col-10 py-5 ">
            <div class="card base_color">
                <div class="card-header h4 off_white" style="font-size: 2rem; font-weight: 700; ">{{ __('The Voice') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            {{--<label for="name" class="col-md-4 col-form-label text-md-right text-white">{{ __('Name') }}</label>--}}

                            <div class="col-md-8 offset-md-2 pb-2">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="enter name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right text-white">{{ __('E-Mail Address') }}</label>--}}

                            <div class="col-md-8 offset-md-2 pb-2">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="enter email" value="{{ old('email') }}" required>

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
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="choose password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right text-white">{{ __('Confirm Password') }}</label>--}}

                            <div class="col-md-8 offset-md-2 pb-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-2 pb-2 ">
                                <button type="submit" class="btn p-2 col-12 primary_color_bg off_white">
                                    {{ __('Register') }}
                                </button>
                                <a class="btn p-2 col-12 btn-light primary_color mt-3" href="{{ route('login') }}">Returning User ?</a>
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

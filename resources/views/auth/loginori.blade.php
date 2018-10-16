@extends('layouts.layout')

@section('content')
<section id="hello" class="home bg-mega">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="row">
                <div class="main_home text-center">
                    <div class="home_text">
                        <h4 class="text-white text-uppercase">a new creative studio</h4>
                        <h1 class="text-white text-uppercase">Laporan Pengaduan Jalan Rusak</h1>

                        <div class="separator"></div>

                        <h5 class=" text-uppercase text-white"><em>Menjadi perantara bagi masyarakat dengan pemerintah dalam pengaduan jalan rusak</em></h5>
                        <br>
                        <button type="button" class="btn btn-warning  btn-block">Lapor</button>
                    </div>
                </div>
            </div><!--End off row-->
        </div><!--End off container -->
    </section> <!--End off Home Sections-->


<section id="testimonial" class="testimonial fix roomy-100">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <a class="btn btn-block btn-social btn-facebook" href="{{ url('login/facebook')}}">
                                    <span class="fa fa-facebook"></span> Sign in with Facebook
                                    </a>

                                    <a class="btn btn-block btn-social btn-google" href="{{ url('login/google')}}">
                                    <span class="fa fa-google"></span> Sign in with Google
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

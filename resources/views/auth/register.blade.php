{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}
@extends('layouts.auth_layouts')
@section('title','Register')
@section('auth')
<section class="row flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
          <div class="card-header border-0 pb-0">
            <div class="card-title text-center">
              <!-- <img src="app-assets/images/logo/logo-dark.png" alt="branding logo"> -->
              <h3>Register</h3>
            </div>
            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6>
          </div>
          <div class="card-content">
            <div class="card-body">
              <form class="form-horizontal"  action="{{ route('register') }}" method="POST" novalidate>
                  @csrf
                {{--  <fieldset class="form-group position-relative has-icon-left">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" id="user-name" placeholder="Full Name" required>
                  <div class="form-control-position">
                    <i class="la la-user"></i>
                  </div>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </fieldset>  --}}
                <fieldset class="form-group position-relative has-icon-left">
                  <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username" id="user-name" placeholder="Username" required>
                  <div class="form-control-position">
                    <i class="la la-user"></i>
                  </div>
                  @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left">
                  <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" id="user-email" value="{{ old('email') }}" placeholder="Your Email Address" required>
                  <div class="form-control-position">
                    <i class="la la-envelope"></i>
                  </div>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left">
                  <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="user-password" placeholder="Enter Password" required>
                  <div class="form-control-position">
                    <i class="la la-key"></i>
                  </div>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left">
                  <input type="password" name="password_confirmation" class="form-control" id="user-password" placeholder="Retype Password" required>
                  <div class="form-control-position">
                    <i class="la la-key"></i>
                  </div>
                </fieldset>
                <div class="form-group row">
                  {{--  <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                    <label for="remember-me"> Gender</label>
                    <fieldset>
                      <input type="radio" id="remember-me" name="gender" value="male" class="chk-remember">
                      <label for="remember-me"> Male </label>

                      <input type="radio" id="remember-me" name="gender" value="female" class="chk-remember">
                      <label for="remember-me">feMale </label>
                      @error('gender')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </fieldset>
                  </div>  --}}
                </div>
                <button type="submit" class="btn btn-outline-info btn-block"><i class="la la-user"></i> Register</button>
              </form>
            </div>
            <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Already have an account</span></p>
            <div class="card-body">
              <a href="{{ route('login') }}" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i>
                Login</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection

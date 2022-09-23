{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                {{ old('email') }}
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
@section('title','Login >> Sign In To Continue')
@section('auth')

<section class="row flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
          <div class="card-header border-0">
            <div class="card-title text-center">
              <img src="{{asset('storage/files')}}/{{$logo->image ?? null}}" alt="branding logo">
              <h3>Login</h3>
              <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Using Account
                Details</span></p>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body">
              <form class="form-horizontal" action="{{ route('login') }}" method="POST" novalidate>
                @csrf
                <fieldset class="form-group position-relative has-icon-left">
                  <input type="text" name="email" value="{{ old('email') }}" class="form-control  @error('email') is-invalid @enderror" id="user-name" placeholder="{{ __('E-Mail Address') }}" required>
                  <div class="form-control-position">
                    <i class="la la-user"></i>
                  </div>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left">
                  <input type="password"  name="password"  class="form-control  @error('password') is-invalid @enderror" id="user-password" placeholder="Enter Password" required>
                  <div class="form-control-position">
                    <i class="la la-key"></i>
                  </div>
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </fieldset>
                <div class="form-group row">
                  <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                    <fieldset>
                      <input type="checkbox" id="remember-me" class="chk-remember" {{ old('remember') ? 'checked' : '' }} name="remember">
                      <label for="remember-me"> Remember Me</label>
                    </fieldset>
                  </div>
                  @if (Route::has('password.request'))             
                  <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="{{ route('password.request') }}"
                      class="card-link">Forgot Password?</a></div>
                      @endif
                </div>
                <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
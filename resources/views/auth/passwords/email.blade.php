{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                     {{ __('Send Password Reset Link') }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
@section('title','Forget Password >> Email To Continue')
@section('auth')
<section class="row flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
          <div class="card-header border-0 pb-0">
            <div class="card-title text-center">
              <img src="{{asset('storage/files')}}/{{$logo->image}}" alt="branding logo">
            </div>
            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>We will send you a link
                to reset password.</span></h6>
          </div>
          <div class="card-content">
            <div class="card-body">
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
              <form class="form-horizontal" method="POST" action="{{ route('password.email') }}" novalidate>
                @csrf
                <fieldset class="form-group position-relative has-icon-left">
                  <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="user-email" name="email" placeholder="Your Email Address" required>
                  <div class="form-control-position">
                    <i class="la la-envelope"></i>
                  </div>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </fieldset>
                <button type="submit" class="btn btn-outline-info btn-lg btn-block"><i class="ft-unlock"></i> Recover
                  Password</button>
              </form>
            </div>
          </div>
          <div class="card-footer border-0">
            <p class="float-sm-left text-center"><a href="{{ route('login') }}" class="card-link">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection  
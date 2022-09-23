@extends('layouts.auth_layouts')
@section('title','Register >> Author Registeration Page')
@section('auth')
<section class="row flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
          <div class="card-header border-0">
            <div class="card-title text-center">
              <img src="{{asset('storage/files')}}/{{$logo->image}}" alt="branding logo">
            </div>
            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Create Account</span>
            </h6>
          </div>
          <div class="card-content">
            <div class="card-body">
              <form class="form-horizontal form-simple" method="POST" action="{{ route('new-user') }}" novalidate>
                @csrf
                <fieldset class="form-group position-relative has-icon-left mb-1">
                  <input type="text" name="username" class="form-control form-control-lg input-lg" id="user-name" placeholder="User Name">
                  <div class="form-control-position">
                    <i class="la la-user"></i>
                  </div>
                  @error('username')
                  <small class="name pt-2 text-danger">{{$message}} </small>
                  @enderror
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left mb-1">
                  <input type="email" name="email" class="form-control form-control-lg input-lg" id="user-email"
                    placeholder="Your Email Address" required>
                  <div class="form-control-position">
                    <i class="la la-envelope"></i>
                  </div>
                  @error('email')
                  <small class="name pt-2 text-danger">{{$message}} </small>
                  @enderror
                </fieldset>
                <fieldset class="form-group position-relative has-icon-left">
                  <input type="password" name="password" class="form-control form-control-lg input-lg" id="user-password"
                    placeholder="Enter Password" required>
                  <div class="form-control-position">
                    <i class="la la-key"></i>
                  </div>
                  @error("password")
                  <small class="name pt-2 text-danger">{{$message}} </small>
                  @enderror
                </fieldset>
                <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
              </form>
            </div>
            <p class="text-center">Already have an account ? <a href="login-simple.html" class="card-link">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  @endsection
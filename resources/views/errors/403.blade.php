{{--  @extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))  --}}
@extends('layouts.auth_layouts')
@section('title','403 >> Forbidden')
@section('auth')

<section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-lg-4 col-md-8 col-10 p-0">
            <div class="card-header bg-transparent border-0">
                <h2 class="error-code text-center mb-2">403</h2>
                <h3 class="text-uppercase text-center">{{ __($exception->getMessage() ?: 'Unauthorized Request')}} </h3>
            </div>
            <div class="card-content">
                <div class="row py-2">
                    <div class="col-12  mb-1">
                        <a href="{{ route('/') }}" class="btn btn-primary btn-block"><i class="ft-home"></i> Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
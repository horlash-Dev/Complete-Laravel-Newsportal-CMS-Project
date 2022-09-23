
@extends('admin.layouts.master')
@section('title',$page_name)
@section('content')
<section id="page-account-settings">
  <div class="row">
      <!-- left menu section -->
     @include('admin.partials.navigation')
      <!-- right content section -->
      <div class="col-md-9">
          <div class="card">
              <div class="card-content">
                  <div class="card-body">
                      <div class="tab-content">
                        @if (session("u-details") || session("trashed"))
                        <div  class="alert alert-icon-right alert-success text-center text-capitalize alert-dismissible mb-2" role="alert">
                          <span class="alert-icon"><i class="la la-info"></i></span>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                          @if (session("u-details"))
                          <strong id="" class="text-white">{{session("u-details")}}</strong>
                          @endif
                          @if(session("trashed"))
                          <strong id="" class="text-white">{{session("trashed")}}</strong>
                          @endif
                       </div>
                        @endif
                        @include('admin.dashboard.general',$user)
                        @include('admin.dashboard.reset')
                        @include('admin.dashboard.details',$user)
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

  @endsection
  
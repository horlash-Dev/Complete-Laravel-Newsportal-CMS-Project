@extends('admin.layouts.master')
@section('title',$page_name)
@section('content')
<section class="users-view">
  <!-- users view media object start -->
  @if (session("u-password"))
  <div  class="alert alert-icon-right alert-success text-center text-capitalize alert-dismissible mb-2" role="alert">
    <span class="alert-icon"><i class="la la-info"></i></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <strong id="" class="text-white">{{session("u-password")}}</strong>
   
 </div>
  @endif
  <div class="row">
    <div class="col-12 col-sm-7">
      <div class="media mb-2">
        <a class="mr-1" href="#">
          @if ($user->avatar != '')
          <img  src="{{asset('storage/avatar')}}/{{$user->avatar}}" alt="users view avatar"
          class="users-avatar-shadow rounded-circle" height="64" width="64">  
          @else
          <img  src="{{asset('storage/avatar/user.png')}}" alt="users view avatar"
            class="users-avatar-shadow rounded-circle" height="64" width="64">       
          @endif
        </a>
        <div class="media-body pt-25">
          <h4 class="media-heading"><span class="users-view-ne">{{$user->fullname}}</h4>
          <span>ID:</span>
          <span class="users-view-ids">{{$user->username}}</span>
        </div>
      </div>
    </div>
    <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
      <a href="{{route("u-profile",$user->username)}}" class="btn btn-sm mr-25 border">Profile</a>
      <a href="{{route("u-edit-profile",$user->username)}}" class="btn btn-sm btn-primary">Edit</a>
    </div>
  </div>

  <!-- users view media object ends -->
  <!-- users view card data start -->
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-4">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td>Registered:</td>
                  <td>{{$user->created_at->toFormattedDateString()}}</td>
                </tr>
                <tr>
                  <td>Verified:</td>
                  <td class="users-view-verifieds"> 
                    @if ($user->email_verified_at != null)
                    <span class="badge badge-success">Yes</span>
                    @else
                    <span class="badge badge-danger">No</span>                        
                    @endif
                  </td>
                </tr>
                <tr>
                  <td>Role:</td>
                  <td class="users-view-roles">
                    @foreach ($user->roles as $item)
                    <span class="badge badge-primary">{{$item->name}}</span>
                    @endforeach
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- users view card data ends -->
  <!-- users view card details start -->
  <div class="card">
    <div class="card-content">
      <div class="card-body">
        <div class="row bg-primary bg-lighten-5 rounded mb-2 mx-25 text-center text-lg-left">
          <div class="col-12 col-sm-4 p-2">
            <h6 class="text-primary mb-0">Total Posts: <span class="font-large-1 align-middle">{{count($user->articles)}}</span></h6>
          </div>
        </div>
        <div class="col-12">
          <table class="table table-borderless">
            <tbody>
              <tr>
                <td>Username:</td>
                <td class="">{{$user->username}}</td>
              </tr>
              <tr>
                <td>Name:</td>
                <td class="">{{$user->fullname}}</td>
              </tr>
              <tr>
                <td>E-mail:</td>
                <td class="">{{$user->email}}</td>
              </tr>
              <tr>
                <td>Address:</td>
                <td>{{$user->address}}</td>
              </tr>
              

            </tbody>
          </table>
          <h5 class="mb-1"><i class="ft-info"></i> Personal Info</h5>
          <table class="table table-borderless mb-0">
            <tbody>
              <tr>
                <td>Gender:</td>
                <td>{{$user->gender}}</td>
              </tr>
              <tr>
                <td>Bio:</td>
                <td>{!! $user->bio !!}</td>
              </tr>
              <tr>
                <td>Contact:</td>
                <td>{{$user->mobile_no}}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- users view card details ends -->

</section>
@endsection
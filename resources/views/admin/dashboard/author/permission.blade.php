@extends('admin.layouts.master')
@section('title',$page_name)
@section('content')
<!-- Whole row child row control table -->

<section class="users-list-wrapper">

    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
           <p class="card-text">
                        {{$page_name}}
         @if (session("p-changed"))
<div  class="alert alert-icon-right alert-info text-center text-capitalize alert-dismissible mb-2" role="alert">
  <span class="alert-icon"><i class="la la-info"></i></span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong id="" class="text-white">{{session("p-changed")}}</strong>
 
</div>
@endif 
    </p>
                     
                    <!-- datatable start -->
                    <div class="table-responsive">
                        <table id="users-list-datatable" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
									<th>id</th>
									<th>Avatar</th>
                                    <th>username</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
							@foreach ($alluser as $i => $user)
							<tr>
								<td>{{++$i}}</td>
								<td>{{$user->id}}</td>
								<td><img width="60" src="{{asset('storage/avatar')}}/{{$user->avatar}}" alt="img"></td>
								<td><a
								href="{{route("u-profile", [$user->username])}}">{{$user->username}}</a>
								</td>
								<td>{{$user->email}}</td>
								<td>
                                    <a href="{{route("u-show-per", [$user->username])}}" target="_blank"><i class="ft-edit-1 px-1"></i></a>   
                                    <a href="{{route("u-profile", [$user->username])}}" target="_blank"><i class="ft-info px-1"></i></a>
                                </td>

                            </tr>
							@endforeach
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
  
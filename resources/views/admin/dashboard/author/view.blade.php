@extends('admin.layouts.master')
@section('title',$page_name)
@section('content')
<!-- Whole row child row control table -->

<section class="users-list-wrapper">
    <div class="users-list-filter px-1">
        <form>
            <div class="row border border-light rounded py-2 mb-2">
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-verified">Verified</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="users-list-verified">
                            <option value="">Any</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-role">Role</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="users-list-role">
                            <option value="">Any</option>
                            <option value="User">User</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-status">Status</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="users-list-status">
                            <option value="">Any</option>
                            <option value="Active">Active</option>
                            <option value="Close">Close</option>
                            <option value="Banned">Banned</option>
                        </select>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <p class="card-text">
                        {{$page_name}}
                        @if (session("check-status") || session("trashed"))
                        <div  class="alert alert-icon-right alert-success text-center text-capitalize alert-dismissible mb-2" role="alert">
                            <span class="alert-icon"><i class="la la-info"></i></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            @if (session("check-status"))
                            <strong id="" class="text-white">{{session("check-status")}}</strong>
                            @endif
                            @if(session("trashed"))
                            <strong id="" class="text-white">{{session("trashed")}}</strong>
                            @endif
                       </div>
                        @endif
                        @if (session("user_added"))
                        <div  class="alert alert-icon-right alert-success text-center text-capitalize alert-dismissible mb-2" role="alert">
                          <span class="alert-icon"><i class="la la-info"></i></span>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                          <strong id="" class="text-white">{{session("user_added")}}</strong>
                         
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
                                    <th>fullname</th>
                                    <th>Email</th>
                                    <th>verified</th>
                                    <th>role</th>
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
								<td>{{$user->fullname}}</td>
								<td>{{$user->email}}</td>
								<td>
									@if ($user->email_verified_at != null)
									<span class="badge badge-success">Yes</span>
									@else
									<span class="badge badge-warning">No</span>
									@endif
								</td>
								<td>
									@foreach ($user->roles as $item)
									<span class="badge badge-secondary">{{$item->name}}</span>
									@endforeach
								</td>
								<td><a href="{{route("u-edit-profile", [$user->username])}}" target="_blank"><i class="ft-edit-1 px-1"></i></a>
                                    
                                    {!! Form::open(["route"=>["trash-user", $user->username],"class"=>"d-inline"]) !!}
                                    @method("DELETE")
                                    {{--  <a href="{{route("u-profile", [$user->username])}}"><i class="ft-trash-2 px-1"></i></a>  --}}
                                   
                                   {!! Form::submit("trash", ["class"=>"btn btn-danger py-0 px-1"]) !!}
                                   
                                   {!! Form::close() !!}
                                   
                                    <a href="{{route("u-profile", [$user->username])}}" target="_blank"><i class="ft-info px-1"></i></a>
                                    <a href="{{route("u-role", [$user->username])}}"><i class="ft-lock px-1"></i></a>
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
  
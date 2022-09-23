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
                        @if (session("restored") || session("f-deleted"))
                        <div  class="alert alert-icon-right alert-success text-center text-capitalize alert-dismissible mb-2" role="alert">
                            <span class="alert-icon"><i class="la la-info"></i></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            @if (session("restored"))
                            <strong id="" class="text-white">{{session("restored")}}</strong>
                            @endif
                            @if(session("f-deleted"))
                            <strong id="" class="text-white">{{session("f-deleted")}}</strong>
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
                        <table  class="table table-striped table-bordered  responsive dataex-rowre-mobilesupport">
                            <thead>
                                <tr>
                                    <th>#</th>
									<th>id</th>
									<th>Avatar</th>
                                    <th>username</th>
                                    <th>Email</th>
                                    <th>role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
							@foreach ($alluser as $i => $user)
							<tr>
								<td>{{++$i}}</td>
								<td>{{$user->id}}</td>
								<td><img width="60" src="{{asset('storage/avatar')}}/{{$user->avatar}}" alt="img"></td>
								<td><a
								href="{{route("u-profile", [$user->username])}}">{{$user->username ?? null}}</a>
								</td>
								<td>{{$user->email}}</td>
								<td>
									@foreach ($user->roles as $item)
									<span class="badge badge-secondary">{{$item->name}}</span>
									@endforeach
								</td>
								<td><a href="{{route("restore.user", [$user->username])}}" target="_blank"><i class="ft-edit-1 px-1"></i></a>
                                    
                                    {!! Form::open(["route"=>["f-trash-user", $user->username],"class"=>"d-inline"]) !!}
                                    @method("DELETE")
                                    {{--  <a href="{{route("u-profile", [$user->username])}}"><i class="ft-trash-2 px-1"></i></a>  --}}
                                   
                                   {!! Form::submit("Delete", ["class"=>"btn btn-danger py-0 px-1"]) !!}
                                   
                                   {!! Form::close() !!}
                
                                </td>

                            </tr>
							@endforeach
                        </tbody>
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
  
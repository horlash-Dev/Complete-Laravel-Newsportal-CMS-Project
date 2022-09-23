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
                        @if (session("restored") || session("per-deleted"))
                        <div  class="alert alert-icon-right alert-success text-center text-capitalize alert-dismissible mb-2" role="alert">
                            <span class="alert-icon"><i class="la la-info"></i></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            @if (session("restored"))
                            <strong id="" class="text-white">{{session("restored")}}</strong>
                            @endif
                            @if(session("per-deleted"))
                            <strong id="" class="text-white">{{session("per-deleted")}}</strong>
                            @endif
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
                                    <th>name</th>
                                    <th>description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
							@foreach ($allper as $i => $user)
							<tr>
								<td>{{++$i}}</td>
								<td>{{$user->id}}</td>
								<td>{{$user->name}}</td>
					            <td>{{$user->description}} </td>
								<td><a href="{{route("restore.permission", [$user->slug])}}" target="_blank"><i class="ft-edit-1 px-1"></i></a>
                                    
                                    {!! Form::open(["route"=>["f-trash-permission", $user->slug],"class"=>"d-inline"]) !!}
                                    @method("DELETE")
                                   
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
  
@extends('admin.layouts.master')
@section('title',$page_name)
@section('content')
<!-- Whole row child row control table -->


<section id="mobile-support">
	<div class="row">
	  <div class="col-12">
		<div class="card">
		  <div class="card-header">
			<h4 class="card-title"></h4>
			<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
			<div class="heading-elements">
			  <ul class="list-inline mb-0">
				<li><a data-action="collapse"><i class="ft-minus"></i></a></li>

				<li><a data-action="close"><i class="ft-x"></i></a></li>
			  </ul>
			</div>
		  </div>
		  <div class="card-content collapse show">
			<div class="card-body card-dashboard">
			  <p class="card-text">
				 {{$page_name}}
				 @if (session("trashed"))
				 <div  class="alert alert-icon-right alert-danger text-center text-capitalize alert-dismissible mb-2" role="alert">
					 <span class="alert-icon"><i class="la la-info"></i></span>
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">×</span>
					 </button>
					 <strong id="" class="text-white">{{session("trashed")}}</strong>
				</div>
				 @endif
			  </p>
			  <table class="table table-striped table-bordered  responsive dataex-rowre-mobilesupport">
				<thead>
				  <tr>
					<th>#</th>
					<th>Title</th>
					<th>Permissions</th>
					<th>Description</th>
					<th>Options</th>
				  </tr>
				</thead>
				<tbody>
					@foreach ($allrole as $i => $role)
					
					<tr>
						<td>{{++$i}} </td>
						<td>{{$role->name}}</td>
						<td>
							@foreach ($role->permissions as $item)
							<span class="badge bagde-info">{{$item->name}} </span>
							@endforeach
							</td>
						<td>{{$role->description}} </td>
						<td>
						<a href="{{route("edit-roles", [$role->slug])}}" class="btn btn-primary px-2  box-shadow-1 mr-1">edit</a>
						{!! Form::open(["route"=>["trash-roles", $role->slug],"method"=>"DELETE", "id"=>"trash", 'class'=>'form  d-inline-block']) !!}
						@method("DELETE")
						{!! Form::submit("Delete", ["class"=>"btn btn-danger  box-shadow-1 mr-1 px-2"]) !!}						
						{!! Form::close() !!}
						</td>
					  </tr>
					  @endforeach
				</tbody>
				<tfoot>
				  <tr>
					<th>#</th>
					<th>Name</th>
					<th>Permissions</th>
					<th>Description</th>
					<th>Options</th>
				  </tr>
				</tfoot>
			  </table>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
<!--/ Whole row child row control table -->
@endsection
  
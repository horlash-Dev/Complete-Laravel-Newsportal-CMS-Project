@extends('admin.layouts.master')
@section('title',$page_name)
@section('content')
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
				 All Categories and related articles
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
			  </p>
			  <table class="table table-striped table-bordered  responsive dataex-rowre-mobilesupport">
				<thead>
				  <tr>
					<th>#</th>
					<th>Name</th>
					@can('master admin')
					<th>Status</th>
					@endcan
					<th>Sub Categories</th>
					<th>Description</th>
					<th>Options</th>
				  </tr>
				</thead>
				<tbody>
					@foreach ($allcategory  as $i => $category)
					
					<tr>
						<td>{{++$i}} </td>
						<td>{{$category->name}}</td>
						@can('master admin')
						<td class="text-center">
							
							{!! Form::open(["route" => ["check-status", [$category->slug]],'class'=>'form']) !!}
							@method("PUT")
							@if ($category->status != 1)
							{!! Form::submit("Publish", ["class"=>"btn px-2 btn btn-sm btn-outline-success round box-shadow-1 mr-1"]) !!}
								@else
								{!! Form::submit("UNPUBLISH", ["class"=>" px-2 btn btn-sm btn-outline-danger round box-shadow-1 mr-1 "]) !!}
							@endif
							{!! Form::close() !!}
							
						</td>
						@endcan
						<td  class="text-center">
							@if ($category->has("subCategory") && $category->subCategory != "")
						
							<a href="{{route("post-subcategory", [$category->slug])}}" class="btn  px-2 btn-success  box-shadow-1 mr-1">sub-category</a>
							@endif
						</td>
						<td>{{ Str::words(strip_tags($category->description),50)  }}</td>
						<td>
							@can('Category Update','master admin')
						<a href="{{route("edit-category", [$category->slug])}}" class="btn btn-sm btn-outline-primary round px-2  box-shadow-1 mr-1">edit</a>
						@endcan
						<a href="{{route("post-article", [$category->slug])}}" class="btn btn-sm btn-outline-info round px-2 box-shadow-1 mr-1">articles</a>
						@can('Category Delete','master admin')
						{!! Form::open(["route"=>["trash-category", $category->slug],"method"=>"DELETE", "id"=>"trash", 'class'=>'form  d-inline-block']) !!}
						@method("DELETE")
						{!! Form::submit("Delete", ["class"=>"btn btn-sm btn-outline-danger round  box-shadow-1 mr-1 px-2"]) !!}						
						{!! Form::close() !!}
						@endcan
						</td>
					  </tr>
					  @endforeach
				</tbody>
				<tfoot>
				  <tr>
					<th>#</th>
					<th>Name</th>
					@can('master admin')
					<th>Status</th>
					@endcan
					<th>Sub Categories</th>
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
  
@endsection
  
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
			  </p>
			  <table class="table table-striped table-bordered  responsive dataex-rowre-mobilesupport">
				<thead>
				  <tr>
					<th>#</th>
					<th>Image</th>
					<th>Title</th>
					@can('master admin')
					<th>Status</th>
					@endcan
					<th>Category</th>
					@can('master admin')
					<th>Featured</th>
					@endcan
					@can('Comment View','master admin')
					<th>Total comment</th>
					@endcan
					<th>Total Views</th>
					<th>Author</th>
					<th>Options</th>
				  </tr>
				</thead>
				<tbody>
					@foreach ($allpost  as $i => $post)
					
					<tr>
						<td>{{++$i}} </td>
						<td>    <img width="60" src="{{asset('storage/articles_img')}}/{{$post->thumb_img}}" alt="img"></td>
						<td>{{ Str::words(strip_tags($post->title),40)  }}</td>
						@can('master admin')
						<td class="text-center">
							
							{!! Form::open(["route" => ["check-post-status", [$post->slug]],'class'=>'form']) !!}
							@method("PUT")
							@if ($post->status != 1)
							{!! Form::submit("Publish", ["class"=>"btn px-2 btn btn-sm btn-outline-success round box-shadow-1 mr-1"]) !!}
								@else
								{!! Form::submit("UNPUBLISH", ["class"=>" px-2 btn btn-sm btn-outline-danger round box-shadow-1 mr-1 "]) !!}
							@endif
							{!! Form::close() !!}
						</td>
						@endcan
						{{-- <td>{{ Str::words(strip_tags($post->description),40)  }}</td> --}}
						<td  class="text-center">
							@if ($post->has("subCategory") && $post->subCategory != "")
							@foreach ($post->subCategory as $item)
							<a href="{{route("subcategories", [$item->slug])}}"  target="_blank" class="px-2 btn btn-sm btn-outline-success round  box-shadow-1 mr-1">{{ $item->name }} </a>
							@endforeach
							@endif
							@if ($post->has("category") && $post->category != "")
							@foreach ($post->category as $item)
							<a href="{{route("categories", [$item->slug])}}"  target="_blank" class=" px-2 btn btn-sm btn-outline-success round box-shadow-1 mr-1">{{ $item->name }} </a>
							@endforeach
							@endif
						</td>
						@can('master admin')
						<td class="text-center">
							
							{!! Form::open(["route" => ["check-hot", [$post->slug]],'class'=>'form']) !!}
							@method("PUT")
							@if ($post->featured != 1)
							{!! Form::submit("feature", ["class"=>"btn px-2 btn btn-sm btn-outline-success round box-shadow-1 mr-1"]) !!}
								@else
								{!! Form::submit("revoke", ["class"=>" px-2 btn btn-sm btn-outline-danger round box-shadow-1 mr-1 "]) !!}
							@endif
							{!! Form::close() !!}
						</td>
						@endcan
						@can('Comment View','master admin')
						<td><strong class="badge badge-primary">{{count($post->comments)}} </strong></td>
						@endcan
						<td><strong class="badge badge-info">{{$post->view_count}} </strong></td>
						<td><strong class="badge badge-success">{{ $post->createdBy->username ?? null}} </strong></td>
						<td>
						@can('Post Update','master admin')
						<a href="{{route("article.edit", [$post->slug])}}" class="btn btn-sm btn-outline-primary round px-2  box-shadow-1 mr-1">edit</a>
						@endcan
						<a href="{{route("article.show", [$post->slug])}}" target="_blank" class="btn btn-sm btn-outline-info round px-2 box-shadow-1 mr-1">View</a>
						@can('Post Delete','master admin')
						{!! Form::open(["route"=>["trash-article", $post->slug],"method"=>"DELETE", "id"=>"trash", 'class'=>'form  d-inline-block']) !!}
						@method("DELETE")
						{!! Form::submit("Delete", ["class"=>"btn btn-sm btn-outline-danger round box-shadow-1 mr-1 px-2"]) !!}						
						{!! Form::close() !!}
						@endcan	
					</td>
					  </tr>
					  @endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>#</th>
						<th>Image</th>
						<th>Title</th>
						@can('master admin')
						<th>Status</th>
						@endcan
						<th>Category</th>
						@can('master admin')
						<th>Featured</th>
						@endcan
						@can('Comment View','master admin')
						<th>Total comment</th>
						@endcan
						<th>Total Views</th>
						<th>Author</th>
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
  
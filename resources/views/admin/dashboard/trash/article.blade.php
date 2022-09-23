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
				 @if (session("restored") || session("post-deleted"))
				 <div  class="alert alert-icon-right alert-success text-center text-capitalize alert-dismissible mb-2" role="alert">
					 <span class="alert-icon"><i class="la la-info"></i></span>
					 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						 <span aria-hidden="true">×</span>
					 </button>
					 @if (session("restored"))
					 <strong id="" class="text-white">{{session("restored")}}</strong>
					 @endif
					 @if(session("post-deleted"))
					 <strong id="" class="text-white">{{session("post-deleted")}}</strong>
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
                    <th>Author</th>
					<th>Options</th>
				  </tr>
				</thead>
				<tbody>
					@foreach ($allpost  as $i => $post)
					
					<tr>
						<td>{{++$i}} </td>
						<td>    <img width="60" src="{{asset('storage/articles_img')}}/{{$post->thumb_img}}" alt="img"></td>
						<td>{{$post->title}}</td>
						<td><strong class="badge badge-success">{{$post->createdBy->username ?? null}} </strong></td>
                        <td>
						<a href="{{route("restore.post", [$post->slug])}}" class="btn btn-primary px-2  box-shadow-1 mr-1">Restore</a>
						{!! Form::open(["route"=>["f-trash-post", $post->slug],"method"=>"DELETE", "id"=>"trash", 'class'=>'form  d-inline-block']) !!}
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
						<th>Image</th>
						<th>Title</th>
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
  
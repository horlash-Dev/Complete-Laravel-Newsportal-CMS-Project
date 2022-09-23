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
					<th>Title</th>
					<th>Username</th>
					<th>Description</th>
					<th>Approval</th>
					<th>Replies</th>
					<th>Options</th>
				  </tr>
				</thead>
				<tbody>
					@foreach ($allcomment as $i => $comment)
					
					<tr>
						<td>{{++$i}} </td>
						<td>{{ strip_tags($comment->commentable->title ?? null) }}</td>
						<td>
							{{$comment->username}}
							</td>
						<td>{{ strip_tags($comment->body)}} </td>
						<td class="text-center">
							
							{!! Form::open(["route" => ["c-approve", [$comment->username]],'class'=>'form']) !!}
							@method("PUT")
							@if ($comment->status != 1)
							{!! Form::submit("Approve", ["class"=>"btn px-2 btn btn-success box-shadow-1 mr-1"]) !!}
								@else
								{!! Form::submit("UNAPPROVE", ["class"=>" px-2 btn btn-danger box-shadow-1 mr-1 "]) !!}
							@endif
							{!! Form::close() !!}
							
						</td>
						<td><span class="badge badge-primary text-center m-2"> {{count($comment->reply)}}</span></td>
						<td class="">
							@if ($comment->commentable != null)
							<a href="{{route("article.show", [$comment->commentable->slug])}}" target="_blank" class="btn btn-info px-2 mb-1 box-shadow-1 mr-1">View</a>
							@else
							<span>null</span>		
							@endif
						<a href="{{route("comment-edit", [$comment->username])}}" class="btn btn-primary px-2  box-shadow-1 mb-1 ">edit</a>
						{!! Form::open(["route"=>["trash-comment", $comment->username],"method"=>"DELETE", "id"=>"trash", 'class'=>'form']) !!}
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
					<th>Title</th>
					<th>Username</th>
					<th>Description</th>
					<th>Approval</th>
					<th>Replies</th>
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
  
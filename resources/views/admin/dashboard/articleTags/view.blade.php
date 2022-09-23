@extends('admin.layouts.master')
@section('title',$page_name)
@section('content')
@can('Category Add','master admin')
<section id="form-action-layouts">
	<div class="row justify-content-md-center">
		<div class="col-md-10">
			
			<div class="card">
				<div class="card-header">
					<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
					<div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
							<li><a data-action="close"><i class="ft-x"></i></a></li>
							<li><a id="reload" data-action="reload"><i class="ft-rotate-cw"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="card-content collpase show">
					<div class="card-body"> 
               
                        {!! Form::open(['route' => 'new-tags','class'=>'form', "id"=>'taketagsData']) !!}
						<h4 class="form-section"><i  class="ft-settings"></i>New Tags</h4>
                        <div class="form-body">
								<div class="row m-2">
									<div class="form-group">
											<div class="create-tags  form-control" data-tags-input-name="name"></div>
											<small class="name-ts pt-2 text-danger"></small>
											<p class="text-muted mt-1">forbidden words : <code>"bastard","bitch","biatch","bloody"</code>.</p>
										</div>
								</div> 
                            </div>
                            <div class="form-actions text-left">                                    
                         {!! Form::submit("Publish Tags", ["id"=>'createTags',"class"=>"btn btn-success"]) !!}

							</div>                        
                        {!! Form::close() !!}
                                              
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
@endcan
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
				 <div  class="alert alert-icon-right alert-success text-center text-capitalize alert-dismissible mb-2" role="alert">
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
					@can('Category Update','master admin')
					<th>Options</th>
					@endcan
				  </tr>
				</thead>
				<tbody>
					
					@foreach ($alltags as $i => $tags)
					
					<tr>
						<td>{{++$i}} </td>
						<td>{{$tags->name}}</td>
						@can('Category Update','master admin')
						<td>
						<a href="{{route("edit-tags", [$tags->slug])}}" class="btn btn-primary px-2  box-shadow-1 mr-1">edit</a>
						{!! Form::open(["route"=>["trash-tags", $tags->slug],"method"=>"DELETE", "id"=>"trash", 'class'=>'form  d-inline-block']) !!}
						@method("DELETE")
						{!! Form::submit("Delete", ["class"=>"btn btn-danger  box-shadow-1 mr-1 px-2"]) !!}						
						{!! Form::close() !!}
						</td>
						@endcan
					  </tr>
					  @endforeach
				</tbody>
			  </table>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>

  <!--/ Mobile support (Responsive integration) -->
  
@endsection
  
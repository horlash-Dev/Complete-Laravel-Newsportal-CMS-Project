@extends('admin.layouts.master')
@section('title',$page_name)
@section('content')

@can('Permission Add','master admin')
<section id="form-action-layouts">
	<div class="row justify-content-md-center">
		<div class="col-md-8">
			
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
               
                        {!! Form::open(['route' => 'new-permission','class'=>'form', "id"=>'takepermissionData']) !!}
                        
                        <div class="form-body">
								<h4 class="form-section"><i  class="ft-settings"></i>Add new permission field!</h4>

								<div class="row">
									<div class="form-group col-12 mb-2">
										<label  class="text-bold-600 font-medium-2"  for="projectinput5">Permission Name</label>
                                        {!! Form::text("name", null, ['class'=>"form-control"]) !!}
										<small class="name-p pt-2 text-danger"></small>
									</div>
                                </div>
								<div class="row">
									<div class="form-group col-12 mb-2">
                                        <label   class="text-bold-600 font-medium-2" for="projectinput9">Description (Optional) </label>
                                        {!! Form::textarea("description", null, ["class"=>"form-control", "id"=>"desc-p","placeholder"=>"permission details..."]) !!}
										<small class="desc-p pt-2 text-danger"></small>   
                                        
									</div>
                                </div>                              
                            </div>
                            <div class="form-actions text-center">                                    
                                    {!! Form::submit("Submit permission", ["id"=>'createPermission',"class"=>"btn btn-success"]) !!}

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
					<th>Description</th>
					<th>Options</th>
				  </tr>
				</thead>
				<tbody>
					@foreach ($allpermission as $i => $permission)
					
					<tr>
						<td>{{++$i}} </td>
						<td>{{$permission->name}}</td>
						<td>{{$permission->description}}</td>
						<td>
						<a href="{{route("edit-permission", [$permission->slug])}}" class="btn btn-primary px-2  box-shadow-1 mr-1">edit</a>
						{!! Form::open(["route"=>["trash-permission", $permission->slug],"method"=>"DELETE", "id"=>"trash", 'class'=>'form  d-inline-block']) !!}
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
  <!--/ Mobile support (Responsive integration) -->
  
 @endsection
  
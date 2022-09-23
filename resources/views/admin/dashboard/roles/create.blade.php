@extends('admin.layouts.master')
@section('title',$page_name)
@section('content')

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
					{{--  @can('edits Post',"delete post")  --}}
						
					<div class="card-body"> 
               
                        {!! Form::open(['route' => 'new-role','class'=>'form', "id"=>'takerolesData']) !!}
                        
                        <div class="form-body">
								<h4 class="form-section"><i  class="ft-settings"></i>Add new Role field!</h4>

								<div class="row">
									<div class="form-group col-12 mb-2">
										<label   class="text-bold-600 font-medium-2" for="projectinput5">Role Name</label>
                                        {!! Form::text("name", null, ['class'=>"form-control"]) !!}
										<small class="name-r pt-2 text-danger"></small>
									</div>
								</div>
								
								<div class="form-group mt-1">
										<div class="text-bold-600 font-medium-2">
										 Grant Permission
										</div>
										
										{!! Form::select("permissions[]", $permissions, null, ["id"=>"r-multi", "multiple", 'class'=>"r-multiple  form-control"]) !!}
										<small class="attach-r pt-2 text-danger"></small>
								</div>
								
								<div class="form-group mt-1 btn-group btn-group-sm" role="group">
									<button type="button" class="js-programmatic-multi-clear btn btn-outline-primary">
									  Clear permissions
									</button><br>
								  </div>

								<div class="row">
									<div class="form-group col-12 mb-2">
                                        <label class="text-bold-600 font-medium-2" for="projectinput9">Description (Optional) </label>
                                        {!! Form::textarea("description", null, ["class"=>"form-control","id"=>"desc-r", "placeholder"=>"Role details..."]) !!}
										<small class="desc-r pt-2 text-danger"></small>   
                                        
									</div>
                                </div>                              
                            </div>
                            <div class="form-actions text-center">                                    
                                    {!! Form::submit("Submit Role", ["id"=>'createRole',"class"=>"btn btn-success"]) !!}

							</div>                        
                        {!! Form::close() !!}
                                              
					</div>
					{{--  @endcan  --}}
				</div>
			</div>
		</div>
	</div>

</section>

@endsection
  
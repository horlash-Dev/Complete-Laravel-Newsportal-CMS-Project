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
				@if (session("d-approved"))
				<div class="card-text">
					<div	class="alert alert-icon-right alert-success alert-dismissible mb-2" role="alert">
						<span class="alert-icon"><i class="la la-info"></i></span>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
						<strong id="" class="text-center text-white">{{session("d-approved")}}</strong>
					</div>
				</div>
				@endif 
				<div class="card-content collpase show">
					<div class="card-body"> 
               
                        {!! Form::open(['url' => 'is_admin/direct/permission','class'=>'form', "id"=>'takedirectpData']) !!}
                        
                        <div class="form-body">
								<h4 class="form-section"><i  class="ft-settings"></i>Direct Permission</h4>

								<div class="row">
									<div class="form-group col-6 mb-2">
										<label  class="text-bold-600 font-medium-2"  for="projectinput5">User Username</label>
                                        {!! Form::text("Username", null, ['class'=>"round form-control"]) !!}
										@error("Username")
										<small class="name-dp pt-2 text-danger">{{$message}}</small>
										@enderror
									</div>

									<div class="form-group col-6 mb-2">
										<label  class="text-bold-600 font-medium-2"  for="projectinput5">Permission slug</label>
                                        {!! Form::text("Permissions", null, ['class'=>"round form-control"]) !!}
										@error("Permissions")
										<small class="name-dp pt-2 text-danger">{{$message}}</small>
										@enderror
									</div>
                                </div>
						        <b class="text-danger"> <i>note type username and permission according to how it is in their modules/pages else their will be error.. donot use lowercase for permission rather copy it from permissson list page...</i></b>                     
                            </div>
                            <div class="form-actions text-center">                                    
                                    {!! Form::submit("Give Access", ["id"=>'createDirectp',"class"=>"btn btn-success"]) !!}

							</div>                        
                        {!! Form::close() !!}
                                              
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@endsection
  
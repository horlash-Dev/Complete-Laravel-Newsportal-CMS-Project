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
					<div class="card-body">
@if (session("r-changed"))
<div  class="alert alert-icon-right alert-info text-center text-capitalize alert-dismissible mb-2" role="alert">
  <span class="alert-icon"><i class="la la-info"></i></span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong id="" class="text-white">{{session("r-changed")}}</strong>
 
</div>
@endif 
                        {!! Form::model($user, ["route"=>["save-role",$user->username],'class'=>'form']) !!}
						@method("PUT")
					
                        <div class="form-body">
								<h4 class="form-section"><i  class="ft-settings"></i>Modify User Role  
									@foreach ($user->roles as $item)
									<em>{{$item->name}} </em>		
									@endforeach
								</h4>

								<div class="row">
									<div class="form-group col-12 mb-2">
										<label   class="text-bold-600 font-medium-2" for="projectinput5">UserName</label>
                                        {!! Form::text("username", null, ['class'=>"form-control"]) !!}
										@error('username')
										<small class="name pt-2 text-danger">{{$message}} </small>
										@enderror
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label   class="text-bold-600 font-medium-2" for="projectinput5">Email</label>
                                        {!! Form::text("email", null, ['class'=>"form-control"]) !!}
										@error('email')
										<small class="name pt-2 text-danger">{{$message}} </small>
										@enderror
									</div>
								</div>
								<div class="form-group mt-1">
									<div class="text-bold-600 font-medium-2">
									 Reset Role
									</div>
									{!! Form::select("role", $roles, $user->roles, ["id"=>"r-multiple", "multiple", 'class'=>"r-multiple form-control"]) !!}
									<small class="attach-r pt-2 text-danger"></small>
									</div>                             
                            </div>
                            <div class="form-actions text-center">                                    
                                    {!! Form::submit("Modify Role", ["class"=>"btn btn-success"]) !!}

							</div>                        
                        {!! Form::close() !!}
                                              
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@endsection
  
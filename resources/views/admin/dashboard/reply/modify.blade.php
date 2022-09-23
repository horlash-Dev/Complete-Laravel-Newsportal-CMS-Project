@extends('admin.layouts.master')
@section('title','EDIT COMMENT')
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
						@if (session("c-success"))
						<div  class="alert alert-icon-right alert-success text-center text-capitalize alert-dismissible mb-2" role="alert">
							<span class="alert-icon"><i class="la la-info"></i></span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
							<strong id="" class="text-white">{{session("c-success")}}</strong>
					   </div>
						@endif
                        {!! Form::model($comment, ["route"=>["rp-update",[$comment->username]], 'class'=>'form', "id"=>'tasrolesData',]) !!}
						@method("PUT")
						
                        <div class="form-body">
								<h4 class="form-section"><i  class="ft-settings"></i>Modify <em>Comment</em></h4>

								<div class="row">
									<div class="form-group col-12 mb-2">
										<label   class="text-bold-600 font-medium-2" for="projectinput5">Username</label>
                                        {!! Form::text("username", null, ['class'=>"form-control"]) !!}
										@error('username')
										<small class="name pt-2 text-danger">{{$message}} </small>
										@enderror
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12 mb-2">
                                        <label   class="text-bold-600 font-medium-2" for="projectinput9">Body</label>
                                        {!! Form::textarea("body", null, ["id"=>"desc-r", "class"=>"form-control"]) !!}
										@error('body')
										<small class="name pt-2 text-danger">{{$message}} </small>
										@enderror
                                        
									</div>
                                </div>                              
                            </div>
                            <div class="form-actions text-center">                                    
                                    {!! Form::submit("Modify Comment", ["id"=>'ed',"class"=>"btn btn-success"]) !!}

							</div>                        
                        {!! Form::close() !!}
                                              
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@endsection
  
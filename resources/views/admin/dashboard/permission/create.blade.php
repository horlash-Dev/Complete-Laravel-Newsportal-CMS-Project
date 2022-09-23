@extends('admin.layouts.master')
@section('title',$page_name)
@section('content')

<section id="form-action-layouts">
	<div class="row justify-content-md-center">
		<div class="col-md-8">
			
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="from-actions-top-left">Project Info</h4>
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
						<div class="card-text">
							<div style="display: none" class="alert alert-icon-right alert-success alert-dismissible mb-2" role="alert">
								<span class="alert-icon"><i class="la la-info"></i></span>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
								<strong id="success" class="text-center text-white"></strong>
                            </div>
                        </div>  
               
                        {!! Form::open(['route' => 'article.store','class'=>'form', "id"=>'takeData',"enctype"=>"multipart/form-data"]) !!}
                        
                        <div class="form-body">
								<h4 class="form-section"><i  class="ft-clipboard"></i>publish new article</h4>

								<div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput5">Title</label>
                                        {!! Form::text("title", null, ['class'=>"form-control"]) !!}
										<small class="title pt-2 text-danger"></small>
									</div>
                                </div>
								<div class="form-group mt-1">
									<div class="text-bold-600 font-medium-2">
									  Programmatic Multiple
									</div>
									<select class="select2 js-example-programmatic-multi form-control" id="programmatic-multiple"
									  multiple="multiple">
									  <optgroup label="Eastern Time Zone">
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WV">West Virginia</option>
									  </optgroup>
									</select>
								  </div>
								  <div class="btn-group btn-group-sm" role="group"
									aria-label="Programmatic setting and clearing Select2 options">
									<button type="button" class="js-programmatic-multi-clear btn btn-outline-primary">
									  Clear
									</button>
								  </div>
								
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label>Select image File to upload</label>
										<label id="projectinput8" class="file center-block">
                                            {!! Form::file("post_image", ["id"=>"file","class"=>"form-control"]) !!}
											<span class="file-custom"></span>
										</label><br>
										<small class="fileimg text-danger pt-2"></small>   
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12 mb-2">
                                        <label for="projectinput9">article Body</label>
                                        {!! Form::textarea("description", null, ["class"=>"form-control", "id"=>"field", "placeholder"=>"write an artilce..."]) !!}
										<small class="desc pt-2 text-danger"></small>   
                                        
									</div>
                                </div>                              
                            </div>
                            <div class="form-actions text-center">                                    
                                    {!! Form::submit("Publish", ["id"=>'create',"class"=>"btn btn-primary"]) !!}

							</div>                        
                        {!! Form::close() !!}
                                              
					</div>
				</div>
			</div>
		</div>
	</div>

</section>


@endsection
  
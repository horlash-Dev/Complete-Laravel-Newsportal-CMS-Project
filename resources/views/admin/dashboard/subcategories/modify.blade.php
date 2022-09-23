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
						
                        {!! Form::model($category, ['class'=>'form', "id"=>'takesub_EditcategoryData',]) !!}
						@method("PUT")
						
						{!! Form::hidden("sub_category_id", route('update-sub-category', [$category->slug])) !!}
						
                        <div class="form-body">
								<h4 class="form-section"><i  class="ft-settings"></i>Modify Category <em>{{$category->name}} </em></h4>

								<div class="row">
									<div class="form-group col-12 mb-2">
										<label   class="text-bold-600 font-medium-2" for="projectinput5">Name</label>
                                        {!! Form::text("name", null, ['class'=>"form-control"]) !!}
										<small class="name-sc pt-2 text-danger"></small>
									</div>
								</div>
								<div class="row">
									<div class="form-group col-12 mb-2">
										<label  class="text-bold-600 font-medium-2"  for="projectinput5">Category</label>
										
										{!! Form::select("parents_category", $list, null, ["id"=>"categ-sc","class"=>" selectize-select"]) !!}
										
										<small class="categ-sc pt-2 text-danger"></small>
									</div>
                                </div>
								<div class="row">
									<div class="form-group col-12 mb-2">
                                        <label  class="text-bold-600 font-medium-2" for="projectinput9">Description (Optional) </label>
                                        {!! Form::textarea("description", null, ["id"=>"desc-sc", "class"=>"form-control","placeholder"=>"permission details..."]) !!}
										<small class="desc-sc pt-2 text-danger"></small>   
                                        
									</div>
                                </div>                              
                            </div>
                            <div class="form-actions text-center">                                    
                                    {!! Form::submit("Update", ["id"=>'editsub_Category',"class"=>"btn btn-success"]) !!}

							</div>                        
                        {!! Form::close() !!}
                                              
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

@endsection
  
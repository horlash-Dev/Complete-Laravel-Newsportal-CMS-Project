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
    
						{!! Form::model($article, ["id"=>"takeDataUpdate", 'class'=>'form',"enctype"=>"multipart/form-data"]) !!}
						@method("PUT") 
						
						{!! Form::hidden("update_id", $article->slug) !!}
						                       
                        <div class="form-body">
								<h4 class="form-section"><i class="ft-clipboard"></i>Update Article</h4>

								<div class="row">
									<div class="form-group col-12 mb-2">
										<label for="projectinput5">Title</label>
                                        {!! Form::text("title", null, ['class'=>"form-control"]) !!}
										<small class="title pt-2 text-danger"></small>
									</div>
                                </div>
                                <div class="row">
									<div class="form-group col-12 mb-2">                                       
											 <label for="">Category</label>   
											 <select id="categorys"  name='categories' class="selectize-select">
												<option value="{{$value}}" selected>{{$value}}</option>									
												<optgroup label="Categories">
                                                    @foreach ($category as $record)
                                                  <option value="{{$record}}"> {{$record}}</option>
                                                 @endforeach
                                                </optgroup>
                                                <optgroup label="subCategories">
                                                    @foreach ($subcategory as $record)
                                                  <option value="{{$record}}"> {{$record}}</option>
                                                 @endforeach
                                                </optgroup>
											  </select>
										  <small class="categ text-danger pt-2"></small>
                                   </div>
								</div>
								<div class="form-group mt-1">
									<div class="text-bold-600 font-medium-2">
									 Add Tags
									</div>
									{!! Form::select("add_tags[]", $tags, $article->tags, ["id"=>"r-multi", "multiple", 'class'=>"r-multiples  form-control"]) !!}
									<small class="attach-tg pt-2 text-danger"></small>
							</div>
							
							<div class="form-group mt-1 btn-group btn-group-sm" role="group">
								<button type="button" class="js-programmatic-multi-clear btn btn-outline-primary">
								  Clear Tags
								</button><br>
							  </div>
								 <div class="row">
									<div class="form-group col-12 mb-2">
										<label class="text-bold-600 font-medium-2">Select image File to upload</label>
										<label id="projectinput8" class="file center-block">
                                            {!! Form::file("post_image", ["id"=>"file","class"=>"form-control"]) !!}
											<span class="file-custom"></span>
										</label><br>
										<small class="fileimg text-danger pt-2"></small>   
									</div>
								</div>  
								<div class="row">
									<div class="form-group col-12 mb-2">
                                        <label for="projectinput9" class="text-bold-600 font-medium-2">Article Body</label>
                                        {!! Form::textarea("description", null, ["class"=>"form-control", "id"=>"field", "placeholder"=>"write an artilce..."]) !!}
										<small class="desc pt-2 text-danger"></small>   
                                        
									</div>
                                </div>                              
                            </div>
                            <div class="form-actions text-center">                                    
                                    {!! Form::submit("Update", ["id"=>'update',"class"=>"btn btn-primary"]) !!}

							</div>                        
                        {!! Form::close() !!}
                                              
					</div>
				</div>
			</div>
		</div>
	</div>

</section>


@endsection
  
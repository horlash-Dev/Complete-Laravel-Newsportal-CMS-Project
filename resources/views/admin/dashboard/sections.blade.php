@extends('admin.layouts.master')
@section('title',$page)
@section('content')
<section id="form-action-layouts">
	<div class="row justify-content-md-center">
		<div class="col-md-11">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="from-actions-top-left">Site Settings</h4>
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
                            @if (session("s-changed"))
                            <div class="bs-callout-success mb-1 callout-border-left callout-transparent mt-1 p-1">
                                <strong>Settings Updated</strong>
                                <p>{{session("s-changed")}}</p>
                            </div>
                            @endif
                        </div>  
               
                        {!! Form::open(["route"=>['site_homepage'],"enctype" => "multipart/form-data",'class'=>'form']) !!}
						@method("PUT") 

                        <div class="form-body">
								<h4 class="form-section"><i  class="ft-settings"></i> {{$page}} </h4>
                               
                                    <div class="form-section m-2">
                                        <h2 class="text-bold-600 font-medium-2 label-control mb-1">Featured Section</h2>
                                    </div>
                                    <div class="form-group col-5">
                                        <label class="text-bold-600 font-medium-2 label-control mb-1" for="projectinput1"> Total Post</label>
                                        <div class="">
                                        
                                            {!! Form::select("featured_no", ["4"=>"4","8"=>"8","12"=>"12","16"=>"16"], $featured, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                    </div>
                                    <div class="form-section m-2">
                                        <h2 class="text-bold-600 font-medium-2 label-control mb-1">Trending Section</h2>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="row">
                                            <div class="col-sm-6 pb-2">
                                        <label class="text-bold-600 font-medium-2 label-control mb-1" for="projectinput1"> Total Post</label>
                                            {!! Form::select("trending_no", ["4"=>"4","8"=>"8","12"=>"12","16"=>"16"], $trending, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                        <div class="col-sm-6 pb-2">
                                        <label class="text-bold-600 font-medium-2 label-control mb-1" for="projectinput1"> Total Views</label>
                                            {!! Form::select("trending_view", ["16"=>"16","24"=>"24","30"=>"30"], $trending_view, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-section m-2">
                                        <h2 class="text-bold-600 font-medium-2 label-control mb-1">Category News Section</h2>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="col-sm-6 pb-2">
                                            <label class="text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Total Post</label>
                                                {!! Form::select("category_no",  ["4"=>"4","8"=>"8","12"=>"12","16"=>"16"], $category, ["class"=>"selectBox selectBox-fixed"]) !!}
                                            </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2">
                                        <label class="text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Category Field 1</label>
                                            {!! Form::select("category_1", $allcategory, $category_1, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                        <div class="col-sm-6 pb-2">
                                        <label class="text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Category Field 2</label>
                                            {!! Form::select("category_2",  $allcategory, $category_2, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                        <div class="col-sm-6 pb-2">
                                            <label class="text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Category Field 3</label>
                                                {!! Form::select("category_3",  $allcategory, $category_3, ["class"=>"selectBox selectBox-fixed"]) !!}
                                            </div>
                                            <div class="col-sm-6 pb-2">
                                                <label class="text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Category Field 4</label>
                                                    {!! Form::select("category_4", $allcategory, $category_4, ["class"=>"selectBox selectBox-fixed"]) !!}
                                                </div>
                                    </div>
                                    </div>

                                    <div class="form-section m-2">
                                        <h2 class="text-bold-600 font-medium-2 label-control mb-1">Sidebar Section</h2>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="row">
                                            <div class="col-sm-6 pb-2">
                                        <label class="text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Total Post</label>
                                            {!! Form::select("sidebar_no", ["4"=>"4","8"=>"8","12"=>"12","16"=>"16"], $sidebar_no, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                        <div class="col-sm-6 pb-2">
                                        <label class="text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Total Popular Views</label>
                                            {!! Form::select("sidebar_view", ["4"=>"4","8"=>"8","12"=>"12","16"=>"16"], $sidebar_view, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                    </div>
                                    </div>
                               
                            <div class="form-actions text-center">                                    
                                    {!! Form::submit("Save Changes", ["class"=>"btn btn-primary"]) !!}

							</div>                        
                        {!! Form::close() !!}
                                              
					</div>
				</div>
			</div>
		</div>
	</div>

</section>


@endsection
  
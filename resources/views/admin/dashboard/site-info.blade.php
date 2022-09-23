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
               
               
                        {!! Form::open(["route"=>['site_desc'],"enctype" => "multipart/form-data",'class'=>'form']) !!}
						@method("PUT") 
					
                        <div class="form-body">
								<h4 class="form-section"><i  class="ft-settings"></i>{{$page}}</h4>

								<div class="row">
									<div class="form-group col-12 mb-2">
										<label class="text-bold-600 font-medium-2" for="projectinput5">Site Title</label>
                                        {!! Form::text("name", $title->value, ['class'=>"form-control"]) !!}
										<small class="title pt-2 text-danger"></small>
									</div>
                                    <div class="form-group col-12 mb-2">
										<label class="text-bold-600 font-medium-2" for="projectinput5">Site Tagline</label>
                                        {!! Form::text("name_desc", $title2->value, ['class'=>"form-control"]) !!}
										<small class="title pt-2 text-danger"></small>
									</div>
                                    <div class="form-group col-6 mb-2">
										<label for="projectinput5" class="text-bold-600 font-medium-2">Site Favicon</label>
                                        <div class="media">
                                            <a href="javascript: void(0);">
                                                <img src="{{asset('storage/files')}}/{{$fav->image}}"
                                                    class="rounded mr-75" alt="profile image" height="64" width="64">
                                            </a>
                                            <div class="media-body mt-75">
                                                <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                    <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                        for="account-upload">Upload new icon</label>
                                                        
                                                        {!! Form::file("site_fav", ["id"=>"account-upload","hidden"]) !!}
                                                       <br>
                                                        @error('site_fav')
                                                        <small class="name pt-2 text-danger">{{$message}} </small>
                                                        @enderror
                                                </div>
                                            </div>
                                        </div>
									</div>
                                    <div class="form-group col-6 mb-2">
										<label for="projectinput5" class="text-bold-600 font-medium-2">Site Logo</label>
                                        <div class="media">
                                            <a href="javascript: void(0);">
                                                <img src="{{asset('storage/files')}}/{{$logo->image}}"
                                                    class="rounded mr-75" alt="profile image" height="64" width="64">
                                            </a>
                                            <div class="media-body mt-75">
                                                <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                    <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                        for="account-uploads">Upload new logo</label>
                                                        
                                                        {!! Form::file("site_logo", ["id"=>"account-uploads","hidden"]) !!}
                                                       <br>
                                                        @error('site_logo')
                                                        <small class="name pt-2 text-danger">{{$message}} </small>
                                                        @enderror
                                                </div>
                                            </div>
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
  
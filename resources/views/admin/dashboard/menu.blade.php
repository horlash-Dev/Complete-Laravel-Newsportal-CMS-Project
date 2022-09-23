@extends('admin.layouts.master')
@section('title',$page)
@section('content')
    <section id="horizontal-form-layouts">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="horz-layout-basic">Site Setting</h4>
                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
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
                            {!! Form::open(["route"=>['site_menu'],"enctype" => "multipart/form-data",'class'=>'form']) !!}
                            @method("PUT") 
                                <div class="form-body">
                                    <h4 class="form-section"><i class="ft-settings"></i>{{$page}} </h4>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Menu Field 1</label>
                                        <div class="col-md-9 mx-auto">
                                            {!! Form::select("menu_1", $allcategory, $menu_1, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3  text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Menu Field 2</label>
                                        <div class="col-md-9 mx-auto">
                                            {!! Form::select("menu_2", $allcategory, $menu_2, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Menu Field 3</label>
                                        <div class="col-md-9 mx-auto">
                                            {!! Form::select("menu_3", $allcategory, $menu_3, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3  text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Menu Field 4</label>
                                        <div class="col-md-9 mx-auto">
                                            {!! Form::select("menu_4", $allcategory, $menu_4, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-md-3 text-bold-600 font-medium-2 label-control mb-1" for="projectinput1">Menu Field 5</label>
                                        <div class="col-md-9 mx-auto">
                                            {!! Form::select("menu_5", $allcategory, $menu_5, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="text-bold-600 font-medium-2 col-md-3 label-control mb-1" for="projectinput1">Menu Field 6</label>
                                        <div class="col-md-9 mx-auto">
                                            {!! Form::select("menu_6", $allcategory, $menu_6, ["class"=>"selectBox selectBox-fixed"]) !!}
                                        </div>
                                    </div>
                                    
    
                                </div>
    
                                <div class="form-actions text-center">                                    
                                    {!! Form::submit("save changes", ["class"=>"btn btn-primary"]) !!}

							</div>                        
                        {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

    </section>
    
@endsection
  
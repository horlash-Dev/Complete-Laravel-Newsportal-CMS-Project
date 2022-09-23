<div class="tab-pane fade " id="account-vertical-password" role="tabpanel"
aria-labelledby="account-pill-password" aria-expanded="false">
@if (session("u-password-error"))
<div  class="alert alert-icon-right alert-warning text-center text-capitalize alert-dismissible mb-2" role="alert">
  <span class="alert-icon"><i class="la la-info"></i></span>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
  <strong id="" class="text-white">{{session("u-password-error")}}</strong>
 
</div>
@endif
{!! Form::model($user, ["route"=>["u-profile-password",$user->username],'class'=>'form',"novalidate"]) !!}
@method("PUT")
		
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-old-password">Old Password</label>
                    {!! Form::password("password_old", ["class"=>"form-control","required", "placeholder"=>"Old Password",
                    "data-validation-required-message"=>"This old password field is required"]) !!}
                    @error('password_old')
                    <small class="name pt-2 text-danger">{{$message}} </small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-new-password">New Password</label>
                         {!! Form::password("password", ["class"=>"form-control","required", "placeholder"=>"Password",
                    "data-validation-required-message"=>"The password field is required"]) !!}
                    @error('password')
                <small class="name pt-2 text-danger">{{$message}} </small>
                @enderror
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-retype-new-password">Retype New
                        Password</label>
                        {!! Form::password("password_confirmation", ["class"=>"form-control","required", "placeholder"=>"The Confirm password field",
                        "data-validation-required-message"=>"The Confirm password field is required"]) !!}
                        @error('password_confirmation')
                        <small class="name pt-2 text-danger">{{$message}} </small>
                        @enderror
                    </div>
            </div>
        </div>
        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
            {!! Form::submit("Save changes", ["class"=>"btn btn-primary mr-sm-1 mb-1 mb-sm-0"]) !!}
            <button type="reset" class="btn btn-light">Cancel</button>
        </div>
    </div>

{!! Form::close() !!}

</div>
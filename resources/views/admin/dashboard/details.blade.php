<div class="tab-pane fade" id="account-vertical-info" role="tabpanel"
aria-labelledby="account-pill-info" aria-expanded="false">

{!! Form::model($user, ["route"=>["u-profile-update-bio",$user->username],'class'=>'form',"novalidate"]) !!}
@method("PUT")
						
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label for="accountTextarea">Bio</label>
                {!! Form::textarea("bio", null, ["class"=>"form-control", "rows"=>"3","placeholder"=>"Your Bio data here..."]) !!}
            	@error('bio')
						<small class="name pt-2 text-danger">{{$message}} </small>
				@enderror
            </div>
        </div>
        <div class="col-12 skin skin-polaris">
            <div class="form-group">
            <label class="secondary px-1" for="input-radio-21"><b>Gender</b></label><br>
            {!! Form::radio("gender", "male", "", ["class"=>"px-2"]) !!}
            
            <label class="secondary px-1" for="input-radio-21">Male</label>
            {!! Form::radio("gender", "female", "", ["class"=>"p-3"]) !!}
            
            <label class="secondary" for="input-radio-21">FeMale</label>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-phone">Phone</label>
                {!! Form::text("mobile_no", null, ["class"=>"form-control","data-validation-required-message"=>"This phone number field is required", "placeholder"=>"Your Mobile Number"]) !!}
                    </div>
                    @error('mobile_no')
                    <small class="name pt-2 text-danger">{{$message}} </small>
                    @enderror
                </div>
        </div>
        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
            {!! Form::submit("Save changes", ["class"=>"btn btn-primary mr-sm-1 mb-1 mb-sm-0"]) !!}
        </div>
    </div>

{!! Form::close() !!}

</div>
<div role="tabpanel" class="tab-pane active" id="account-vertical-general"
aria-labelledby="account-pill-general" aria-expanded="true">
{!! Form::model($user, ["route"=>["u-profile-update",$user->username],"enctype" => "multipart/form-data", 'class'=>'form',"novalidate"]) !!}
@method("PUT")				
<div class="media">
    <a href="javascript: void(0);">
        @if ($user->avatar != '')
        <img src="{{asset('storage/avatar')}}/{{$user->avatar}}"
            class="rounded mr-75" alt="profile image" height="64" width="64">
            
            @else
            <img src="{{asset('storage/avatar/user.png')}}"
            class="rounded mr-75" alt="profile image" height="64" width="64">
          @endif  
    </a>
    <div class="media-body mt-75">
        <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                for="account-upload">Upload new photo</label>
                
                {!! Form::file("avatar", ["id"=>"account-upload","hidden"]) !!}
               <br>
                @error('avatar')
                <small class="name pt-2 text-danger">{{$message}} </small>
                @enderror
        </div>
        <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                size of
                800kB</small></p>
    </div>
</div>
<hr>
		
<div class="row">
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-username">Username</label>
                    {!! Form::text("username", null, ['class'=>'form-control',"required", "data-validation-required-message"=>"This username field is required"]) !!}
                    @error('username')
                    <small class="name pt-2 text-danger">{{$message}} </small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-name">Name</label>
                    {!! Form::text("fullname", null, ['class'=>'form-control']) !!}
                    @error('fullname')
                    <small class="name pt-2 text-danger">{{$message}} </small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <div class="controls">
                    <label for="account-e-mail">E-mail</label>
                    {{--  count on  me whitney houston  --}}
                    {!! Form::email("email", null, ['class'=>'form-control',"required", "data-validation-required-message"=>"This email field is required"]) !!}
                    @error('email')
                    <small class="name pt-2 text-danger">{{$message}} </small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="col-12">
            @if ($user->email_verified_at == null)
            <div class="alert alert-warning alert-dismissible mb-2" role="alert">
                <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <p class="mb-0">
                    Your email is not confirmed. Please check your inbox.
                </p>
                <a href="{{ route('verification.notice') }}">Resend confirmation</a>
            </div>                    
            @endif
        </div>
        <div class="col-12">
            <div class="form-group">
                <label for="account-company">Address</label>
                {!! Form::text("address", null, ['class'=>'form-control']) !!}
            	@error('address')
	    		<small class="name pt-2 text-danger">{{$message}} </small>
				@enderror
            </div>
        </div>
        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">                
                {!! Form::submit("Save changes", ["class"=>"btn btn-primary mr-sm-1 mb-1 mb-sm-0"]) !!}
           <button type="reset" class="btn btn-light">Cancel</button>
        </div>
    </div>

{!! Form::close() !!}

</div>
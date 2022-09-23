<div class="comment-form" id="comment-form">
    <div class="section-title mb-0">
    <h4 class="mb-0">Leave A Comment</h4>
    </div>
    <form  method="POST" id="takeDataComment" action="" class="contact-form-wrap">
    @csrf
    <div class="row">
    <input type="" style="display: none" name="comment_id" value="{{route("add-comments", $details->slug)}}">
    <div class="col-lg-6 col-md-6 col-12">
        <small  class="users pt-2 text-danger"></small>	<br>
    <div class="single-input-wrap input-group">
    <input type="text" class="form-control" name="username"  placeholder="Your Username">
    <div class="input-group-prepend">
    <div class="input-group-text"><i class="fa fa-user"></i></div>
    </div>
    </div>
    </div>
     <div class="col-12">
        <small class="body-c pt-2 text-danger"></small>	<br>
    <div class="single-input-wrap message input-group">								
    <textarea class="form-control" rows="4" name="body" id="body" placeholder="Write Message"></textarea>
    <div class="input-group-prepend">
    <div class="input-group-text"><i class="fa fa-pencil"></i></div>
    </div>
    </div>
    <div class="submit-area">
    <button type="submit" id="comments" class="comments btn btn-base">Post Comment</button>
    </div>
    </div>
    </div>
    </form>
    </div>

<div class="comment-form" id="reply-form" style="display: none">
    <div class="section-title mb-0">
    <h4 class="mb-0">Leave A reply for <strong> <i class="users-nm"></i></strong> </h4>
    </div>
    <form action="" id="takeDataReply" method="POST" class="contact-form-wrap">
        @csrf
    <div class="row">
     <div class="col-12">
        <small  class="users pt-2 text-danger"></small>	<br>
 <div class="single-input-wrap input-group">
    <input type="text" class="form-control" name="username"  placeholder="Your Username">
    <div class="input-group-prepend">
    <div class="input-group-text"><i class="fa fa-user"></i></div>
    </div>
    </div>
    <small class="body-r pt-2 text-danger"></small>	<br>
    <div class="single-input-wrap message input-group">
    {!! Form::hidden("reply_id", null, []) !!}
    <textarea class="form-control" rows="4" name="body" id="body-r" placeholder="Write Message"></textarea>
    <div class="input-group-prepend">
    <div class="input-group-text"><i class="fa fa-pencil"></i></div>
    </div>
    </div>
    <div class="submit-area">
    <button type="submit" id="replies" class="btn btn-base">Reply</button>
    </div>
    </div>
    </div>
    </form>
    </div>

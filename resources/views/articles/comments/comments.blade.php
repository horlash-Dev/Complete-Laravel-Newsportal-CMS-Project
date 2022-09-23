<div class="blog-comment">
    <div class="section-title">
    <h4>{{count($details->comments)}} Comments</h4>
    </div>
    @foreach ($details->comments as $comment)
        
    <div class="media">
        @if ($comment->createdBy != null)
    <a href="#">
    <img src="{{$comment->createdBy->Picavatar}}" alt="comment">
    </a>
    @endif
    <div class="media-body">
    <h5><a href="#" class="user-n">{{$comment->username}}</a></h5>
    <span class="date">{{$comment->created_at->diffForHumans()}}</span>
    <p>{{$comment->body}}</p>
     <a class="reply"  href="#reply-form" id="{{$comment->username}}" names="{{$comment->id}}">Reply <i class="la la-arrow-right"></i></a>
    <a href="#">Replies ({{count($comment->reply)}}) <i class=""></i></a>
    </div>
    </div>
    @include('articles.comments.replies',$comment)
    @endforeach
    </div>
    @include('articles.comments.form', $details)
  
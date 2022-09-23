
@foreach ($comment->reply as $reply)
<div class="media nesting">
    <a href="#">
    {{--  <img src="{{asset('storage/articles_img')}}/{{$reply->createdBy->avatar}}"alt="comment">  --}}

</a>
    <div class="media-body">
    <h5><a href="#">{{$reply->username}}</a></h5>
    <span class="date">{{$reply->created_at->diffForHumans()}}</span>
    <p>{{$reply->body}}</p>
    {{-- <a href="#">Reply <i class="la la-arrow-right"></i></a> --}}
    
</div>
    </div>
    @endforeach
    
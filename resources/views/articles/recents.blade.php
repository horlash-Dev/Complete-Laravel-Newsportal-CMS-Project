@if (count($details->category)  > 0)
<div class="related-post">
    <div class="section-title mb-0">
    <h5 class="mb-0">Related Post</h5>
    </div>
    <div class="row">
        @foreach ($details->category as $item)
        @foreach ($item->article_category->take(3)->shuffle() as $post)   
    <div class="col-lg-4 col-md-6">
    <div class="single-post-wrap">
    <div class="thumb">
    <img src="{{asset('storage/articles_img')}}/{{$post->mini_img}}" alt="img">
    <a class="tag-base tag-red" href="{{$item->Url}}"> {{$item->name}}</a>
    </div>
    <div class="details">
    <div class="post-meta-single">
    <ul>
    <li><i class="fa fa-clock-o"></i>{{$post->created_at->diffForHumans()}}</li>
    </ul>
    </div>
    <h6 class="title mt-2"><a href="{{$post->Url}}">{{ $post->title}}</a></h6>
    </div>
    </div>
    </div>
    @endforeach
    @endforeach
    </div>
    </div>
    
    @else
    @if (count($details->subCategory)  > 0)
    <div class="related-post">
        <div class="section-title mb-0">
        <h5 class="mb-0">Related Post</h5>
        </div>
        <div class="row justify-content-center">
            @foreach ($details->subCategory as $item)
            @foreach ($item->article_subCategory->take(3)->shuffle() as $post)   
        <div class="col-lg-4 col-md-6">
        <div class="single-post-wrap">
        <div class="thumb">
        <img src="{{asset('storage/articles_img')}}/{{$post->mini_img}}" alt="img">
        <a class="tag-base tag-red" href="{{$item->Url}}"> {{$item->name}}</a>
        </div>
        <div class="details">
        <div class="post-meta-single">
        <ul>
        <li><i class="fa fa-clock-o"></i>{{$post->created_at}}</li>
        </ul>
        </div>
        <h6 class="title mt-2"><a href="{{$post->Url}}">{{$post->title}}</a></h6>
        </div>
        </div>
        </div>
        @endforeach
        @endforeach
        </div>
        </div>
        @endif
@endif
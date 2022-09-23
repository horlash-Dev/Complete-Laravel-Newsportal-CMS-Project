

{{--  
    <div class="col-lg-3 col-md-6">
    <div class="section-title">
    <h6 class="title">Trending News</h6>
    </div>
    <div class="post-slider owl-carousel">

    <div class="item">
    <div class="trending-post">
        @foreach ($trending as $item)
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="{{asset('storage/articles_img')}}/{{$item->mini_img}}" alt="img">
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>{{$item->created_at}}</p>
    </div>
    <h6 class="title"><a href="blog-details.html">{{$item->title}}</a></h6>
    </div>
    </div>
    @endforeach
    </div>
    </div>  --}}
    


    


    {{--  <div class="item">
    <div class="trending-post">
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="assets/img/post/5.png" alt="img">
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
    </div>
    <h6 class="title"><a href="blog-details.html">The FAA will test drone </a></h6>
    </div>
    </div>
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="assets/img/post/6.png" alt="img">
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
    </div>
    <h6 class="title"><a href="blog-details.html">Flight schedule and quarantine</a></h6>
    </div>
    </div>
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="assets/img/post/7.png" alt="img">
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>December 26, 2018</p>
    </div>
    <h6 class="title"><a href="blog-details.html">Indore bags cleanest city</a></h6>
    </div>
    </div>
    </div>
    </div>  --}}
    {{--  </div>
    </div>  --}}
{{--  </div>
<div class="top-area pd-top-75 pd-bottom-50">
<div class="container">
<div class="section-title">
<div class="row">
<div class="col-6">
<h6 class="title">Top News</h6>
</div>
<div class="col-6 text-right">
<a class="btn-read-more" href="blog-details.html">See More <i class="la la-arrow-right"></i></a>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="single-post-wrap style-overlay">
<div class="thumb">
<img src="assets/img/post/34.png" alt="img">
<a class="tag-base tag-red" href="cat-tech.html">Tech</a>
</div>
<div class="details">
<div class="post-meta-single">
<ul>
<li><i class="fa fa-clock-o"></i>08.22.2020</li>
<li><i class="fa fa-user"></i>John Lambert</li>
</ul>
</div>
<h6 class="title"><a href="blog-details.html">Cloud Data Wareh ouse Startup, Files to Go </a></h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-post-wrap style-overlay">
<div class="thumb">
<img src="assets/img/post/35.png" alt="img">
<a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
</div>
<div class="details">
<div class="post-meta-single">
<ul>
<li><i class="fa fa-clock-o"></i>08.22.2020</li>
<li><i class="fa fa-user"></i>John R.bert</li>
</ul>
</div>
<h6 class="title"><a href="blog-details.html">Cloud Data Wareh ouse Startup, Files to Go </a></h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-post-wrap style-overlay">
<div class="thumb">
<img src="assets/img/post/36.png" alt="img">
<a class="tag-base tag-green" href="cat-tech.html">Tech</a>
</div>
<div class="details">
<div class="post-meta-single">
<ul>
<li><i class="fa fa-clock-o"></i>08.22.2020</li>
<li><i class="fa fa-user"></i>R. Lambert</li>
</ul>
</div>
<h6 class="title"><a href="blog-details.html">Cloud Data Wareh ouse Startup, Files to Go </a></h6>
</div>
</div>
</div>
<div class="col-lg-3 col-sm-6">
<div class="single-post-wrap style-overlay">
<div class="thumb">
<img src="assets/img/post/37.png" alt="img">
<a class="tag-base tag-purple" href="cat-tech.html">Tech</a>
</div>
<div class="details">
<div class="post-meta-single">
<ul>
<li><i class="fa fa-clock-o"></i>08.22.2020</li>
<li><i class="fa fa-user"></i>John Lambert</li>
</ul>
</div>
<h6 class="title"><a href="blog-details.html">Cloud Data Wareh ouse Startup, Files to Go </a></h6>
</div>
</div>
</div>
</div>
</div>
</div>

    <div class="col-lg-6 col-sm-6">
        <div class="section-title style-two mb-4">
        <h6 class="title">Latest News</h6>
        </div>
        @foreach ($trending_list as $item)
        <div class="single-post-list-wrap">
        <div class="media">
        <div class="media-left">
        <img  src="{{asset('storage/articles_img')}}/{{$item->thumb_img}}" alt="img">
        </div>
        <div class="media-body">
        <div class="details">
        <div class="post-meta-single">
        <ul>
        <li><i class="fa fa-clock-o"></i>{{$item->created_at}}</li>
        </ul>
        </div>
        <h6 class="title"><a href="{{$item->Url}}">{{$item->title}}</a></h6>
        </div>
        </div>
        </div>
        </div>
        @endforeach
 
        </div>
    @include('homepage.home.category_trend_list',['list' => $trending])
    @include('homepage.shared.trend_social')

     --}}
 
        <div class="container">
        <div class="section-title">
        <div class="row">
        <div class="col-6">
        <h6 class="title text-capitalize">{{$trend}}</h6>
        </div>
        </div>
        </div>
        <div class="row">
            @foreach ($post_data as $item)
        <div class="col-lg-3 col-sm-6">
        <div class="single-post-wrap">
        <div class="thumb">
        <img width="600" src="{{asset('storage/articles_img')}}/{{$item->mini_img}}" alt="img">
        @if (count($item->category) > 0)
        @foreach ($item->category as $items)
      <a class="tag-base tag-blue" href="{{$items->Url}}">{{$items->name}}</a>
      @endforeach
      @else
      @foreach ($item->subCategory as $items)
      <a class="tag-base tag-red" href="{{$items->Url}}">{{$items->name}}</a>
      @endforeach
      @endif
        </div>
        <div class="details">
        <div class="post-meta-single">
        <ul>
        <li><i class="fa fa-clock-o"></i>{{$item->created_at->diffForHumans()}}</li>
        </ul>
        </div>
        <h6 class="title"><a href="{{$item->Url}}">{{ $item->title }} </a></h6>
        </div>
        </div>
        </div>
        @endforeach
        </div>
        </div>
        
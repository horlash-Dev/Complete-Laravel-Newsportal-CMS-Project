
    <div class="container">
    <div class="section-title style-white pb-3 text-center">
    <h3 class="title text-capitalize">{{$trend2}}</h3>
    </div>
    <div class="most-view-slider owl-carousel owl-theme">
        @foreach ($featured as $item)
    <div class="item">
    <div class="single-most-view-inner">
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img  src="{{asset('storage/articles_img')}}/{{$item->mini_img}}"  alt="img">
     </div>
    <div class="details">
    <div class="post-meta-single">
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
    <h6 class="title"><a href="{{$item->Url}}">{{$item->title}} </a></h6>
    <div class="post-meta-single mb-0">
    <ul>
    <li>{{$item->created_at->diffForHumans()}}</li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </div>
    @endforeach

    </div>
    </div>

{{--  
    <div class="col-lg-3 col-sm-6">
        {{$featured}}
    <div class="single-post-wrap style-overlay-bg">
    <div class="thumb">
    <img src="assets/img/post/9.png" alt="img">
    </div>
    <div class="details">
    <div class="post-meta-single mb-3">
    <ul>
    <li><a class="tag-base tag-blue" href="cat-fashion.html">fashion</a></li>
    <li><p><i class="fa fa-clock-o"></i>08.22.2020</p></li>
    </ul>
    </div>
    <h6 class="title"><a href="blog-details.html">A Comparison of the Sony FE 85mm f/1.4 GM and Sigma</a></h6>
    </div>
    </div>
    </div>  --}}
    {{--  @foreach ($featured as $item)
    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap">
    <div class="thumb">
    <img src="{{asset('storage/articles_img')}}/{{$item->mini_img}}" alt="img">
    <p class="btn-date"><i class="fa fa-clock-o"></i> {{$item->created_at}}</p>
    </div>
    <div class="details">
    <h6 class="title"><a href="{{$item->Url}}"> {{$item->title}}</a></h6>
    </div>
    </div>
    </div>
    @endforeach  --}}

    {{--  <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap">
    <div class="thumb">
    <img src="assets/img/post/12.png" alt="img">
    <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2020</p>
    </div>
    <div class="details">
    <h6 class="title"><a href="blog-details.html">Bitmex Restricts Ontario Residents as Mandated by</a></h6>
    </div>
    </div>
    <div class="single-post-wrap">
    <div class="thumb">
    <img src="assets/img/post/13.png" alt="img">
    <p class="btn-date"><i class="fa fa-clock-o"></i>08.22.2020</p>
    </div>
    <div class="details">
    <h6 class="title"><a href="blog-details.html">The Bitcoin Network Now 7 Plants Worth of Power</a></h6>
    </div>
    </div>
    </div>  --}}
    {{--  @include('homepage.shared.trend_sidebar')   --}}

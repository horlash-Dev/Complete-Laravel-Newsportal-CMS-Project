{{--    
      @foreach ($category_sort as $category)
      @foreach ($category->article_category->take(4) as $details)  
    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="{{asset('storage/articles_img')}}/{{$details->mini_img}}" alt="img">
    <a class="tag-base tag-purple" href="{{$category->Url}}">{{$category->name}}</a>
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>{{$details->created_at}}</p>
    </div>
    <h6 class="title"><a href="{{$details->Url}}">{{$details->title}} </a></h6>
    </div>
    </div>
    </div>
    @endforeach
    @endforeach  --}}
{{--  

    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="assets/img/post/16.png" alt="img">
    <a class="tag-base tag-green" href="cat-tech.html">Tech</a>
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>08.22.2020</p>
    </div>
    <h6 class="title"><a href="blog-details.html">People Who Eat a Late Dinner May</a></h6>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="assets/img/post/17.png" alt="img">
    <a class="tag-base tag-red" href="cat-tech.html">Tech</a>
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>08.22.2020</p>
    </div>
    <h6 class="title"><a href="blog-details.html">Kids eat more calories in </a></h6>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="assets/img/post/18.png" alt="img">
    <a class="tag-base tag-purple" href="cat-tech.html">Tech</a>
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>08.22.2020</p>
    </div>
    <h6 class="title"><a href="blog-details.html">The FAA will test drone </a></h6>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="assets/img/post/19.png" alt="img">
    <a class="tag-base tag-red" href="cat-tech.html">Tech</a>
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>08.22.2020</p>
    </div>
    <h6 class="title"><a href="blog-details.html">Lifting Weights Makes Your Nervous</a></h6>
    </div>
    </div>
     </div>
    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="assets/img/post/20.png" alt="img">
    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>08.22.2020</p>
    </div>
    <h6 class="title"><a href="blog-details.html">New, Remote Weight-Loss Method </a></h6>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="assets/img/post/21.png" alt="img">
    <a class="tag-base tag-light-green" href="cat-tech.html">Tech</a>
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>08.22.2020</p>
    </div>
    <h6 class="title"><a href="blog-details.html">Social Connection Boosts Fitness App </a></h6>
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="assets/img/post/22.png" alt="img">
    <a class="tag-base tag-blue" href="cat-tech.html">Tech</a>
    </div>
    <div class="details">
    <div class="post-meta-single">
    <p><i class="fa fa-clock-o"></i>08.22.2020</p>
    </div>
    <h6 class="title"><a href="blog-details.html">Internet For Things - New results </a></h6>
    </div>
    </div>
    </div>  --}}
   {{--  {{$category_sort_1}}
   {{$category_sort_2}}
   {{$category_sort_3}}
   {{$category_sort_4}}  --}}
   
   {{--  @foreach ($category_sort_1 as $item)
       {{$item->name}}
       {{$item->category}}
   @endforeach  --}}
    <div class="container">
      <div class="row">
      <div class="col-lg-8 pd-top-80">
      <div class="how-news">
      <div class="section-title style-two mb-3">
      <div class="nxp-tab-inner nxp-tab-post style-two">
      <ul class="nav nav-tabs" id="ex1" role="tablist">
      <li class="nav-item" role="presentation">
      <a class="nav-link active text-capitalize" id="ex1-tab-1" data-toggle="pill" href="#ex1-tabs-1" role="tab" aria-selected="true">
        {{$category_sort_1_name}}
      </a>
      </li>
      <li class="nav-item" role="presentation">
      <a class="nav-link text-capitalize" id="ex1-tab-2" data-toggle="pill" href="#ex1-tabs-2" role="tab" aria-selected="false">
        {{$category_sort_2_name}}
      </a>
      </li>
      <li class="nav-item" role="presentation">
      <a class="nav-link text-capitalize" id="ex1-tab-3" data-toggle="pill" href="#ex1-tabs-3" role="tab" aria-selected="false">
        {{$category_sort_3_name}}
      </a>
      </li>
      <li class="nav-item" role="presentation">
      <a class="nav-link text-capitalize" id="ex1-tab-4" data-toggle="pill" href="#ex1-tabs-4" role="tab" aria-selected="false">
        {{$category_sort_4_name}}
      </a>
      </li>
      </ul>
      </div>
      </div>
      <div class="tab-content nxp-tab-content-2" id="ex1-content">
      <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel">
        @foreach ($category_sort_1 as $item)
     <div class="single-post-list-wrap style-two">
      <div class="media">
      <div class="media-left">
      <img src="{{asset('storage/articles_img')}}/{{$item->thumb_img}}"  alt="img">
      </div>
      <div class="media-body align-self-center">
      <div class="details">
      <h6 class="title"><a href="{{$item->Url}}">{{$item->title}}</a></h6>
      <div class="post-meta-single">
      <ul>
      <li><span>By</span> <b>{{$item->createdBy->username}}</b> </li>
      <li>{{$item->created_at->diffForHumans()}}</li>
      </ul>
      </div>
      <p>{{ Str::words(strip_tags($item->description),50)  }}</p>
      </div>
      </div>
      </div>
      </div>
      @endforeach
      </div>
      <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel">
        @foreach ($category_sort_2 as $item)
        <div class="single-post-list-wrap style-two">
         <div class="media">
         <div class="media-left">
         <img src="{{asset('storage/articles_img')}}/{{$item->thumb_img}}"  alt="img">
         </div>
         <div class="media-body align-self-center">
         <div class="details">
         <h6 class="title"><a href="{{$item->Url}}">{{$item->title}}</a></h6>
         <div class="post-meta-single">
         <ul>
         <li><span>By</span> <b>{{$item->createdBy->username}}</b> </li>
         <li>{{$item->created_at->diffForHumans()}}</li>
         </ul>
         </div>
         <p>{{ Str::words(strip_tags($item->description),50)  }}</p>
         </div>
         </div>
         </div>
         </div>
         @endforeach   
      </div>

      <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel">
        @foreach ($category_sort_3 as $item)
        <div class="single-post-list-wrap style-two">
         <div class="media">
         <div class="media-left">
         <img src="{{asset('storage/articles_img')}}/{{$item->thumb_img}}"  alt="img">
         </div>
         <div class="media-body align-self-center">
         <div class="details">
         <h6 class="title"><a href="{{$item->Url}}">{{$item->title}}</a></h6>
         <div class="post-meta-single">
         <ul>
         <li><span>By</span> <b>{{$item->createdBy->username}}</b> </li>
         <li>{{$item->created_at->diffForHumans()}}</li>
         </ul>
         </div>
         <p>{{ Str::words(strip_tags($item->description),50)  }}</p>
         </div>
         </div>
         </div>
         </div>
         @endforeach   
      </div>
      <div class="tab-pane fade" id="ex1-tabs-4" role="tabpanel">
        @foreach ($category_sort_4 as $item)
        <div class="single-post-list-wrap style-two">
         <div class="media">
         <div class="media-left">
         <img src="{{asset('storage/articles_img')}}/{{$item->thumb_img}}"  alt="img">
         </div>
         <div class="media-body align-self-center">
         <div class="details">
         <h6 class="title"><a href="{{$item->Url}}">{{$item->titile}}</a></h6>
         <div class="post-meta-single">
         <ul>
         <li><span>By</span> <b>{{$item->createdBy->username}}</b> </li>
         <li>{{$item->created_at->diffForHumans()}}</li>
         </ul>
         </div>
         <p>{{ Str::words(strip_tags($item->description),50)  }}</p>
         </div>
         </div>
         </div>
         </div>
         @endforeach   
      </div>
      </div>
      </div>
      </div>
      
      <div class="col-lg-4 pd-top-80">
      <div class="category-sitebar">
      {{-- <div class="widget">
      <form class="single-newsletter-inner bg-black">
      <h5>Newsletter</h5>
      <p>Stay Updated on all thats new add noteworthy</p>
      <div class="single-input-inner">
      <input type="text" placeholder="Enter Your Email">
      </div>
      <a class="btn btn-white w-100" href="#">Subscribe Now</a>
      </form>
      </div> --}}
      @include('homepage.shared.mega_sidebar')
      </div>
      </div>
      </div>
      </div>


    <div class="col-lg-9 pd-top-50">
    <div class="blog-details-page-inner">
    <div class="single-blog-inner m-0">
    <div class="single-post-wrap style-overlay">
    <div class="thumb">
    <img src="{{asset('storage/articles_img')}}/{{$details->main_img}}" alt="img">
    </div>

    <div class="details pb-4">
    <div class="post-meta-single mb-2">
    <ul>
        @if (count($details->category) > 0)
        @foreach ($details->category as $item)
        <li><a class="tag-base tag-blue" href="{{$item->Url}}">{{$item->name}}</a></li>
     @endforeach 
        @elseif(count($details->subCategory) > 0)
        @foreach ($details->subCategory as $item)
        <li><a class="tag-base tag-red" href="{{$item->Url}}">{{$item->name}}</a></li>
     @endforeach 
        @endif
    <li><p><i class="fa fa-clock-o"></i>{{$details->created_at->toFormattedDateString() . " " .$details->created_at->format('h:i A')}}</p></li>
    @if ($details->createdBy != null)
    <li><i class="fa fa-user"></i><a href="{{$details->createdBy->Url}}">{{$details->createdBy->username ?? null}}</a></li>    
    @endif
    </ul>
    </div>
    <h5 class="title mt-0">{{$details->title}}</h5>
    </div>
    </div>
    <div class="single-blog-details">
        
    {!! $details->description !!}
    {{-- <blockquote class="blockquote">
    <i class="fa fa-quote-right"></i>
    <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco laboris nisi ut aliquip ex ea commodo. Duis aute irure dolor in in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non </p>
    </blockquote> --}}
    </div>
    

   {{-- <div class="row">
    <div class="col-sm-6">
    <div class="thumb mb-3 mb-sm-0">
    <img src="assets/img/blog/5.png" alt="img">
    </div>
    </div>
    <div class="col-sm-6">
    <img src="assets/img/blog/6.png" alt="img">
    </div>
    </div> --}}
    @if (count($details->tags) > 0)
    <div class="meta">
        <div class="row">
        <div class="col-lg-5">
        <div class="tags">
        <span>Tags:</span>
        @foreach ($details->tags as $item)
        <a href="{{route("tags", $item->slug)}}" class="tag-base tag-red">{{$item->name}}</a>
        @endforeach
        </div>
        </div>
        </div>
        </div>        
    @endif
    </div>
    {{-- @endforeach --}}

    @include('articles.recents',$details)
    @include('articles.comments.comments',$details)
    </div>
    </div>
    <div class="col-lg-3 pd-top-50">
    <div class="category-sitebar">
        @include('homepage.shared.categories') 
    @include('homepage.shared.mega_sidebar')

    </div>
    </div>

   {{-- @include('homepage.partials.breadcrumb')

    @include('homepage.shared.tags')
  
        @include('homepage.shared.paginate')
  
        @include('homepage.shared.mega_sidebar')
        @include('homepage.shared.trend_social')



    
    @include('homepage.shared.category_sidebar') --}}

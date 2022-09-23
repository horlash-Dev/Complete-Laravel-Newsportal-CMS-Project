<div class="banner-area banner-inner-3">
  <div class="container-fluid">
  <div class="row custom-gutters-20">
    @foreach ($banners as $banner_news)
      <div class="col-lg-5">
        <div class="single-post-wrap style-overlay-bg">
        <div class="thumb">
          <img src="{{asset('storage/articles_img')}}/{{$banner_news->banner_img}}" alt="img">
        </div>
        <div class="details">
         <div class="post-meta-single mb-3">
        <ul>
          @if (count($banner_news->category) > 0)
          @foreach ($banner_news->category as $item)
        <li><a class="tag-base tag-blue" href="{{$item->Url}}">{{$item->name}}</a></li>
        @endforeach
        @else
        @foreach ($banner_news->subCategory as $item)
        <li><a class="tag-base tag-blue" href="{{$item->Url}}">{{$item->name}}</a></li>
        @endforeach
        @endif
        <li class="date"><i class="fa fa-clock-o"></i>{{$banner_news->created_at}} </li>
        <li><p> - {{$banner_news->views_count}} Views</p></li>  
      </ul>
        </div>
        <h5 class="title"><a href="{{$banner_news->Url}}">{{$banner_news->title}}</a></h5>
        <div class="media author-meta mt-2">
        <div class="media-left mr-2">
        <img src="assets/img/banner/01.png" alt="img">
        </div>
        <div class="media-body align-self-center">
        <p class="m-0"><span>{{$banner_news->createdBy->username}}</span> - {{$banner_news->created_at}}</p>
        </div>
        </div>
        </div>
        </div>
        </div>
        @endforeach
    
        @foreach ($hotnews as $banner_list)
        <div class="col-lg-3 col-sm-7">
          <div class="single-post-wrap style-overlay">
          <div class="thumb">
            <img src="{{asset('storage/articles_img')}}/{{$banner_list->mini_img}}" alt="img">
          </div>
          <div class="details">
          <div class="post-meta-single">
            @if (count($banner_list->category) > 0)
            @foreach ($banner_list->category as $item)
            <a class="tag-base tag-blue" href="{{$item->Url}}">{{$item->name}}</a>
            @endforeach 
            @elseif(count($banner_list->subCategory) > 0)
            @foreach ($banner_list->subCategory as $item)
            <a class="tag-base tag-blue" href="{{$item->Url}}">{{$item->name}}</a>
            @endforeach 
            @endif
          </div>
          <h6 class="title"><a href="{{route('article.show',$banner_list->slug)}}">{{$banner_list->title}}</a></h6>
          <p class="mt-0">By {{$banner_news->createdBy->username}}</p>
          </div>
          </div>
          </div>
          @endforeach
   
      </div>
      </div>
      </div> 
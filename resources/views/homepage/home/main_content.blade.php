{{--  
    <div class="section-title">
    <div class="row">
    <div class="col-md-3 mb-2 mb-md-0">
    <h6 class="title">Trending News</h6>
    </div>
    <div class="col-md-9">
    <div class="nxp-tab-inner nxp-tab-post text-md-right">
    <ul class="nav nav-tabs" id="enx1" role="tablist">
    <li class="nav-item" role="presentation">
    <a class="nav-link active" id="enx1-tab-1" data-toggle="pill" href="#enx1-tabs-1" role="tab" aria-selected="true">
    Entertainment
    </a>
    </li>
    <li class="nav-item" role="presentation">
    <a class="nav-link" id="enx1-tab-2" data-toggle="pill" href="#enx1-tabs-2" role="tab" aria-selected="false">
    Politics
    </a>
    </li>
    <li class="nav-item" role="presentation">
    <a class="nav-link" id="enx1-tab-3" data-toggle="pill" href="#enx1-tabs-3" role="tab" aria-selected="false">
    Fashion
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>

    <div class="tab-content" id="enx1-content">
    <div class="tab-pane fade show active" id="enx1-tabs-1" role="tabpanel">
    <div class="row">
        @foreach ($category_news1 as $item)
        @foreach ($item->article_category->take(8) as $item_news)          
    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap">
    <div class="thumb">
    <img src="{{asset('storage/articles_img')}}/{{$item_news->mini_img}}" alt="img">
    <a class="tag-base tag-light-green" href="{{$item->Url}}">{{$item->name}}</a>
    </div>
    <div class="details">
    <div class="post-meta-single mb-3">
    <ul>
    <li><i class="fa fa-clock-o"></i>{{$item_news->created_at}}</li>
    </ul>
    </div>
    <h6><a href="{{$item_news->Url}}">{{$item_news->title}} </a></h6>
    <p>{{$item_news->description}}</p>
    </div>
    </div>
    </div>
        @endforeach
        @endforeach
    </div>
    </div>

    <div class="tab-pane fade" id="enx1-tabs-2" role="tabpanel">
    <div class="row">
        @foreach ($category_news2 as $item)
        @foreach ($item->article_category->take(8) as $item_news) 
    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap">
    <div class="thumb">
        <img src="{{asset('storage/articles_img')}}/{{$item_news->mini_img}}" alt="img">
    <a class="tag-base tag-blue" href="{{$item->Url}}">{{$item->name}}</a>
    </div>
    <div class="details">
    <div class="post-meta-single mb-3">
    <ul>
    <li><i class="fa fa-clock-o"></i>{{$item_news->created_at}}</li>
    </ul>
    </div>
    <h6><a href="{{$item_news->Url}}">{{$item_news->title}}</a></h6>
    <p>{{$item_news->description}}</p>
    </div>
    </div>
    </div>
        @endforeach
        @endforeach
    </div>
    </div>

    <div class="tab-pane fade" id="enx1-tabs-3" role="tabpanel">
    <div class="row">
        @foreach ($category_news3 as $item)
        @foreach ($item->article_category->take(8) as $item_news) 
    <div class="col-lg-3 col-sm-6">
    <div class="single-post-wrap">
    <div class="thumb">
        <img src="{{asset('storage/articles_img')}}/{{$item_news->mini_img}}" alt="img">
    <a class="tag-base tag-light-green" href="{{$item->Url}}">{{$item->name}}</a>
    </div>
    <div class="details">
    <div class="post-meta-single mb-3">
    <ul>
    <li><i class="fa fa-clock-o"></i> {{$item_news->created_at}} </li>
    </ul>
    </div>
    <h6><a href="{{$item_news->Url}}">{{$item_news->title}}</a></h6>
    <p>{{$item_news->description}}</p>
    </div>
    </div>
    </div>
    @endforeach
    @endforeach
    </div>
    </div>

    </div>  --}}
    
    

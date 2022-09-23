<!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ config('app.name', $title) }} | {{ $desc }} </title>

        <link rel=icon href="{{ asset('storage/files')}}/{{$favicon->image }}" sizes="20x20" type="image/png">
        @include('template.top')
        </head>
<body>

<div class="preloader" id="preloader">
<div class="preloader-inner">
<div class="spinner">
<div class="dot1"></div>
<div class="dot2"></div>
</div>
</div>
</div>
@include('homepage.partials.search')
<div class="body-overlay" id="body-overlay"></div>
@include('template.header')
{{--  <div class="banner-area banner-inner-1 bg-black">
        @yield('banner-content')
</div>  --}}

<div class="top-area pd-top-75 pd-bottom-50">
        @yield('trending')
    </div>

    <div class="most-view-news bg-black pd-top-75 pd-bottom-80">
            @yield('featured')
    </div>

<div class="news-area pd-bottom-50">
@yield('content_news')
</div>


{{--  <div class="tranding-area pd-top-75 pd-bottom-50">
    <div class="container">
        @yield('main_content')
    </div>
</div>  --}}

<div class="tag-area pd-bottom-70">
        @yield('news_scroll')
</div>



@include('template.footer')
<div class="back-to-top">
    <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    
@include('template.bottom')
</body>
</html>

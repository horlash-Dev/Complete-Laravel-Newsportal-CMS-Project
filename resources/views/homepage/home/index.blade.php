@extends('layouts.parent')

{{--  @section('banner-content')
@include('homepage.home.banner-content',['hotnews'=>$post_data,'banners'=>$banner])
@endsection  --}}

@section('trending')
@include('homepage.home.trending',$post_data)
@endsection

@section('featured')
@include('homepage.home.featured',$featured)
@endsection

@section('content_news')
@include('homepage.home.content_news',$category_sort_1)
@endsection

 @section('news_scroll')
@include('homepage.shared.news_scroll')
@endsection

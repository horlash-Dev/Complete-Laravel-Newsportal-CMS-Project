
@extends('layouts.article_layout')
@section('title', $article->title ?? null)
@section('main_content')
<div class="blog-page-area pd-bottom-80">
    <div class="container">
    <div class="row">
@include('articles.details_view',["details" => $article])    
</div></div></div>

@endsection
   







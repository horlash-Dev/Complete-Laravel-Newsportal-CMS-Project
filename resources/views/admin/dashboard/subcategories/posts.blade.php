@extends('admin.layouts.master')
@section('title',$page)
@section('content')
<section id="mobile-support">
	<div class="row">
	  <div class="col-12">
		<div class="card">
		  <div class="card-header">
			<h4 class="card-title"></h4>
			<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
			<div class="heading-elements">
			  <ul class="list-inline mb-0">
				<li><a data-action="collapse"><i class="ft-minus"></i></a></li>

				<li><a data-action="close"><i class="ft-x"></i></a></li>
			  </ul>
			</div>
		  </div>
		  <div class="card-content collapse show">
			<div class="card-body card-dashboard">
			  <p class="card-text">
				 All <b> {{$page}}</b> related articles
			  </p>
			  <table class="table table-striped table-bordered  responsive dataex-rowre-mobilesupport">
				<thead>
				  <tr>
					<th>#</th>
					<th>image</th>
					<th>title</th>
                    <th>Description</th>
                    <th>action</th>
				  </tr>
				</thead>
				<tbody>
					@foreach ($posts  as $i => $category)
					
					<tr>
						<td>{{++$i}} </td>
						<td>    <img width="60" src="{{asset('storage/articles_img')}}/{{$category->thumb_img}}" alt="img"></td>
						<td class="text-left">
							{{$category->title}}
							
                        </td>
                        <td class="text-left">{{Str::words(strip_tags($category->description),50)}}</td>
                        <td>
                            <a target="_blank" href="{{route("article.show", [$category->slug])}}" class="btn  px-2 btn-info  mr-1 ">view post</a>
							
                        </td>
					  </tr>
					  @endforeach
				</tbody>
				<tfoot>
				  <tr>
					<th>#</th>
                    <th>image</th>
                    <th>title</th>
                    <th>Description</th>
                    <th>action</th>
				  </tr>
				</tfoot>
			  </table>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  
@endsection
  
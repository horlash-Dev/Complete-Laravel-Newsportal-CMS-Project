@extends('admin.layouts.master')
@section('title','Dashboard')
@section('content')
@can('master admin')
	<div class="row">
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<div class="media d-flex">
							<div class="media-body text-left">
								<h3 class="success" id="userall">{{$auts}}</h3>
								<h6>Authors</h6>
							</div>
							<div>
								<i class="ft-users success font-large-2 float-right"></i>
							</div>
						</div>
						<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
							<div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: {{$auts}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<div class="media d-flex">
							<div class="media-body text-left">
								<h3 class="primary" id="vpost">{{$appr_art}}</h3>
								<h6>Published Articles</h6>
							</div>
							<div>
								<i class="ft-trending-up primary font-large-2 float-right"></i>
							</div>
						</div>
						<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
							<div class="progress-bar bg-gradient-x-primary" role="progressbar" style="width: {{$appr_art}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<div class="media d-flex">
							<div class="media-body text-left">
								<h3 class="secondary" id="upost">{{$unppr_art}}</h3>
								<h6>Pending Articles</h6>
							</div>
							<div>
								<i class="ft-trending-down secondary font-large-2 float-right"></i>
							</div>
						</div>
						<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
							<div class="progress-bar bg-gradient-x-secondary" role="progressbar" style="width: {{$unppr_art}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<div class="media d-flex">
							<div class="media-body text-left">
								<h3 class="primary">{{$appr_com}}</h3>
								<h6>Published User Comments</h6>
							</div>
							<div>
								<i class="ft-bar-chart primary font-large-2 float-right"></i>
							</div>
						</div>
						<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
							<div class="progress-bar bg-gradient-x-primary" role="progressbar" style="width: {{$appr_com}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-12">
			<div class="card pull-up">
				<div class="card-content">
					<div class="card-body">
						<div class="media d-flex">
							<div class="media-body text-left">
								<h3 class="danger">{{$unppr_com}}</h3>
								<h6>Pending User Comments</h6>
							</div>
							<div>
								<i class="ft-bar-chart-2 danger font-large-2 float-right"></i>
							</div>
						</div>
						<div class="progress progress-sm mt-1 mb-0 box-shadow-2">
							<div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: {{$unppr_com}}%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	@endcan
	<div class="row">
		<div id="recent-sales" class="col-12 col-md-8">
			<div class="card">
			  <div class="card-header">
				<h4 class="card-title">Recent Comments</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
				  <ul class="list-inline mb-0">
					<li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="{{url('is_admin/comments')}}"
						target="_blank">View all</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="card-content mt-1">
				<div class="table-responsive">
				  <table id="recent-orders" class="table table-hover table-xl mb-0">
					<thead>
					  <tr>
						<th class="border-top-0">Comments</th>
						<th class="border-top-0">Username</th>
					  </tr>
					</thead>
					<tbody>
						@foreach ($rec_com as $post)
							
					  <tr>
						<td class="text-truncate">{{$post->body}}</td>
						<td class="text-truncate">{{ $post->username ?? null}}</td>
					  </tr>
					  @endforeach
					</tbody>
				  </table>
				</div>
			  </div>
			</div>
		  </div>
		  @can('master admin')
		  <div class="col-12 col-md-4">
			<div class="card">
			  <div class="card-header">
				<h4 class="card-title">Emails</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
				  <ul class="list-inline mb-0">
					<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
				  </ul>
				  
				</div>
			  </div>
			  <div class="card-content collapse show">
				<div class="card-body pt-0">
				  <p class="pt-1">Unverified Emails <span class="float-right"><span class="text-bold-600" id="auts_em">{{$auts_mail}}</span>/{{$auts}}</span>
				  </p>
				  <div class="progress progress-sm mt-1 mb-0 box-shadow-1">
					<div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: {{$auts_mail}}%" aria-valuenow="48"
					  aria-valuemin="0" aria-valuemax="100"></div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  @endcan
	  </div>

	  <div class="row">
		<div id="recent-sales" class="col-12 col-md-12">
			<div class="card">
			  <div class="card-header">
				<h4 class="card-title">Recent Articles</h4>
				<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
				<div class="heading-elements">
				  <ul class="list-inline mb-0">
					<li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="{{url('is_admin/all/articles')}}"
						target="_blank">View all</a></li>
				  </ul>
				</div>
			  </div>
			  <div class="card-content mt-1">
				<div class="table-responsive">
				  <table id="recent-orders" class="table table-hover table-xl mb-0">
					<thead>
					  <tr>
						<th class="border-top-0">Title</th>
						<th class="border-top-0">Author</th>
						@can('master admin')
						<th class="border-top-0">Action</th>
					@endcan	
					  </tr>
					</thead>
					<tbody>
						@foreach ($rec_art as $post)
							
					  <tr>
						<td class="text-truncate">{{$post->title}}</td>
						<td class="text-truncate">{{ $post->createdBy->username ?? null}}</td>
						@can('master admin')
							<td class="text-center">
								
								{!! Form::open(["route" => ["check-post-status", [$post->slug]],'class'=>'form']) !!}
								@method("PUT")
								@if ($post->status != 1)
								{!! Form::submit("Publish", ["class"=>"btn px-2 btn btn-sm btn-outline-success round box-shadow-1 mr-1"]) !!}
									@else
									{!! Form::submit("UNPUBLISH", ["class"=>" px-2 btn btn-sm btn-outline-danger round box-shadow-1 mr-1 "]) !!}
								@endif
								{!! Form::close() !!}
							</td>
						@endcan
					  </tr>
					  @endforeach
					</tbody>
				  </table>
				</div>
			  </div>
			</div>
		  </div>
	  </div>
	  @can('master admin')
	  <section id="chartjs-pie-charts">
		<div class="row">
	
			<div class="col-md-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">System Activity Charts</h4>
						<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
						<div class="heading-elements">
							<ul class="list-inline mb-0">
								<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
								<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
								<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
								<li><a data-action="close"><i class="ft-x"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="card-content collapse show">
						<div class="card-body">
							<canvas id="simple-doughnut-chart" height="400"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	
	</section>
	@endcan
@endsection
@extends('admin.layouts.master')
@section('title',$page_name)
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
				 <b> {{$page}}</b> category
			  </p>
			  <table class="table table-striped table-bordered  responsive dataex-rowre-mobilesupport">
				<thead>
				  <tr>
					<th>title</th>
                    <th>Description</th>
				  </tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-left">
							{{$posts->name}}
							
                        </td>
                        <td class="text-left">{{$posts->description}}</td>
					  </tr>
				</tbody>
				<tfoot>
				  <tr>
                    <th>title</th>
                    <th>Description</th>
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
  
@extends('layouts.admin')

@section('css')
<style type="text/css">
	.btn-container {
		/*background-color: yellow;*/
		padding: 20px;
		text-align: center;
	}
	.table {
		text-align: center;
	}
</style>
@endsection

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="true">Overview</button>
	</li>
	<li class="nav-item" role="presentation">
		<button class="nav-link active" id="services-tab" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">Services</button>
	</li>
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="projects-tab" data-bs-toggle="tab" data-bs-target="#projects" type="button" role="tab" aria-controls="projects" aria-selected="false">Projects</button>
	</li>
	<li class="nav-item" role="presentation">
		<button class="nav-link" id="careers-tab" data-bs-toggle="tab" data-bs-target="#careers" type="button" role="tab" aria-controls="careers" aria-selected="false">Careers</button>
	</li>
</ul>
<div class="tab-content" id="myTabContent">
	<div class="tab-pane fade" id="overview" role="tabpanel" aria-labelledby="overview-tab">
		...a
	</div>
	<div class="tab-pane fade show active" id="services" role="tabpanel" aria-labelledby="services-tab">

		<div class="btn-container">
			<a class="btn btn-primary" href="{{ route('admin.services.create') }}" role="button">+ Add a Service</a>
		</div>

		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Title</th>
					<th scope="col">Slug</th>
					<th scope="col">Icon</th>
					<th scope="col">Icon Text</th>
					<th scope="col">Published</th>
					<th scope="col">View</th>
					<th scope="col">Edit</th>
				</tr>
			</thead>
			<tbody>
				@foreach($services as $service)
					<tr>
						<th scope="row">1</th>
						<td>{{$service->title}}</td>
						<td>{{$service->slug}}</td>
						<td><a class="{{$service->icon}}"></a></td>
						<td>{{$service->icon}}</td>
						<td>{{$service->available}}</td>
						<td><a class="btn btn-outline-primary btn-sm" href="/services/{{$service->slug}}" role="button">View</a></td>
						<td><a class="btn btn-outline-primary btn-sm" href="/admin/services/{{$service->id}}/edit" role="button">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<div class="tab-pane fade" id="projects" role="tabpanel" aria-labelledby="projects-tab">
		...c
	</div>
	<div class="tab-pane fade" id="careers" role="tabpanel" aria-labelledby="careers-tab">
		...d
	</div>
</div>
@endsection
@extends('layouts.admin')

@section('content')
<h1>Edit Service</h1>
<form class="row g-3" method="POST" action="{{ route('admin.services.update', ['service' => $service->id]) }}" autocomplete="off">

	<input type="hidden" name="_method" value="PUT">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$service->title}}">
	
	<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{$service->slug}}">

	<input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" value="{{$service->icon}}">

	<textarea class="form-control" name="short-desc" id="short-desc" rows="3" cols="50" placeholder="Short description">{{$service->description_short}}</textarea>

	<textarea class="form-control" name="long-desc" id="long-desc" rows="7" cols="50" placeholder="Long description">{{$service->description_long}}</textarea>

	<div class="form-check">
		<input class="form-check-input" type="checkbox" name="available" id="available">
		<label class="form-check-label" for="available">
			Service is available
		</label>
	</div>
	
	<div class="col-12">
		<button type="submit" class="btn btn-primary">Save changes</button>
	</div>
	<input type="hidden" name="token" value="{{ Session::token() }}">
</form>
<br>
<form method="POST" action="{{ route('admin.services.destroy', ['service' => $service->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection
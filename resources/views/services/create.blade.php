@extends('layouts.admin')

@section('content')
<h1>Create a Service</h1>
<form class="row g-3" method="POST" action="{{ route('admin.services.store') }}" autocomplete="off">

	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
	
	<input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{ old('slug') }}">

	<input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" value="{{ old('icon') }}">

	<textarea class="form-control" name="short-desc" id="short-desc" rows="3" cols="50" placeholder="Short description">{{ old('short-desc') }}</textarea>

	<textarea class="form-control" name="long-desc" id="long-desc" rows="7" cols="50" placeholder="Long description">{{ old('long-desc') }}</textarea>

	<div class="form-check">
		<input class="form-check-input" type="checkbox" name="available" id="available">
		<label class="form-check-label" for="available">
			Service is available
		</label>
	</div>
	
	<div class="col-12">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
	<input type="hidden" name="token" value="{{ Session::token() }}">
</form>
@endsection
@extends('layouts.admin')

@section('content')
<form method="POST" action="{{ route('postLogin') }}" style="width: 300px;">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
	</div>
	<br>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
	</div>
	<br>
	<button type="submit" class="btn btn-primary">Submit</button>
	<input type="hidden" name="token" value="{{ Session::token() }}">
</form>
@endsection
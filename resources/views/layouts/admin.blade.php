<!DOCTYPE html>
<html>
<head>
	<title>Admin | </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
	@yield('css')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<nav class="navbar navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="{{ route('admin.dashboard') }}">Zokowi | Admin</a>
			@if(Auth::check())
				<a class="btn btn-outline-danger" href="{{ route('admin.logout') }}" role="button">Log out</a>
			@endif
		</div>
	</nav>

	@if(session('success'))
		<div class="alert alert-success">
			<strong>Success!</strong> {{session('success')}}
		</div>
	@endif

	@if(session('error'))
		<div class="alert alert-danger">
			<strong>Warning!</strong> {{session('error')}}
		</div>
	@endif

	<div class="content" style="padding: 30px;">
		@yield('content')
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
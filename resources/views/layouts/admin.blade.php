<!DOCTYPE html>
<html>
<head>
	<title>Admin | </title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
</head>
<body style="padding: 50px;">


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
	
	@yield('content')
</body>
</html>
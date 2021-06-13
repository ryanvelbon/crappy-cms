@extends('layouts.master')

@section('content')
	@foreach($services as $service)
		<h3><a href="/services/{{$service->slug}}">{{$service->title}}</a></h3>
	@endforeach
@endsection

@section('js')
@endsection
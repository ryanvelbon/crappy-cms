@extends('layouts.master')

@section('head')
	<style type="text/css">

	</style>
@endsection

@section('content')
	<section class="row row-bg-img" style="height: 200px">
		<div class="row-img">
			<div class="row-text">
				<h1>{{$service->title}}</h1>
			</div>
		</div>
	</section>

	<section class="row">
		<h2>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa.</h2>
		<h3>Quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</h3>
		<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
	</section>

<!-- Eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? -->

	<section class="row row-bg-primary">
		<div class="row-content">
			<h1>Rem numquam</h1>
			<p>Inventore quia voluptas a voluptatum rerum. Quasi id ad inventore odio amet sed perferendis eos.</p>
			<button class="btn btn-cta">Request Free Consultation</button>
		</div>
	</section>

	<section class="row">
		<!-- general info about service (not specific to Zokowi) -->
		{!! html_entity_decode($service->description_long) !!}
	</section>

	<section>
	<!-- our strategy -->
	</section>

	<section class="row row-bg-primary">
		<div class="row-content">
			<h1>Rem numquam</h1>
			<p>Inventore quia voluptas a voluptatum rerum. Quasi id ad inventore odio amet sed perferendis eos.</p>
			<button class="btn btn-cta">Request Free Consultation</button>
		</div>
	</section>
@endsection

@section('js')
@endsection
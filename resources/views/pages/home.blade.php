@extends('layouts.master')

@section('content')
	<section class="hero" id="hero1">
		<div class="hero-image">
			<div class="hero-text">
				<h1 class="hero-h1">Ipsum numquam</h1>
				<h2 class="hero-h2">Inventore quia voluptas a <strong>voluptatum</strong> rerum. Quasi id ad inventore odio amet sed perferendis eos.</h2>
				<button class="btn btn-cta">Enroll</button>
			</div>
		</div>
	</section>
	<section class="row">
		<div class="row-content">
			<div class="zigzag">
				<div class="zigzag-text">
					<h2>Dolorem ipsum</h2>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
				</div>
				<div class="zigzag-img">
					<img src="https://mlsf03rmjfdn.i.optimole.com/fVWTwdQ.Z_5R~130ed/w:948/h:618/q:90/https://www.wbscodingschool.com/files/wbs_coding_school_stage.jpg">
				</div>
			</div>
		</div>
	</section>
	<section class="row">
		<div class="row-content">
			<div class="zigzag">
				<div class="zigzag-img">
					<img src="https://mlsf03rmjfdn.i.optimole.com/fVWTwdQ.Z_5R~130ed/w:948/h:618/q:90/https://www.wbscodingschool.com/files/wbs_coding_school_stage.jpg">
				</div>
				<div class="zigzag-text">
					<h2>Voluptas a rerum</h2>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				</div>
			</div>
		</div>
	</section>
	<section class="row">
		<div class="row-content">
			<div class="zigzag">
				<div class="zigzag-text">
					<h2>Modi tempora</h2>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
				</div>
				<div class="zigzag-img">
					<img src="https://mlsf03rmjfdn.i.optimole.com/fVWTwdQ.Z_5R~130ed/w:948/h:618/q:90/https://www.wbscodingschool.com/files/wbs_coding_school_stage.jpg">
				</div>
			</div>
		</div>
	</section>
	<section class="row row-bg">
		<div class="row-content">
			<h2>Courses</h2>
		</div>
	</section>
	<section class="row">
		<div class="row-content">
			<!-- <p>Use the following icons: globe line-chart lightbulb-o cloud-upload mobile bullhorn</p> -->
			<div id="serviceCardsContainer">
				@for ($i = 0; $i < 6; $i++)
				<div class="service-card">
					<div class="card-icon">
						<i class="fa fa-car"></i>
					</div>
					<div class="card-title">
						<h3>Lorem Ipsum</h3>
					</div>
					<div class="card-body">
						<p>Sed ut perspiciatis unde omnis iste natus error sit <strong>voluptatem</strong> accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
					</div>
				</div>
				@endfor
			</div>
		</div>
	</section>
	<section class="hero" id="hero2">
		<div class="hero-image">
			<div class="hero-text">
				<h1 style="font-size:50px">Rem numquam</h1>
				<p>Inventore quia voluptas a voluptatum rerum. Quasi id ad inventore odio amet sed perferendis eos.</p>
				<button class="btn btn-cta">get a quote</button>
			</div>
		</div>
	</section>
@endsection
@extends('layouts.main')

@section('content')
	{{-- <main class="comic_main">
		<section class="hero_banner">
			<img class="hero_bg" src="../images/jumbotron.jpg" alt="">
			<div class="inner_container">
				<figure class="comic_cover">
					<img src="{{ $fumetto['thumb'] }}" alt="">
				</figure>
			</div>
			<div class="spacer"></div>
		</section>
	</main> --}}

	<main class="comic_main">
		<div class="hero_banner">
			<div class="inner_container">
				<figure class="comic_cover">
					<img src="{{ $fumetto['thumb'] }}" alt="">
					<a class="view_gallery" href="">VIEW GALLERY</a>
					<div class="comic_type">{{ $fumetto['type'] }}</div>
				</figure>
			</div>
			<div class="spacer"></div>
		</div>
		<section class="content">
			<div class="comic_details inner_container">
				<h5>ADVERTISEMENT</h5>
				<div class="comic_data">
					<h1 class="title">{{$fumetto['title']}}</h1>
					<div class="stock">
						<div class="details">
							<div class="price">
								U.S. Price: <span class="dollars">{{$fumetto['price']}}</span>
							</div>
							<div class="available">
								AVAILABLE
							</div>
						</div>
						<div class="availability">
							Check Availability
							<i class="fas fa-sort-down"></i>
						</div>
					</div>
					<p class="description">
						{{ $fumetto['description'] }}
					</p>
				</div>
				<div class="ads">
					<img src="{{ asset('images/ads.png') }}" alt="">
				</div>
			</div>
		</section>
	</main>
@endsection
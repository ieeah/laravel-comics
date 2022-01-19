@extends('layouts.main')

@section('content')
	<main>
		<div class="comics container">
		@foreach ($comics as $comic )
			<a href="" class="magazine_card">
				<div href="" class="top_card">
					<img src="{{ $comic['thumb'] }}" alt="{{$comic['title']}}">
				</div>
				<div class="bottom_card">
					<h3 class="comic_name">{{$comic['series']}}</h3>
				</div>
			</a>
		@endforeach
		</div>
		<div class="container load_more">
			<a href="" class="btn">load more</a>
		</div>
	</main>
@endsection
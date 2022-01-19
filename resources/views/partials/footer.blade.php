<footer>
	<div class="blue_stripe"></div>
	<div class="sub_footer">
		<div class="container">
			<div class="sign_up">
				<a href="" class="btn bordered">sign-up now!</a>
			</div>
			<div class="socials">
				<h3>FOLLOW US</h3>
				<div class="icons">
					@foreach ($social_icons as $social)
						<a href="{{$social['url']}}" class="social_icon">
						<i class="{{$social['img']}}"></i>
					</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</footer>
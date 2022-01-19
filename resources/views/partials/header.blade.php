<header class="container">
	<a class="brand" href="/">
		<img src="{{ asset('images/dc-logo.png') }}" alt="">
	</a>
	<nav>
		<ul>
			<li><a
					class="text-center {{Request::route()->getName() == 'comics' ? 'active' : ''}}"
					href="{{ route('comics') }}"
					>
					Comics
				</a>
			</li>
			<li>
				<a 
					class="text-center {{Request::route()->getName() == 'news' ? 'active' : ''}}"
					href="{{ route('news') }}"
					>
					News
				</a>
			</li>
		</ul>
	</nav>
</header>
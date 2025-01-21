<div class="fixed-top d-flex align-items-center topbar-inner-pages" id="topbar">
	<div class="container d-flex align-items-center justify-content-center justify-content-md-between">
		<div class="contact-info d-flex align-items-center">
			<i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">soft.tech.mexico@gmail.com</a>
			<i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
		</div>
		<div class="cta d-none d-md-block">
			<a class="" href="{{ route('buy-template') }}">
				{{ __('Buy This Template!') }}
			</a>
		</div>
	</div>
</div>

<header class="fixed-top d-flex align-items-center header-inner-pages" id="header">
	<div class="container d-flex align-items-center justify-content-between">
		
		{{-- TEXTO --}}
		<h1 class="logo">
			<a href="{{ route('landing') }}">
				Soft Tech MX
			</a>
		</h1>

		{{-- IMAGEN DE LOGO--}}
		{{--
		<a href="index.html" class="logo">
			<img alt="" class="img-fluid" src="{{ asset('/storage/img/LOGO SIN FONDO.png') }}">
		</a>
		--}}

		<nav class="navbar" id="navbar">
			<ul>
				@foreach (config('menu') as $menu)

				<li>
					<a href="{{ route($menu['route']) }}" class="nav-link">
						<i class="{{ $menu['icon'] }}"></i>
						<span>
							{{ $menu['label'] }}
						</span>
					</a>
				</li>

				@endforeach

				{{--
				<li>
					<a class="nav-link scrollto active" href="#hero">Home</a>
				</li>
				<li>
					<a class="nav-link scrollto" href="#about">About</a>
				</li>
				{{-- 
				<li class="dropdown">
					<a href="#"><span>Drop Down</span>
						<i class="bi bi-chevron-down"></i></a>
					<ul>
						<li><a href="#">Drop Down 1</a></li>
						<li class="dropdown">
							<a href="#"><span>Deep Drop Down</span>
								<i class="bi bi-chevron-right"></i></a>
							<ul>
								<li>
									<a href="#">Deep Drop Down 1</a>
								</li>
								<li>
									<a href="#">Deep Drop Down 2</a>
								</li>
								<li>
									<a href="#">Deep Drop Down 3</a>
								</li>
								<li>
									<a href="#">Deep Drop Down 4</a>
								</li>
								<li>
									<a href="#">Deep Drop Down 5</a>
								</li>
							</ul>
						</li>
						<li><a href="#">Drop Down 2</a></li>
						<li><a href="#">Drop Down 3</a></li>
						<li><a href="#">Drop Down 4</a></li>
					</ul>
				</li>
				--}}
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
	</div>
</header>

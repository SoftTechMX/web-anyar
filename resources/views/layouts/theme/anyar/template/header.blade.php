<div class="fixed-top d-flex align-items-center topbar-inner-pages" id="topbar">
	<div class="container d-flex align-items-center justify-content-center justify-content-md-between">
		<div class="contact-info d-flex align-items-center">
			<i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">soft.tech.mexico@gmail.com</a>
			<i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
		</div>
		<div class="cta d-none d-md-block">
			<a class="" href="{{ route('plans') }}">
				{{ __('Buy This Website!') }}
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
				@foreach ($ui_menus as $menu)

					@if($menu->parent_menu == null)
						<x-theme.anyar.navbar.menu :menu="$menu" />
					@endif

				@endforeach
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
	</div>
</header>

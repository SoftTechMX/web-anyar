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
				{{ config('app.name') }}
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
				{{-- CARGAMOS LOS MENUS DE LA BASE DE DATOS --}}
				@foreach ($ui_menus as $menu)

					@if($menu->parent_menu == null)
						<x-theme.anyar.navbar.menu :menu="$menu" />
					@endif

				@endforeach

				@auth
					{{-- MENU DE PERFIL DE USUARIO --}}
					<li class="dropdown">
						<a href="#">
							<i class=""></i>
							<span>
								{{ __('Profile') }}
							</span>
						</a>
						<ul>
							@role('admin')
							<li>
								<a href="{{ route('cpanel') }}">
									{{ __('cPanel') }}
								</a>
							</li>
							
							<li>
								<a href="{{ route('user.settings') }}">
									{{ __('Settings') }}
								</a>
							</li>
							@endrole

							<li>
								<a href="{{ route('user.profile') }}">
									{{ __('My Profile') }}
								</a>
							</li>							

							@role('admin')
							<li>
								<a href="{{ route('dashboard') }}">
									{{ __('Dashboard') }}
								</a>
							</li>
							@endrole

							<li>
								<form method="POST" action="{{ route('logout') }}" id="form-logout">
									@csrf
								</form>

								<a href="#" onclick="document.getElementById('form-logout').submit()">
									{{ __('Logout') }}
								</a>
							</li>
						</ul>
					</li>
				@else
					{{-- MENU DE LOGIN --}}
					<li class="dropdown">
						<a href="#">
							<i class="bx bx-chevrons-down"></i>
							<span>
								{{ __('Users') }}
							</span>
						</a>
						<ul>
							<li>
								<a href="{{ route('login') }}">
									{{ __('Login') }}
								</a>
							</li>
							<li>
								<a href="{{ route('register') }}">
									{{ __('Register') }}
								</a>
							</li>
						</ul>
					</li>
				@endauth
			</ul>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
	</div>
</header>

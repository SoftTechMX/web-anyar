@extends('layouts.theme.anyar.app')

@section('banner')
	<section class="d-flex justify-cntent-center align-items-center" id="hero">
		<div class="container carousel carousel-fade" data-bs-interval="5000" data-bs-ride="carousel" id="heroCarousel">

			{{-- SLIDE 1 --}}
			<div class="carousel-item active">
				<div class="carousel-container">
					<h2 class="animate__animated animate__fadeInDown">
						{{ __('Welcome to')}} <span class="text-info">Rayna {{ __('Platform') }}</span>
					</h2>
					<p class="animate__animated animate__fadeInUp">
						{{ __('This CMS is a demo, you can log in to modify the content to your liking and see the potential of the platform.') }}
					</p>
					{{-- <x-theme.anyar.button.read-more /> --}}
				</div>
			</div>

			{{-- SLIDE 2 --}}
			<div class="carousel-item">
				<div class="carousel-container">
					<h2 class="animate__animated animate__fadeInDown">
						{{ __('Buy this platform Now') }}
					</h2>
					<p class="animate__animated animate__fadeInUp">
						{{ __('You can check the platform prices in the following button') }}
					</p>
					<x-theme.anyar.button.read-more link="{{ route('plans') }}" />
				</div>
			</div>

			<a class="carousel-control-prev" data-bs-slide="prev" href="#heroCarousel" role="button">
				<span aria-hidden="true" class="carousel-control-prev-icon bx bx-chevron-left"></span>
			</a>

			<a class="carousel-control-next" data-bs-slide="next" href="#heroCarousel" role="button">
				<span aria-hidden="true" class="carousel-control-next-icon bx bx-chevron-right"></span>
			</a>
		</div>
	</section>
@endsection

@section('content')
	<section class="icon-boxes" id="icon-boxes">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
					<x-theme.anyar.icon-box
						icono="bx bx-edit-alt"
						titulo="Customizable Template" 
						descripcion="Edit the template to your needs with ease, effortlessly using a cPanel." 
					/>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos-delay="100" data-aos="fade-up">
					<x-theme.anyar.icon-box
						icono="bx bx-user"
						titulo="Role and Permission Management" 
						descripcion="With a user roles and permissions mechanism you can accurately manage each user's privileges." 
					/>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos-delay="200" data-aos="fade-up">
					<x-theme.anyar.icon-box
						icono="bx bx-plug"
						titulo="Modular Based System" 
						descripcion="Our module-based system allows you to enable and disable sections using switches in the cPanel." 
					/>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos-delay="300" data-aos="fade-up">
					<x-theme.anyar.icon-box
						icono="bx bx-support"
						titulo="Constant Updates" 
						descripcion="Receive constant updates, technical support and access to many resources such as video tutorials, code documentation, ER diagrams and more." 
					/>
				</div>
			</div>
		</div>
	</section>

	<section class="about" id="about">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('About Us') }}
				</h2>
				<p>
					{{ __('We are a company passionate about technology and innovation, dedicated to offering comprehensive solutions in software development, creation of web and mobile applications, penetration testing, and services related to IT and systems engineering.') }}
				</p>
			</div>

			<div class="row content">
				<div class="col-lg-6">
					<h5 class="text-primary fw-bold">
						{{ __('Our Mission') }}
					</h5>
					<p>
						{{ __('Our mission is to be a strategic ally in the digital transformation of companies and organizations. We are dedicated to developing customized technological solutions that boost the productivity, efficiency and competitiveness of our clients in a constantly evolving digital world. By using innovative technologies, agile development practices and a focus on customer needs, we seek to deliver high-quality projects that generate tangible value for their businesses.') }}
					</p>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0">
					<h5 class="text-primary fw-bold">
						{{ __('Our Vision') }}
					</h5>
					<p>
						{{ __('Our vision is to establish ourselves as a leading reference in technological innovation, software development and cybersecurity at a national and international level. We aspire to be recognized for our ability to anticipate market needs, offering disruptive technological solutions that drive the business success of our clients.') }}
					</p>
				</div>
			</div>
		</div>
	</section>

	<section class="clients" id="clients">
		<div class="container" data-aos="zoom-in">
			<div class="section-title">
				<h2>
					{{ __('Our Clients') }}
				</h2>
			</div>
			<div class="clients-slider swiper">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="{{ asset('/storage/img/clients/client-1.png') }}" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="{{ asset('/storage/img/clients/client-2.png') }}" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="{{ asset('/storage/img/clients/client-3.png') }}" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="{{ asset('/storage/img/clients/client-4.png') }}" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="{{ asset('/storage/img/clients/client-5.png') }}" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="{{ asset('/storage/img/clients/client-6.png') }}" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="{{ asset('/storage/img/clients/client-7.png') }}" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="{{ asset('/storage/img/clients/client-8.png') }}" />
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>

	<section class="why-us" id="why-us">
		<div class="container-fluid">
			<div class="row d-flex justify-content-center">
				<div class=" col-5 col-lg-5 align-items-stretch position-relative video-box bg-danger" data-aos="fade-right">
					<a class="venobox play-btn mb-4" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=h8TCOrPwp08&t=9s"></a>
				</div>

				<div class="col-7 col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">
					<div class="content">
						<h3>
							Eum ipsam laborum deleniti
							<strong>velit pariatur architecto aut
								nihil</strong>
						</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur
							adipiscing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna aliqua.
							Duis aute irure dolor in reprehenderit
						</p>
					</div>

					<div class="accordion-list">
						<ul>
							<li data-aos-delay="100" data-aos="fade-up">
								<a class="collapse" data-bs-target="#accordion-list-1" data-bs-toggle="collapse"><span>01</span> Non consectetur a
									erat nam at lectus urna duis?
									<i class="bx bx-chevron-down icon-show"></i><i
										class="bx bx-chevron-up icon-close"></i></a>
								<div class="collapse show" data-bs-parent=".accordion-list" id="accordion-list-1">
									<p>
										Feugiat pretium nibh ipsum
										consequat. Tempus iaculis urna
										id volutpat lacus laoreet non
										curabitur gravida. Venenatis
										lectus magna fringilla urna
										porttitor rhoncus dolor purus
										non.
									</p>
								</div>
							</li>

							<li data-aos-delay="200" data-aos="fade-up">
								<a class="collapsed" data-bs-target="#accordion-list-2" data-bs-toggle="collapse"><span>02</span> Feugiat scelerisque
									varius morbi enim nunc?
									<i class="bx bx-chevron-down icon-show"></i><i
										class="bx bx-chevron-up icon-close"></i></a>
								<div class="collapse" data-bs-parent=".accordion-list" id="accordion-list-2">
									<p>
										Dolor sit amet consectetur
										adipiscing elit pellentesque
										habitant morbi. Id interdum
										velit laoreet id donec ultrices.
										Fringilla phasellus faucibus
										scelerisque eleifend donec
										pretium. Est pellentesque elit
										ullamcorper dignissim. Mauris
										ultrices eros in cursus turpis
										massa tincidunt dui.
									</p>
								</div>
							</li>

							<li data-aos-delay="300" data-aos="fade-up">
								<a class="collapsed" data-bs-target="#accordion-list-3" data-bs-toggle="collapse"><span>03</span> Dolor sit amet
									consectetur adipiscing elit?
									<i class="bx bx-chevron-down icon-show"></i><i
										class="bx bx-chevron-up icon-close"></i></a>
								<div class="collapse" data-bs-parent=".accordion-list" id="accordion-list-3">
									<p>
										Eleifend mi in nulla posuere
										sollicitudin aliquam ultrices
										sagittis orci. Faucibus pulvinar
										elementum integer enim. Sem
										nulla pharetra diam sit amet
										nisl suscipit. Rutrum tellus
										pellentesque eu tincidunt.
										Lectus urna duis convallis
										convallis tellus. Urna molestie
										at elementum eu facilisis sed
										odio morbi quis
									</p>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="services" id="services">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Services') }}
				</h2>
				<p>
					{{ __("With our CMS system, you have complete control to add, edit, and delete services according to your needs. Using a user-friendly cPanel interface, you can manage your services effortlessly without requiring technical expertise. The intuitive design ensures a seamless experience, allowing you to customize service details, descriptions, and images in just a few clicks. Whether you're updating existing services or introducing new ones, the system is designed to adapt to your preferences, providing flexibility and efficiency for your business operations.") }}
				</p>
			</div>

			<div class="d-flex flex-wrap justify-content-center">
				@isset($services)
				
					@php
						$miliseconds_delay = 100;
					@endphp

					@foreach ($services as $service)

						<div class="col-5 m-2 flex-" data-aos-delay="{{ $miliseconds_delay }}" data-aos="fade-up">
							<x-theme.anyar.service-card 
								titulo='{{ __("{$service->title}") }}'
								icono="{{ $service->icon }}"
								descripcion="{{ $service->description }}"
							/>
						</div>

						@php
							$miliseconds_delay += 100;
						@endphp
					@endforeach
				@endisset
			</div>
		</div>
	</section>

	<section class="cta" id="cta">
		<div class="container">
			<div class="row" data-aos="zoom-in">
				<div class="col-lg-9 text-center text-lg-start">
					<h3>Call To Action</h3>
					<p>
						Duis aute irure dolor in reprehenderit in
						voluptate velit esse cillum dolore eu fugiat
						nulla pariatur. Excepteur sint occaecat
						cupidatat non proident, sunt in culpa qui
						officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-lg-3 cta-btn-container text-center">
					<a class="cta-btn align-middle" href="#">Call To Action</a>
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio" id="portfolio">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Products') }}
				</h2>
				<p>
					{{ __('With our CMS you can have a product catalog and manage them from a cPanel, our interactive catalog allows you to offer your products in a more friendly and simple way to your customers.') }}
				</p>
			</div>

			<div class="row">
				<div class="col-lg-12 d-flex justify-content-center">
					<ul id="portfolio-flters">
						<li class="filter-active" data-filter="*">
							All
						</li>
						<li data-filter=".filter-app">App</li>
						<li data-filter=".filter-card">Card</li>
						<li data-filter=".filter-web">Web</li>
					</ul>
				</div>
			</div>

			<div class="row portfolio-container">
				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<img alt="" class="img-fluid" src="/storage/img/portfolio/portfolio-1.jpg" />
					<div class="portfolio-info">
						<h4>App 1</h4>
						<p>App</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="/storage/img/portfolio/portfolio-1.jpg" title="App 1"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<img alt="" class="img-fluid" src="/storage/img/portfolio/portfolio-2.jpg" />
					<div class="portfolio-info">
						<h4>Web 3</h4>
						<p>Web</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="/storage/img/portfolio/portfolio-2.jpg" title="Web 3"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<img alt="" class="img-fluid" src="/storage/img/portfolio/portfolio-3.jpg" />
					<div class="portfolio-info">
						<h4>App 2</h4>
						<p>App</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="/storage/img/portfolio/portfolio-3.jpg" title="App 2"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<img alt="" class="img-fluid" src="/storage/img/portfolio/portfolio-4.jpg" />
					<div class="portfolio-info">
						<h4>Card 2</h4>
						<p>Card</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="/storage/img/portfolio/portfolio-4.jpg" title="Card 2"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<img alt="" class="img-fluid" src="/storage/img/portfolio/portfolio-5.jpg" />
					<div class="portfolio-info">
						<h4>Web 2</h4>
						<p>Web</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="/storage/img/portfolio/portfolio-5.jpg" title="Web 2"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<img alt="" class="img-fluid" src="/storage/img/portfolio/portfolio-6.jpg" />
					<div class="portfolio-info">
						<h4>App 3</h4>
						<p>App</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="/storage/img/portfolio/portfolio-6.jpg" title="App 3"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<img alt="" class="img-fluid" src="/storage/img/portfolio/portfolio-7.jpg" />
					<div class="portfolio-info">
						<h4>Card 1</h4>
						<p>Card</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="/storage/img/portfolio/portfolio-7.jpg" title="Card 1"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<img alt="" class="img-fluid" src="/storage/img/portfolio/portfolio-8.jpg" />
					<div class="portfolio-info">
						<h4>Card 3</h4>
						<p>Card</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="/storage/img/portfolio/portfolio-8.jpg" title="Card 3"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<img alt="" class="img-fluid" src="/storage/img/portfolio/portfolio-9.jpg" />
					<div class="portfolio-info">
						<h4>Web 3</h4>
						<p>Web</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="/storage/img/portfolio/portfolio-9.jpg" title="Web 3"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="team section-bg" id="team">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Our Team') }}
				</h2>
				<p>

				</p>
			</div>

			<div class="d-flex justify-content-center flex-wrap">
				@foreach ($team as $person)
					<div class="col-5 m-2" data-aos-delay="100" data-aos="fade-up">
						<x-theme.anyar.card.person-card :person="$person" />
					</div>
				@endforeach
			</div>
		</div>
	</section>

	<section class="pricing" id="pricing">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Pricing') }}
				</h2>
				<p>
					{{ __("You're currently exploring a powerful Content Management System (CMS) designed to simplify website creation and management. This CMS is available for purchase, offering you complete control over your personal or professional online presence.") }}
				
					{{ __("Take ownership of this versatile CMS and build the website you've always wanted. With just a few clicks, you can unlock the full potential of this platform for your personal or business use.") }}
				</p>
			</div>

			<x-theme.anyar.price-cards />
		</div>
	</section>

	<section class="faq section-bg" id="faq">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Frequently Asked Questions') }}
				</h2>
			</div>

			<div class="faq-list">
				<ul>
					@isset($faqs)

						@php
							$retraso_en_milisegundos = 100;
						@endphp

						@forelse ($faqs as $faq)

							<li data-aos-delay="{{ $retraso_en_milisegundos }}" data-aos="fade-up" data-aos="fade-up">
								<i class="bx bx-help-circle icon-help"></i>
								<a class="collapse" data-bs-target="#faq-list-{{ $loop->iteration }}" data-bs-toggle="collapse">
									{{ $faq->question  }}
									<i class="bx bx-chevron-down icon-show"></i>
									<i class="bx bx-chevron-up icon-close"></i>
								</a>
								<div class="collapse" data-bs-parent=".faq-list" id="faq-list-{{ $loop->iteration }}">
									<p>
										{{ $faq->answer }}
									</p>
								</div>
							</li>

							@php
								$retraso_en_milisegundos += 100;
							@endphp
						@empty
							<div class="text-center">
								<p class="text-center fw-bold mb-3">
									{{ __('There are no questions asked by users yet, if you have a question, click the following button.') }}
								</p>
	
								<a href="{{ route('pregunta-frecuente.create') }}" class="btn btn-primary d-inline p-2">
									{{ __('Add your question here!') }}
								</a>
							</div>
						@endforelse

					@endisset
				</ul>
			</div>
		</div>
	</section>

	<section class="contact" id="contact">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Contact Us') }}
				</h2>
			</div>

			<div class="row mt-1 d-flex justify-content-end" data-aos-delay="100" data-aos="fade-right">
				<div class="col-lg-5">
					<div class="info">
						<div class="address">
							<i class='bx bx-map'></i>
							<h4>
								{{ __('Location') }}:
							</h4>
							<p>A108 Adam Street, New York, NY 535022</p>
						</div>

						<div class="email">
							<i class='bx bx-envelope' ></i>
							<h4>
								{{ ('Email') }}:
							</h4>
							<p>soft.tech.mexico@gmail.com</p>
						</div>

						<div class="phone">
							<i class='bx bxs-phone-call' ></i>
							<h4>
								{{ __('Telephone') }}:
							</h4>
							<p>+1 5589 55488 55s</p>
						</div>
					</div>
				</div>

				<div class="col-lg-6 mt-5 mt-lg-0" data-aos-delay="100" data-aos="fade-left">
					<livewire:form.contact />
				</div>
			</div>
		</div>
	</section>
@endsection
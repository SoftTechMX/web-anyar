@extends('layouts.theme.anyar.app')

@section('banner')
	<section class="d-flex justify-cntent-center align-items-center" id="hero">
		<div class="container carousel carousel-fade" data-bs-interval="5000" data-bs-ride="carousel" id="heroCarousel">
			<!-- Slide 1 -->
			<div class="carousel-item active">
				<div class="carousel-container">
					<h2 class="animate__animated animate__fadeInDown">
						Welcome to <span>Soft Tech MX</span>
					</h2>
					<p class="animate__animated animate__fadeInUp">
						Ut velit est quam dolor ad a aliquid qui aliquid.
						Sequi ea ut et est quaerat sequi nihil ut aliquam.
						Occaecati alias dolorem mollitia ut. Similique ea
						voluptatem. Esse doloremque accusamus repellendus
						deleniti vel. Minus et tempore modi architecto.
					</p>
					<a class="btn-get-started animate__animated animate__fadeInUp scrollto" href="#about">Read More</a>
				</div>
			</div>

			<!-- Slide 2 -->
			<div class="carousel-item">
				<div class="carousel-container">
					<h2 class="animate__animated animate__fadeInDown">
						Lorem Ipsum Dolor
					</h2>
					<p class="animate__animated animate__fadeInUp">
						Ut velit est quam dolor ad a aliquid qui aliquid.
						Sequi ea ut et est quaerat sequi nihil ut aliquam.
						Occaecati alias dolorem mollitia ut. Similique ea
						voluptatem. Esse doloremque accusamus repellendus
						deleniti vel. Minus et tempore modi architecto.
					</p>
					<a class="btn-get-started animate__animated animate__fadeInUp scrollto" href="#about">Read More</a>
				</div>
			</div>

			<!-- Slide 3 -->
			<div class="carousel-item">
				<div class="carousel-container">
					<h2 class="animate__animated animate__fadeInDown">
						Sequi ea ut et est quaerat
					</h2>
					<p class="animate__animated animate__fadeInUp">
						Ut velit est quam dolor ad a aliquid qui aliquid.
						Sequi ea ut et est quaerat sequi nihil ut aliquam.
						Occaecati alias dolorem mollitia ut. Similique ea
						voluptatem. Esse doloremque accusamus repellendus
						deleniti vel. Minus et tempore modi architecto.
					</p>
					<a class="btn-get-started animate__animated animate__fadeInUp scrollto" href="#about">Read More</a>
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
					<div class="icon-box">
						<div class="icon">
							<i class="bx bxl-dribbble"></i>
						</div>
						<h4 class="title">
							<a href="">Lorem Ipsum</a>
						</h4>
						<p class="description">
							Voluptatum deleniti atque corrupti quos
							dolores et quas molestias excepturi sint
							occaecati cupiditate non provident
						</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos-delay="100" data-aos="fade-up">
					<div class="icon-box">
						<div class="icon">
							<i class="bx bx-file"></i>
						</div>
						<h4 class="title">
							<a href="">Sed ut perspiciatis</a>
						</h4>
						<p class="description">
							Duis aute irure dolor in reprehenderit in
							voluptate velit esse cillum dolore eu fugiat
							nulla pariatur
						</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos-delay="200" data-aos="fade-up">
					<div class="icon-box">
						<div class="icon">
							<i class="bx bx-tachometer"></i>
						</div>
						<h4 class="title">
							<a href="">Magni Dolores</a>
						</h4>
						<p class="description">
							Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt
							mollit anim id est laborum
						</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos-delay="300" data-aos="fade-up">
					<div class="icon-box">
						<div class="icon">
							<i class="bx bx-layer"></i>
						</div>
						<h4 class="title"><a href="">Nemo Enim</a></h4>
						<p class="description">
							At vero eos et accusamus et iusto odio
							dignissimos ducimus qui blanditiis
							praesentium voluptatum deleniti atque
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Icon Boxes Section -->

	<!-- ======= About Us Section ======= -->
	<section class="about" id="about">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>About Us</h2>
				<p>
					Magnam dolores commodi suscipit. Necessitatibus eius
					consequatur ex aliquid fuga eum quidem. Sit sint
					consectetur velit. Quisquam quos quisquam
					cupiditate. Et nemo qui impedit suscipit alias ea.
					Quia fugiat sit in iste officiis commodi quidem hic
					quas.
				</p>
			</div>

			<div class="row content">
				<div class="col-lg-6">
					<p>
						Lorem ipsum dolor sit amet, consectetur
						adipiscing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua.
					</p>
					<ul>
						<li>
							<i class="ri-check-double-line"></i> Ullamco
							laboris nisi ut aliquip ex ea commodo
							consequat
						</li>
						<li>
							<i class="ri-check-double-line"></i> Duis
							aute irure dolor in reprehenderit in
							voluptate velit
						</li>
						<li>
							<i class="ri-check-double-line"></i> Ullamco
							laboris nisi ut aliquip ex ea commodo
							consequat
						</li>
					</ul>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0">
					<p>
						Ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in
						reprehenderit in voluptate velit esse cillum
						dolore eu fugiat nulla pariatur. Excepteur sint
						occaecat cupidatat non proident, sunt in culpa
						qui officia deserunt mollit anim id est laborum.
					</p>
					<a class="btn-learn-more" href="#">Learn More</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End About Us Section -->

	<!-- ======= Clients Section ======= -->
	<section class="clients" id="clients">
		<div class="container" data-aos="zoom-in">
			<div class="clients-slider swiper">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="assets/img/clients/client-1.png" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="assets/img/clients/client-2.png" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="assets/img/clients/client-3.png" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="assets/img/clients/client-4.png" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="assets/img/clients/client-5.png" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="assets/img/clients/client-6.png" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="assets/img/clients/client-7.png" />
					</div>
					<div class="swiper-slide">
						<img alt="" class="img-fluid" src="assets/img/clients/client-8.png" />
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>
	<!-- End Clients Section -->

	<!-- ======= Why Us Section ======= -->
	<section class="why-us" id="why-us">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5 align-items-stretch position-relative video-box" data-aos="fade-right" style="
                                background-image: url('assets/img/why-us.jpg');
                            ">
					<a class="venobox play-btn mb-4" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v=jDDaplaOz7Q"></a>
				</div>

				<div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">
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
	<!-- End Why Us Section -->

	<!-- ======= Services Section ======= -->
	<section class="services" id="services">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Services</h2>
				<p>
					Magnam dolores commodi suscipit. Necessitatibus eius
					consequatur ex aliquid fuga eum quidem. Sit sint
					consectetur velit. Quisquam quos quisquam
					cupiditate. Et nemo qui impedit suscipit alias ea.
					Quia fugiat sit in iste officiis commodi quidem hic
					quas.
				</p>
			</div>

			<div class="row">
				<div class="col-md-6 d-flex align-items-stretch" data-aos-delay="100" data-aos="fade-up">
					<div class="icon-box">
						<i class="bi bi-card-checklist"></i>
						<h4><a href="#">Lorem Ipsum</a></h4>
						<p>
							Voluptatum deleniti atque corrupti quos
							dolores et quas molestias excepturi sint
							occaecati cupiditate non provident
						</p>
					</div>
				</div>
				<div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos-delay="200" data-aos="fade-up">
					<div class="icon-box">
						<i class="bi bi-bar-chart"></i>
						<h4><a href="#">Dolor Sitema</a></h4>
						<p>
							Minim veniam, quis nostrud exercitation
							ullamco laboris nisi ut aliquip ex ea
							commodo consequat tarad limino ata
						</p>
					</div>
				</div>
				<div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos-delay="300" data-aos="fade-up">
					<div class="icon-box">
						<i class="bi bi-binoculars"></i>
						<h4><a href="#">Sed ut perspiciatis</a></h4>
						<p>
							Duis aute irure dolor in reprehenderit in
							voluptate velit esse cillum dolore eu fugiat
							nulla pariatur
						</p>
					</div>
				</div>
				<div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos-delay="400" data-aos="fade-up">
					<div class="icon-box">
						<i class="bi bi-brightness-high"></i>
						<h4><a href="#">Nemo Enim</a></h4>
						<p>
							Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt
							mollit anim id est laborum
						</p>
					</div>
				</div>
				<div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos-delay="500" data-aos="fade-up">
					<div class="icon-box">
						<i class="bi bi-calendar4-week"></i>
						<h4><a href="#">Magni Dolore</a></h4>
						<p>
							At vero eos et accusamus et iusto odio
							dignissimos ducimus qui blanditiis
							praesentium voluptatum deleniti atque
						</p>
					</div>
				</div>
				<div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos-delay="600" data-aos="fade-up">
					<div class="icon-box">
						<i class="bi bi-briefcase"></i>
						<h4><a href="#">Eiusmod Tempor</a></h4>
						<p>
							Et harum quidem rerum facilis est et
							expedita distinctio. Nam libero tempore, cum
							soluta nobis est eligendi
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Section -->

	<!-- ======= Cta Section ======= -->
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
	<!-- End Cta Section -->

	<!-- ======= Portfoio Section ======= -->
	<section class="portfoio" id="portfolio">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Portfoio</h2>
				<p>
					Magnam dolores commodi suscipit. Necessitatibus eius
					consequatur ex aliquid fuga eum quidem. Sit sint
					consectetur velit. Quisquam quos quisquam
					cupiditate. Et nemo qui impedit suscipit alias ea.
					Quia fugiat sit in iste officiis commodi quidem hic
					quas.
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
					<img alt="" class="img-fluid" src="assets/img/portfolio/portfolio-1.jpg" />
					<div class="portfolio-info">
						<h4>App 1</h4>
						<p>App</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="assets/img/portfolio/portfolio-1.jpg" title="App 1"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<img alt="" class="img-fluid" src="assets/img/portfolio/portfolio-2.jpg" />
					<div class="portfolio-info">
						<h4>Web 3</h4>
						<p>Web</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="assets/img/portfolio/portfolio-2.jpg" title="Web 3"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<img alt="" class="img-fluid" src="assets/img/portfolio/portfolio-3.jpg" />
					<div class="portfolio-info">
						<h4>App 2</h4>
						<p>App</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="assets/img/portfolio/portfolio-3.jpg" title="App 2"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<img alt="" class="img-fluid" src="assets/img/portfolio/portfolio-4.jpg" />
					<div class="portfolio-info">
						<h4>Card 2</h4>
						<p>Card</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="assets/img/portfolio/portfolio-4.jpg" title="Card 2"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<img alt="" class="img-fluid" src="assets/img/portfolio/portfolio-5.jpg" />
					<div class="portfolio-info">
						<h4>Web 2</h4>
						<p>Web</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="assets/img/portfolio/portfolio-5.jpg" title="Web 2"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-app">
					<img alt="" class="img-fluid" src="assets/img/portfolio/portfolio-6.jpg" />
					<div class="portfolio-info">
						<h4>App 3</h4>
						<p>App</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="assets/img/portfolio/portfolio-6.jpg" title="App 3"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<img alt="" class="img-fluid" src="assets/img/portfolio/portfolio-7.jpg" />
					<div class="portfolio-info">
						<h4>Card 1</h4>
						<p>Card</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="assets/img/portfolio/portfolio-7.jpg" title="Card 1"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-card">
					<img alt="" class="img-fluid" src="assets/img/portfolio/portfolio-8.jpg" />
					<div class="portfolio-info">
						<h4>Card 3</h4>
						<p>Card</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="assets/img/portfolio/portfolio-8.jpg" title="Card 3"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 portfolio-item filter-web">
					<img alt="" class="img-fluid" src="assets/img/portfolio/portfolio-9.jpg" />
					<div class="portfolio-info">
						<h4>Web 3</h4>
						<p>Web</p>
						<a class="portfolio-lightbox preview-link" data-gallery="portfolioGallery" href="assets/img/portfolio/portfolio-9.jpg" title="Web 3"><i class="bx bx-plus"></i></a>
						<a class="details-link" href="portfolio-details.html" title="More Details"><i
								class="bx bx-link"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Portfoio Section -->

	<!-- ======= Team Section ======= -->
	<section class="team section-bg" id="team">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Team</h2>
				<p>
					Magnam dolores commodi suscipit. Necessitatibus eius
					consequatur ex aliquid fuga eum quidem. Sit sint
					consectetur velit. Quisquam quos quisquam
					cupiditate. Et nemo qui impedit suscipit alias ea.
					Quia fugiat sit in iste officiis commodi quidem hic
					quas.
				</p>
			</div>

			<div class="row">
				<div class="col-lg-6" data-aos-delay="100" data-aos="fade-up">
					<div class="member d-flex align-items-start">
						<div class="pic">
							<img alt="" class="img-fluid" src="assets/img/team/team-1.jpg" />
						</div>
						<div class="member-info">
							<h4>Walter White</h4>
							<span>Chief Executive Officer</span>
							<p>
								Explicabo voluptatem mollitia et
								repellat qui dolorum quasi
							</p>
							<div class="social">
								<a href=""><i class="ri-twitter-fill"></i></a>
								<a href=""><i class="ri-facebook-fill"></i></a>
								<a href=""><i class="ri-instagram-fill"></i></a>
								<a href="">
									<i class="ri-linkedin-box-fill"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 mt-4 mt-lg-0" data-aos-delay="200" data-aos="fade-up">
					<div class="member d-flex align-items-start">
						<div class="pic">
							<img alt="" class="img-fluid" src="assets/img/team/team-2.jpg" />
						</div>
						<div class="member-info">
							<h4>Sarah Jhonson</h4>
							<span>Product Manager</span>
							<p>
								Aut maiores voluptates amet et quis
								praesentium qui senda para
							</p>
							<div class="social">
								<a href=""><i class="ri-twitter-fill"></i></a>
								<a href=""><i class="ri-facebook-fill"></i></a>
								<a href=""><i class="ri-instagram-fill"></i></a>
								<a href="">
									<i class="ri-linkedin-box-fill"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 mt-4" data-aos-delay="300" data-aos="fade-up">
					<div class="member d-flex align-items-start">
						<div class="pic">
							<img alt="" class="img-fluid" src="assets/img/team/team-3.jpg" />
						</div>
						<div class="member-info">
							<h4>William Anderson</h4>
							<span>CTO</span>
							<p>
								Quisquam facilis cum velit laborum
								corrupti fuga rerum quia
							</p>
							<div class="social">
								<a href=""><i class="ri-twitter-fill"></i></a>
								<a href=""><i class="ri-facebook-fill"></i></a>
								<a href=""><i class="ri-instagram-fill"></i></a>
								<a href="">
									<i class="ri-linkedin-box-fill"></i>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6 mt-4" data-aos-delay="400" data-aos="fade-up">
					<div class="member d-flex align-items-start">
						<div class="pic">
							<img alt="" class="img-fluid" src="assets/img/team/team-4.jpg" />
						</div>
						<div class="member-info">
							<h4>Amanda Jepson</h4>
							<span>Accountant</span>
							<p>
								Dolorum tempora officiis odit laborum
								officiis et et accusamus
							</p>
							<div class="social">
								<a href=""><i class="ri-twitter-fill"></i></a>
								<a href=""><i class="ri-facebook-fill"></i></a>
								<a href=""><i class="ri-instagram-fill"></i></a>
								<a href="">
									<i class="ri-linkedin-box-fill"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Team Section -->

	<!-- ======= Pricing Section ======= -->
	<section class="pricing" id="pricing">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Pricing</h2>
				<p>
					Magnam dolores commodi suscipit. Necessitatibus eius
					consequatur ex aliquid fuga eum quidem. Sit sint
					consectetur velit. Quisquam quos quisquam
					cupiditate. Et nemo qui impedit suscipit alias ea.
					Quia fugiat sit in iste officiis commodi quidem hic
					quas.
				</p>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-6" data-aos-delay="100" data-aos="fade-up">
					<div class="box">
						<h3>Free</h3>
						<h4><sup>$</sup>0<span> / month</span></h4>
						<ul>
							<li>Aida dere</li>
							<li>Nec feugiat nisl</li>
							<li>Nulla at volutpat dola</li>
							<li class="na">Pharetra massa</li>
							<li class="na">Massa ultricies mi</li>
						</ul>
						<div class="btn-wrap">
							<a class="btn-buy" href="#">Buy Now</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos-delay="200" data-aos="fade-up">
					<div class="box featured">
						<h3>Business</h3>
						<h4><sup>$</sup>19<span> / month</span></h4>
						<ul>
							<li>Aida dere</li>
							<li>Nec feugiat nisl</li>
							<li>Nulla at volutpat dola</li>
							<li>Pharetra massa</li>
							<li class="na">Massa ultricies mi</li>
						</ul>
						<div class="btn-wrap">
							<a class="btn-buy" href="#">Buy Now</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos-delay="300" data-aos="fade-up">
					<div class="box">
						<h3>Developer</h3>
						<h4><sup>$</sup>29<span> / month</span></h4>
						<ul>
							<li>Aida dere</li>
							<li>Nec feugiat nisl</li>
							<li>Nulla at volutpat dola</li>
							<li>Pharetra massa</li>
							<li>Massa ultricies mi</li>
						</ul>
						<div class="btn-wrap">
							<a class="btn-buy" href="#">Buy Now</a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos-delay="400" data-aos="fade-up">
					<div class="box">
						<span class="advanced">Advanced</span>
						<h3>Ultimate</h3>
						<h4><sup>$</sup>49<span> / month</span></h4>
						<ul>
							<li>Aida dere</li>
							<li>Nec feugiat nisl</li>
							<li>Nulla at volutpat dola</li>
							<li>Pharetra massa</li>
							<li>Massa ultricies mi</li>
						</ul>
						<div class="btn-wrap">
							<a class="btn-buy" href="#">Buy Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Pricing Section -->

	<!-- ======= Frequently Asked Questions Section ======= -->
	<section class="faq section-bg" id="faq">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Frequently Asked Questions</h2>
			</div>

			<div class="faq-list">
				<ul>
					<li data-aos-delay="100" data-aos="fade-up" data-aos="fade-up">
						<i class="bx bx-help-circle icon-help"></i>
						<a class="collapse" data-bs-target="#faq-list-1" data-bs-toggle="collapse">Non consectetur a
							erat nam at lectus urna
							duis?
							<i class="bx bx-chevron-down icon-show"></i><i
								class="bx bx-chevron-up icon-close"></i></a>
						<div class="collapse show" data-bs-parent=".faq-list" id="faq-list-1">
							<p>
								Feugiat pretium nibh ipsum consequat.
								Tempus iaculis urna id volutpat lacus
								laoreet non curabitur gravida. Venenatis
								lectus magna fringilla urna porttitor
								rhoncus dolor purus non.
							</p>
						</div>
					</li>

					<li data-aos-delay="200" data-aos="fade-up">
						<i class="bx bx-help-circle icon-help"></i>
						<a class="collapsed" data-bs-target="#faq-list-2" data-bs-toggle="collapse">Feugiat
							scelerisque varius morbi enim nunc?
							<i class="bx bx-chevron-down icon-show"></i><i
								class="bx bx-chevron-up icon-close"></i></a>
						<div class="collapse" data-bs-parent=".faq-list" id="faq-list-2">
							<p>
								Dolor sit amet consectetur adipiscing
								elit pellentesque habitant morbi. Id
								interdum velit laoreet id donec
								ultrices. Fringilla phasellus faucibus
								scelerisque eleifend donec pretium. Est
								pellentesque elit ullamcorper dignissim.
								Mauris ultrices eros in cursus turpis
								massa tincidunt dui.
							</p>
						</div>
					</li>

					<li data-aos-delay="300" data-aos="fade-up">
						<i class="bx bx-help-circle icon-help"></i>
						<a class="collapsed" data-bs-target="#faq-list-3" data-bs-toggle="collapse">Dolor sit amet
							consectetur adipiscing elit?
							<i class="bx bx-chevron-down icon-show"></i><i
								class="bx bx-chevron-up icon-close"></i></a>
						<div class="collapse" data-bs-parent=".faq-list" id="faq-list-3">
							<p>
								Eleifend mi in nulla posuere
								sollicitudin aliquam ultrices sagittis
								orci. Faucibus pulvinar elementum
								integer enim. Sem nulla pharetra diam
								sit amet nisl suscipit. Rutrum tellus
								pellentesque eu tincidunt. Lectus urna
								duis convallis convallis tellus. Urna
								molestie at elementum eu facilisis sed
								odio morbi quis
							</p>
						</div>
					</li>

					<li data-aos-delay="400" data-aos="fade-up">
						<i class="bx bx-help-circle icon-help"></i>
						<a class="collapsed" data-bs-target="#faq-list-4" data-bs-toggle="collapse">Tempus quam
							pellentesque nec nam aliquam
							sem et tortor consequat?
							<i class="bx bx-chevron-down icon-show"></i><i
								class="bx bx-chevron-up icon-close"></i></a>
						<div class="collapse" data-bs-parent=".faq-list" id="faq-list-4">
							<p>
								Molestie a iaculis at erat pellentesque
								adipiscing commodo. Dignissim
								suspendisse in est ante in. Nunc vel
								risus commodo viverra maecenas accumsan.
								Sit amet nisl suscipit adipiscing
								bibendum est. Purus gravida quis blandit
								turpis cursus in.
							</p>
						</div>
					</li>

					<li data-aos-delay="500" data-aos="fade-up">
						<i class="bx bx-help-circle icon-help"></i>
						<a class="collapsed" data-bs-target="#faq-list-5" data-bs-toggle="collapse">Tortor vitae
							purus faucibus ornare. Varius
							vel pharetra vel turpis nunc eget lorem
							dolor?
							<i class="bx bx-chevron-down icon-show"></i><i
								class="bx bx-chevron-up icon-close"></i></a>
						<div class="collapse" data-bs-parent=".faq-list" id="faq-list-5">
							<p>
								Laoreet sit amet cursus sit amet dictum
								sit amet justo. Mauris vitae ultricies
								leo integer malesuada nunc vel.
								Tincidunt eget nullam non nisi est sit
								amet. Turpis nunc eget lorem dolor sed.
								Ut venenatis tellus in metus vulputate
								eu scelerisque.
							</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>

	<section class="contact" id="contact">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Contact Us</h2>
			</div>

			<div class="row mt-1 d-flex justify-content-end" data-aos-delay="100" data-aos="fade-right">
				<div class="col-lg-5">
					<div class="info">
						<div class="address">
							<i class="bi bi-geo-alt"></i>
							<h4>Location:</h4>
							<p>A108 Adam Street, New York, NY 535022</p>
						</div>

						<div class="email">
							<i class="bi bi-envelope"></i>
							<h4>Email:</h4>
							<p>soft.tech.mexico@gmail.com</p>
						</div>

						<div class="phone">
							<i class="bi bi-phone"></i>
							<h4>Call:</h4>
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
	<!-- End Contact Section -->
@endsection

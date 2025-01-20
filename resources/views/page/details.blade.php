@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb />
@endsection

@section('content')
	<section class="portfolio-details" id="portfolio-details">
		<div class="container">

			<div class="row gy-4">

				<div class="col-lg-8">
					<div class="portfolio-details-slider swiper">
						<div class="swiper-wrapper align-items-center">

							<div class="swiper-slide">
								<img alt="" src="{{ asset('/storage/img/portfolio/portfolio-1.jpg') }}">
							</div>

							<div class="swiper-slide">
								<img alt="" src="{{ asset('/storage/img/portfolio/portfolio-2.jpg') }}">
							</div>

							<div class="swiper-slide">
								<img alt="" src="{{ asset('/storage/img/portfolio/portfolio-3.jpg') }}">
							</div>

							<div class="swiper-slide">
								<img alt="" src="{{ asset('/storage/img/portfolio/portfolio-1.jpg') }}">
							</div>

							<div class="swiper-slide">
								<img alt="" src="{{ asset('/storage/img/portfolio/portfolio-2.jpg') }}">
							</div>

							<div class="swiper-slide">
								<img alt="" src="{{ asset('/storage/img/portfolio/portfolio-3.jpg') }}">
							</div>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="portfolio-info">
						<h3>Project information</h3>
						<ul>
							<li><strong>Category</strong>: Web design</li>
							<li><strong>Client</strong>: ASU Company</li>
							<li><strong>Project date</strong>: 01 March, 2020</li>
							<li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
						</ul>
					</div>
					<div class="portfolio-description">
						<h2>This is an example of portfolio detail</h2>
						<p>
							Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
						</p>
					</div>
				</div>

			</div>

		</div>
	</section>
@endsection

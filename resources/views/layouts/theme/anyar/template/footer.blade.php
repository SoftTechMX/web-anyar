<footer id="footer">
	<div class="footer-newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h4>
						{{ __('Suscribe Now') }}
					</h4>
					<p>
						{{ __('Enter your email address to receive notifications and exclusive promotions from our alert newsletter.') }}
					</p>
				</div>
				<div class="col-lg-6">
					<livewire:form.suscribe />
				</div>
			</div>
		</div>
	</div>

	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Useful Links</h4>
					<ul>
						<li>
							<i class="bx bx-chevron-right"></i>
							<a href="#">Home</a>
						</li>
						<li>
							<i class="bx bx-chevron-right"></i>
							<a href="#">About us</a>
						</li>
						<li>
							<i class="bx bx-chevron-right"></i>
							<a href="#">Services</a>
						</li>
						<li>
							<i class="bx bx-chevron-right"></i>
							<a href="#">Terms of service</a>
						</li>
						<li>
							<i class="bx bx-chevron-right"></i>
							<a href="#">Privacy policy</a>
						</li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Our Services</h4>
					<ul>
						<li>
							<i class="bx bx-chevron-right"></i>
							<a href="#">Web Design</a>
						</li>
						<li>
							<i class="bx bx-chevron-right"></i>
							<a href="#">Web Development</a>
						</li>
						<li>
							<i class="bx bx-chevron-right"></i>
							<a href="#">Product Management</a>
						</li>
						<li>
							<i class="bx bx-chevron-right"></i>
							<a href="#">Marketing</a>
						</li>
						<li>
							<i class="bx bx-chevron-right"></i>
							<a href="#">Graphic Design</a>
						</li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-contact">
					<h4>
						{{ __('Contact Us') }}
					</h4>
					<p>
						A108 Adam Street <br />
						New York, NY 535022<br />
						United States <br /><br />
						<strong>{{ __('Phone') }}:</strong> {{ $app_settings->phone }} 
						<br />
						<strong>{{ __('Email')}}:</strong> {{ $app_settings->email }} 
						<br />
					</p>
				</div>

				<div class="col-lg-3 col-md-6 footer-info">
					<h3>
						{{ __('About ') }} {{ $app_settings->name }}
					</h3>
					<p>
						{{ $app_settings->about_us }}
					</p>
					<div class="social-links mt-3">
						<a class="twitter" href="{{ $app_settings->twitter }}" target="__blank">
							<i class="bx bxl-twitter"></i>
						</a>
						<a class="facebook" href="{{ $app_settings->facebook }}" target="__blank">
							<i class="bx bxl-facebook"></i>
						</a>
						<a class="instagram" href="{{ $app_settings->instagram }}" target="__blank">
							<i class="bx bxl-instagram"></i>
						</a>
						<a class="google-plus" href="{{ $app_settings->youtube }}" target="__blank">
							<i class="bx bxl-youtube"></i>
						</a>
						<a class="linkedin" href="{{ $app_settings->linkedin }}" target="__blank">
							<i class="bx bxl-linkedin"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="copyright">
			&copy; Copyright <strong><span>Soft Tech MX</span></strong>. All Rights Reserved
		</div>
		<div class="credits">
			Designed by <a href="https://www.soft-tech-mx.com/" target="_blank">Soft Tech MX</a>
		</div>
	</div>
</footer>

@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="cPanel" url="Profile / cPanel" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('cPanel for Admins') }}
				</h2>
				<p>
				</p>
			</div>
		</div>

		<div class="d-flex justify-content-center flex-wrap">

			<x-theme.jane-lepannen.card.image-card
				title="{{ __('Subscribers') }}"
				description="{{ __('This module allows you to manage the subscribers of the system.') }}"
				url="{{ route('suscriptors.index') }}"
				image="https://www.nist.gov/sites/default/files/images/2019/09/12/crowdofpeople.jpg"
			/>

			<x-theme.jane-lepannen.card.image-card
				title="{{ __('Calendar') }}"
				description="{{ __('This module allows you to manage events on the calendar, here you can add, edit and/or delete events.') }}"
				url="{{ route('calendar.index') }}"
				image="https://res.cloudinary.com/little-league/image/upload/c_limit,dpr_auto,w_1536,q_auto,c_fill,g_face/v1520559381/calendar-660670_1920.jpg"
			/>
			<x-theme.jane-lepannen.card.image-card
				title="{{ __('Posts') }}"
				description="{{ __('This module allows you to add, edit and/or delete publications, and you can also modify the tags and categories right here.') }}"
				url="{{ route('posts.index') }}"
				image="https://t4.ftcdn.net/jpg/02/09/53/11/360_F_209531103_vL5MaF5fWcdpVcXk5yREBk3KMcXE0X7m.jpg"
			/>
			<x-theme.jane-lepannen.card.image-card
				title="{{ __('Users') }}"
				description="{{ __('In this module you can edit user permissions, assign roles, and all operations related to system users.') }}"
				url="{{ route('users.index') }}"
				image="https://coolshell.cn/wp-content/uploads/2022/01/iStock-1175502114.png"
			/>
			<x-theme.jane-lepannen.card.image-card
				title="{{ __('App Settings') }}"
				description="{{ __('In this module you can edit the information of the application in general, from social networks, name of the app, to telephone numbers and addresses.') }}"
				url="{{ route('app-settings.index') }}"
				image="https://www.deployr.ai/wp-content/uploads/2023/12/wsl-03-wsl-install.jpg"
			/>
			<x-theme.jane-lepannen.card.image-card
				title="{{ __('FAQs') }}"
				description="{{ __('In this module you can edit, delete and view frequently asked questions by users, here you can enable and disable the visibility of the questions.') }}"
				url="{{ route('frequently-asked-questions.index') }}"
				image="https://www.superoffice.com/globalassets/blog/2016/10/how-to-build-faq-section.jpg"
			/>
			<x-theme.jane-lepannen.card.image-card
				title="{{ __('Contact Requests') }}"
				description="{{ __('In this module you can see all the contact requests from users, that is, here you can see the information that users fill out in the contact form.') }}"
				url="{{ route('contact-requests.index') }}"
				image="https://occidente.co/wp-content/uploads/2019/05/trato-hecho-area-legal-empresario-acuerdo-apreton-de-manos.jpg"
			/>
			<x-theme.jane-lepannen.card.image-card
				title="{{ __('Services') }}"
				description="{{ __('In this module you can manage the services that you have available on your platform.') }}"
				url="{{ route('services.index') }}"
				image="https://cdn.prod.website-files.com/62be22872850996333a4861f/62be2287285099f561a48ee2_IT%20services%20.jpg"
			/>
			<x-theme.jane-lepannen.card.image-card
				title="{{ __('Products') }}"
				description="{{ __('In this module you can manage the product catalog of your system, all operations related to products are done from here.') }}"
				url="{{ route('products.index') }}"
				image="https://i.pinimg.com/564x/8e/c5/5f/8ec55fcb13db9358532cf4419a056f18.jpg"
			/>
		</div>

	</section>
@endsection

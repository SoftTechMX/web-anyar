@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="Event Details" url="Calendar / Event Details" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Event : ') . $event->title }}
				</h2>
				<p>
					{{ __('In this section you can find information about the calendar event you selected.') }}
				</p>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10">
					<div class="card mb-4 shadow-sm">

						{{-- Aquí podrías agregar una imagen predeterminada si los eventos no tienen imagen asociada --}}
						<img src="{{ asset('assets/img/default-event.jpg') }}" class="card-img-top" alt="Event Image">
                        
						<div class="card-body">

							<h4 class="card-title">
                                {{ $event->title }}
                            </h4>

							<p class="card-text">
								<strong>{{ __('Description:') }}</strong> {{ $event->description }}
							</p>
							<p class="card-text">
								<strong>{{ __('Start Date:') }}</strong> {{ \Carbon\Carbon::parse($event->begin_date)->format('F d, Y') }}
							</p>
							<p class="card-text">
								<strong>{{ __('End Date:') }}</strong> {{ \Carbon\Carbon::parse($event->end_date)->format('F d, Y') }}
							</p>
							<p class="card-text">
								<strong>{{ __('Start Time:') }}</strong> {{ \Carbon\Carbon::parse($event->begin_time)->format('h:i A') }}
							</p>
							<p class="card-text">
								<strong>{{ __('End Time:') }}</strong> {{ \Carbon\Carbon::parse($event->end_time)->format('h:i A') }}
							</p>
						</div>
						<div class="card-footer text-end">
							<a href="{{ route('calendar.index') }}" class="btn btn-secondary">
								<i class="bi bi-arrow-left"></i> 
                                {{ __('Back to Events') }}
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

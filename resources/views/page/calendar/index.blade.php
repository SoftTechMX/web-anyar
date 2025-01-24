@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="Calendar" url="Calendar / Main" />
@endsection

@section('content')

    <section class="pricing" id="pricing">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>
                    {{ __('Stay Updated with Upcoming Events') }}
                </h2>
                <p>
                    {{ __("Explore our interactive calendar to discover all the upcoming events! Whether you're looking to stay informed or actively participate, our calendar is designed to make it easy for you.") }}
                </p>
            </div>
            
            <div class="d-flex justify-content-center mt-5">
                <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12 col-12 mx-3" id="calendar"></div>
            </div>
        </div>
    </section>

@endsection

@push('JS')
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var calendarEl = document.getElementById('calendar');
			let eventos = @json($events);

			const calendar = new Calendar(calendarEl, {
				plugins: [timeGridPlugin, dayGridMonth, interactionPlugin],
				events: eventos,
				initialView: 'dayGridMonth',
				headerToolbar: {
					left: 'prev,today,next',
					center: 'title',
					right: 'timeGridDay,timeGridWeek,dayGridMonth' // user can switch between the two
				},
				locale: 'en',

				// Cuando se hace click en un evento del calendario
				eventClick: function(info) {
					let eventId = info.event.id;
					window.open(`/evento/${eventId}`, '_blank');
				},

				// Cuando haces click en una fecha en especifico
                dateClick: function(info) {
                }
			})
			calendar.render();
		});
	</script>
@endpush
@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="Suscriptors" url="cPanel / Suscriptors / Index" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Suscriptors List') }}
				</h2>
				<p>
					{{ __('In this section you can find information about the Suscriptors of the system') }}
				</p>
			</div>

			<x-theme.bootstrap5.table.index :collection="$suscriptors" />
			
		</div>
	</section>
@endsection

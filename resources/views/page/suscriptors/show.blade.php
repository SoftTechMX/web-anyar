@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="Suscriptor Details" url="cPanel / Suscriptors / Details" />
@endsection

@section('content')
	<section class="blog" id="blog">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>
					{{ __('Details') }}
				</h2>
				<p>
                    
				</p>

				<div class="row">
					<p>
						<span class="fw-bold">
							Status:
						</span>

						@if($suscriptor->active == true)
							<span class="badge bg-success">
								SUSCRIBED
							</span>
						@else
							<span class="badge bg-danger">
								UNSUSCRIBED
							</span>
						@endif
					</p>
					<p>
						<span class="fw-bold">
							Email:
						</span>
						<span>
							{{ $suscriptor->email }}
						</span>
					</p>
					<p>
						<span class="fw-bold">
							Created Date:
						</span>
						<span>
							{{ $suscriptor->created_at }}
						</span>
					</p>
					<p>
						<span class="fw-bold">
							Updated Date:
						</span>
						<span>
							{{ $suscriptor->updated_at }}
						</span>
					</p>
				</div>
			</div>
        </div>
    </section>
@endsection
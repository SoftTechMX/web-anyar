@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="Buy This Content Management System" url="Home / Buy Template" />
@endsection

@section('content')

    <section class="pricing" id="pricing">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>
                    {{ __('Welcome to Our Pricing Page') }}
                </h2>
                <p>
                    {{ __("Explore our flexible pricing options and find the perfect plan for your needs. Whether you're starting a new project or looking to upgrade your current website, our premium cms are designed to save you time and elevate your online presence.") }}
                </p>
            </div>

            <x-theme.anyar.price-cards />
        </div>
    </section>

@endsection
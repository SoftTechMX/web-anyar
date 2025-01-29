@extends('layouts.theme.anyar.app')

@section('breadcrumb')
	<x-theme.anyar.breadcrumb titulo="Payment Details" url="Home / Buy Template" />
@endsection

@section('content')
    <div class="row">
        <x-widget.credit-card1 />
    </div>
@endsection
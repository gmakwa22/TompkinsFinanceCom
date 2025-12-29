@extends('layouts.app')

@section('content')

<div class="jumbotron">
    <img src="{{ asset('images/home.png') }}" style="width: 100%;">
</div>

<section class="checout_main">
	<div class="container">
		<div class="jumbotron text-center">
			<h1 class="display-3">Thank You!</h1>
			<p class="lead">
				<strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
				<hr>
			<p>
			</p>
			<p class="lead">
				<a class="btn btn-primary btn-sm" href="{{ url('/')}}" role="button">Continue to homepage</a>
			</p>
		</div>
	</div>
</section> 

@endsection

@extends('layouts.app')

@section('title')
    | Thanks
@endsection

@section('content')

<div class="container">

	<div class="thank-you text-center">
		<h1 class="display-3">{{ $orders->customer-name }} ,Thank You For Your Purchase!</h1>
		<p class="lead"><strong>[product name]</strong> will be shipped to you promptly.</p>
		<hr>
		<p class="lead">
			<a class="btn btn-primary btn-sm" href="{{ url('/') }}" role="button">Continue shopping</a>
		</p>
  	</div>

</div><br>

@endsection

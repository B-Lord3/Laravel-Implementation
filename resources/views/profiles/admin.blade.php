@extends('layouts.app')

@section('title')
    | Admin Dashboard
@endsection

@section('content')

<div class="container">

	<div class="col-md-12">
		<h1>Admin's Dashboard</h1>
	</div>
	<hr>
	<div class="manager-dashboard">
		<div class="dashboard-title">
			<h4>Manage orders:</h4>
		</div>
		<div class="dashboard-container">
			<table class="table table-hover">
			  <thead>
			    <tr>
		    		<th scope="col">Order Number</th>
			    	<th scope="col">Customer Name</th>
			    	<th scope="col">Status</th>
			    	<th scope="col">Orders Details</th>
			    </tr>
			  </thead>
			  <tbody>
			    <!--@foreach($orders as $order)
			    <tr>
			    	<td>{{ $order->order_number }}</td>
			    	<td>{{ $order->customer_name }}</td>
			     	<td>{{ $order->status }}</td>
			     	<td>
						<a href="/orders/{{ $orders->order_number }}">View Details</a> 
			     	</td>
			    </tr>
			    @endforeach-->
			  </tbody>
			</table>
		</div>
	</div>


</div><br>

@endsection

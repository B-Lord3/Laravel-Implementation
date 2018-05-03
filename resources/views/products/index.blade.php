@extends('layouts.master')

@section('title')
    | Products
@endsection

@section('content')
<div class="container clearfix">
	@if(count($products) > 0)
		
		@foreach($products as $product)

			<div class="col-sm-3">
			  <div class="panel">
			    <div class="panel-body">
			    	<div class="product-img-container">
			    		<div class="product-img-container">
			    			<a href="/products/{{ $product->id }}">
					    		<img src="{{ $product->image }}" class="img-responsive" alt="Image">
					    	</a>
				    	</div>
				    	<div class="product-img-overlay"></div>
			    	</div>
			    	
			    </div>
			    <div class="panel-footer">
				    <div class="product-detail-container">
				    	<div class="">
					    	<h4 class="item-name">{{ $product->product_name }}</h4>
					    </div>
					    <div class="price-container">
					    	<div class="price-box">
						    	<span class="item-price">${{ $product->price }}</span>
						    </div>
						    <div class="stock-box">
						    	<span class="
						    		@if($product->quantity > 0)
						    			item-in-stock text-success
						    		@else
						    			item-out-stock text-danger
							    	@endif
							    ">
						    		{{ $product->stock }}
						    	</span>
						    </div>
					    </div>
				    </div>
				</div>
			  </div>
			</div>

		@endforeach
		{{ $products->links() }}
	@else

		<p>No products found</p>

	@endif
</div>
<div class="padding-tb-30"></div>
@include('includes.subscribe')
@endsection
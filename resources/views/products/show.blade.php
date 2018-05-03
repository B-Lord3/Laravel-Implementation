@extends('layouts.master')

@section('title')
    | Products
@endsection

@section('content')
<div class="container clearfix">
	<div class="col-sm-12 text-right">
		<div class="container product-back-btn">
			<a href="/products" class="btn btn-default">Back</a>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<div class="panel-body text-center">
				<div class="product-img-container">
					<div class="product-img-container">
				    	<img src="{{ $product->image }}" class="img-responsive" alt="Image">
			    	</div>
			    	<div class="item-img-overlay"></div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="panel-body">
			    <div class="price-container">
			    	<h2 class="item-name text-primary">{{ $product->product_name }}</h2>
			    	<h4 class="item-price">${{ $product->price }}</h4>
			    	<div class="item-quantity">
				      <input type="number" value="1" min="1">
				    </div>
			    	<br>
			    	<h5 class="description-label">Description:</h5>
			    	<p class="item-description">{{ $product->description }}</p>
			    	<br>
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
			    </div><br>
			    <hr>
			    <div class="item-submission-btn text-right">
			    	@if($product->quantity > 0)
				    	<a href="{{ route('products.addToCart', ['id' =>$product->id]) }}" class="btn btn-danger">Add to Cart</a>
				    	<button class="btn btn-success" type="button">Checkout</button>
			    	@else
						<button class="btn btn-danger" type="button" disabled>Add to Cart</button>
				    	<button class="btn btn-success" type="button" disabled>Checkout</button>
			    	@endif
			    </div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
<div class="padding-tb-30"></div>
@endsection
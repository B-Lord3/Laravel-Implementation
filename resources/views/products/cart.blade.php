@extends('layouts.master')

@section('title')
    | Shopping Cart
@endsection

@section('content')

<div class="container">

  <div class="shopping-cart">

    <h1>Shopping Cart</h1>

    @if(Session::has('cart'))

    <div class="column-labels">
      <label class="product-image">Image</label>
      <label class="product-details">Product</label>
      <label class="product-price">Price</label>
      <label class="product-quantity">Quantity</label>
      <label class="product-removal">Remove</label>
      <label class="product-line-price">Total</label>
    </div>


    @foreach($products as $product)
    <div class="product">
        <div class="product-image">
          <img src="{{ $product['product']['image'] }}">
        </div>
        <div class="product-details">
          <div class="product-title">{{ $product['product']['product_name'] }}</div>
          <p class="product-description">{{ $product['product']['description'] }}</p>
        </div>
        <div class="product-price">{{ $product['product']['price'] }}</div>
        <div class="product-quantity">
          <input type="number" value="{{ $product['qty'] }}" min="1">
        </div>
        <div class="product-removal">
          <button class="remove-product">
            Remove
          </button>
        </div>
        <div class="product-line-price">{{ $product['product']['price']*$product['qty'] }}</div>
    </div>
    @endforeach


    <div class="totals">
      <div class="totals-item totals-item-total">
        <label>Total</label>
        <div class="totals-value" id="cart-total">{{ $totalPrice }}</div>
      </div>
    </div>

    <div class="checkout-box-btn">  
      <a href="{{ route('checkout') }}" class="checkout btn btn-succes">Checkout</a>
    </div><br>

    @else

      <div class="row">  
        <h3>No Items in Cart..</h3>
      </div><br>

    @endif

  </div><br>
</div><br>


@endsection


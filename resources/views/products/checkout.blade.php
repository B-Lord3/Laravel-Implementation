@extends('layouts.app')

@section('title')
    | Checkout
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h1>{{ __('Checkout') }}</h1>
                    <hr>
                </div>

                <div class="card-body">
                    <form id="checkout-form" class="col-md-12" action="{{ route('checkout') }}" method="post">

                        @if (count($errors))
                            <div class="form-group">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        {{ csrf_field() }}

                        <div class="form-group row">
                            <div class="col-md-12">
                                <h4><span>{{ __('Flat Rate Shipping: ') }}</span><span>{{ __(' $15') }}</span></h4>
                            </div>
                            <div class="col-md-12">
                                <h4><span>{{ __('Tax: ') }}<span><span>{{ __(' 5.6%') }}</span></h4>
                            </div>
                        </div>

                        <div class="form-group row">
                            <h4><label for="gand-price" class="col-md-4 col-form-label text-md-right text-danger">{{ __('Grand Total') }}</label></h4>

                            <div class="col-md-12">
                                <input id="grand-price" type="text" class="form-control" name="grand-price" value="${{ $grandTotal }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row padding-t-30">
                            <p>Please enter your personal information below:</p>
                            <hr>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-12">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4">
                                <label for="city" class="">{{ __('City') }}</label>
                                <div class="col-md-12 no-padding">
                                    <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="state" class="">{{ __('State') }}</label>
                                <div class="col-md-12 no-padding">
                                    <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label for="zip" class="">{{ __('Zip') }}</label>
                                <div class="col-md-12 no-padding">
                                    <input id="zip" type="number" class="form-control{{ $errors->has('zip') ? ' is-invalid' : '' }}" name="zip" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="credit-card" class="col-md-4 col-form-label text-md-right">{{ __('Credit Card Number') }}</label>
                            <div class="col-md-12">
                                <input id="credit-card" type="text" pattern="^\d{4} \d{4} \d{4} \d{4}$" minlength="19" maxlength="19" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="credit-card" placeholder="xxxx xxxx xxxx xxxx">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="city" class="">{{ __('Expiration Date') }}</label>
                            </div>
                            <div class="col-sm-4">
                                <div class="col-sm-6 col-md-6 no-padding">
                                    <input id="city" type="number" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="city" pattern="[0-9]{2}" placeholder="MM" minlength="2" maxlength="2">
                                </div>
                                <div class="col-sm-6 col-md-6 no-padding">
                                    <input id="state" type="number" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="state" pattern="[0-9]{4}"  placeholder="YYYY" minlength="4" maxlength="4">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 no-padding padding-tb-30">
                            <div class="input-field">
                                <button type="submit" class="btn btn-primary">{{ __('Buy Now') }}</button>
                                <input type="hidden" name="order-status" value="{{ __('Pending') }}">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="padding-tb-30"></div>
</div>



@endsection
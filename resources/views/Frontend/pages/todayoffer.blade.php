@extends('Frontend.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="offer_layout mt-4 mb-4">
    <h4>Today's Offer</h4>
      	<div class="row">
            <div class="col">
            	<div class="btn_cart_shop">
		          <div class="row">
		            <div class="">
		              	<strong>There is no today offer. Please go to the home page and buy your products....<br>Today offer coming soon...</strong>
		              	<br>
		              	<a href="{{ route('products') }}" class="btn btn-info btn-lg mt-4">Continue Shopping...</a>
		            </div>
		          </div>
		        </div>
            </div>
        </div>
    </div>
</div>
@endsection
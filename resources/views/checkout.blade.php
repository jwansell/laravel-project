@extends('base')

@section('head')
<link rel="stylesheet" href="CheckoutStyle.css">
<title> Checkout </title>
@endsection

@section('body')

		<div class="dashboard-body">
			<h2>Sandwichland Checkout</h2>
				<div class="items-grid-container">
					Currently in your basket:
					<div class="item-grid-container" v-for="basket in baskets">
						@foreach($basket as $item)
						<!-- <div class="item1">Name: {{session($item)}} </div>
						<div class="item2">No: {{session($quantity)}}
							<div>
								<button class="counter" v-on:click="quantity++">+</button>
								<button class="counter" v-on:click="quantity--">-</button> 
							</div>
						</div>
						<div class="item3">Price: {{session($price)}}</div>  
						<div class="item4"><button class="button">Remove</button></div> -->
						@endforeach
					</div>
				</div>
				<div class="shipping">
				 <form action="api/checkout" method="post" class="container">
				 	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
					<label>Address</label>
				    <input type="text" id="address" name="address" placeholder="Your current address:">

				    <label>Postcode</label>
				    <input type="text" id="postcode" name="postcode" placeholder="Your postcode:">

				    <label>City</label>
				    <input type="text" id="city" name="city" placeholder="Your city:">
				    
					<label>County</label>
				    <input type="text" id="county" name="county" placeholder="Your county:">
				</div>
				<div> </div>
			<button class="button" v-on:click="clearBasket">Clear order</button>
			<!-- <a href= "confirm"> --><button class="button" type="submit">Confirm order</button><!-- </a> -->
			</form>
			<a href= "store"><button class="button">Back to store page</button></a>
		</div>
@endsection
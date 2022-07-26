@extends('base')

@section('head')
<link rel="stylesheet" href="ConfirmStyle.css">
<style>
	.dashboard-body{
		width: 500px;
		padding: 20px;
		margin: auto;
		text-align: center;
		font-size: 1.5em;
		font-family: sans-serif;
		color: #FFD5B0;
		border-radius: 5px;
		background-color: #E09655;
		
	}

	.dashboard-messages {
		
	}

	.user-data{
		width: 500px;
		padding: 20px;
		margin: auto;
		text-align: center;
		font-size: 1.5em;
		font-family: sans-serif;
		color: #FFD5B0;
		background-color: #E09655;
	}

	.button {
		background-color: saddlebrown;
  		color: white;
  		padding: 14px 20px;
  		margin: 8px 0;
  		border: 30px;
  		border-radius: 1000px;
  		cursor: pointer;
  		width: 100%;
	}

	.button:hover {
		opacity: 0.8;
	}

	#message-text {

	}

</style>
<title> Order Confirmation </title>
@endsection

@section('body')
	<div class="dashboard-body">
		<h2>Order Confirmation</h2>
		<div v-for="address in addresses">
			@foreach($addresses as $address)
			<p>Order ID: {{$address->orders->id}}</p>
			<p>Ordered At: {{$address->orders->created_at}}</p> 
				@foreach($address->orders->products as $product) 
					<p>Item: {{$product->item}}</p>
					<p>Quantity: {{$product->quantity}}</p> 
				@endforeach	
			<p>Value: {{$address->orders->order_value}}</p> 
			<!-- <div v-if="addresses.length == 0">Loading...</div> -->
			<p>Shipping Address: {{$address->address}}, {{$address->postcode}}, {{$address->city}}, {{$address->county}}</p>
			@endforeach
		</div>
		<a href="index"><button class="button"> Back To Homepage </button></a>
	</div>
@endsection
@extends('base')

@section('head')
<link rel="stylesheet" href="StoreStyle.css">
<title> Store </title>
@endsection

@section('body')
	<div class="dashboard-body">
		<h2>Welcome to our store page.</h2>
		<!-- <div v-if="products.length == 0">Loading...</div> -->
		<form action="api/basket" method="post">
		<div class="store-items" v-for="product in products">
			@foreach($products as $product)
				<p>Name: {{$product->item}}</p>
				<p>Price: {{$product->price}}</p>
				<p>In Stock: {{$product->stock}}</p>
				<button class="basket" type="submit" action="api/basket">Add To Basket</button>
			@endforeach
			@if(isset($products))
			<x-toastsuccess/>
			@endif
		</div>
		</form>
		<form action="store" method="get">
		<button class="button" v-on:click="fetchProducts">Refresh</button>
		</form>
		<a href= "checkout"><button class="button" >To Checkout</button></a>
	</div>
@endsection
@extends('base')

@section('head')
<link rel="stylesheet" href="OrderStyle.css">
<title> Orders </title>
@endsection

@section('body')
	<h1 class="orders-heading">Keep track of orders on this page.</h1>
		<div class="orders-body">
			<div class="item0">List of orders:</div>	
				<div class="grid-container" v-for="order in orders">
					<div class="item1">User ID</div>
					<div class="item2">Time Ordered</div>
					<div class="item3">Quantity</div>  
					<div class="item4">Item Ordered</div>
					<div class="item5">Value</div>
					@foreach($orders as $order)
					<div>{{$order->id}}</div>
					<div>{{$order->created_at}}</div>
					<div>{{$order->order_products->quantity}}</div>
					<div>{{$order->item}}</div>
					<div>{{$order->order_value}}</div>
					@endforeach 
				</div>
					@if(isset($orders))
					<x-toastsuccess/>
					@endif
			<form action="orders" method="get">
			<button id="refresh" v-on:click="fetchOrders">Refresh</button>
			</form>
		</div>
@endsection
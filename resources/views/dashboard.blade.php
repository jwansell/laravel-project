@extends('base')

@section('head')
<link rel="stylesheet" href="DashboardStyle.css">

<title> User Dashboard </title>
@endsection

@section('body')
	<div class="dashboard-body">
		<h1>Welcome, User!</h1>
		<h2> Sandwich Stats: </h2>
		<p>Date Joined: 23/02/2020</p>
		<p>Sandwiches eaten: 3406</p>
		<p>Hours spent online: 28</p>
		<p>Posts made: 41000</p>
		<App> </App>
	</div>
	<div class="user-data">
		<h2> User Information: </h2>
		<div id='message-text'>
		<!-- 	<div v-if="messages.length == 0">Loading...</div> -->
			<div class="contact-message" v-for="message in messages">
				@foreach ($contacts as $contact)
					<p>Name: {{$contact->fname}} {{$contact->lname}}</p> 
					<p> Email: {{$contact->email}} </p> 
					<p> Message: {{$contact->message}} </p>
				@endforeach
				@if(isset($contacts))
				<x-toastsuccess/>
				@endif
			</div>
		</div>
		<p id='loading-text'></p>
		<form action="dashboard" method="get">
		<button class="button">Refresh</button>
		</form> 
	</div>
@endsection
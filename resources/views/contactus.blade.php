@extends('base')

@section('head')
<link rel="stylesheet" href="ContactStyle.css">
<title>Contact Us!</title>
@endsection

@section('body')
			<div class ="contact-heading">
			<h1>Want to leave a message? Look no further.</h1>
			</div>

			<div class="contact">
			 <form action="api/contact" method="post" class="container">
			 	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				<label for="fname">First Name</label>
			    <input type="text" id="fname" name="fname" placeholder="Your name:">

			    <label for="lname">Last Name</label>
			    <input type="text" id="lname" name="lname" placeholder="Your last name:" >

			    <label for="email">E-Mail</label>
			    <input type="text" id="email" name="email" placeholder="Your E-Mail address:">

			    <label for="message">Message</label>
			    <textarea id="message" name="message" placeholder="Leave your message here." style="height:200px" v-model="messageInput"></textarea>

			    <button id="submit" type="submit">Submit</button>
			 </form>
			</div>
@endsection 
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/main.css">
@yield('head')
<title> Sandwichland Home </title>
</head>

<body>
<div class="top-bar">
	<div class="header">Welcome to sandwichland!</div>
	<ul>
		<li><a class="active" href="index">Index</a></li>
		<li><a href="contact">Contact</a></li>
		<li><a href="store">Store</a></li>
		@auth
		<li><a class="active" href="dashboard">Dashboard</a></li>
		<li><a href="orders">Orders</a></li>
		<li><a class= "logout-link" href="api/logout">Logout</a></li>
		<p class= "username-display">{{ "Hello" }}</p>
		@endauth

		@guest
		<li><a class= "login-link" href="login">Login</a></li>
		@endguest
	</ul> 
</div> 
@yield('body')	

@yield('post-body')

</body>
</html>
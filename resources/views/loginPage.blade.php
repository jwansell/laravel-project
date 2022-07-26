@extends('base')

@section('head')
<link rel="stylesheet" href="/LoginStyle.css">
@endsection

@section('body')
<div class ="login-heading">
<h1>Log-in to Sandwichland below!</h1>
</div>

  <form action="login" method="post" class="container">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <label for="uname"><b>Username</b></label>
    <input id="uname" type="text" placeholder="Enter Username" name="uname">

    <label for="psw"><b>Password</b></label>
    <input id="psw" type="password" placeholder="Enter Password" name="psw">
        
    <button type="submit">Login</button>
  </form>

  <pre>{{ $errors }}</pre>
</div>
@endsection
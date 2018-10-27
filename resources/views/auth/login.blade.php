@extends('layouts.master')

@section('title', 'Sign In | '. config('app.name'))

@section('content')

</div>
    <div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <div class="section">
		<br><br><br>
		<h4><center>Login</center> </h4>
		<br>
    <form class="col s12" method="POST" action="/login">
    {{csrf_field()}}
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="username" class="validate">
          <label for="icon_prefix">Username</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="password" name="password" class="validate">
          <label for="icon_telephone">Password</label>
    
	   </div>
		
		<div class="row">
      <div class="col s12"><button type="submit" class="waves-effect cyan darken-2 btn-small right"><i class="material-icons right">arrow_forward</i>Login</button></div>
   
      </div>
      <a href="/register"><i class="material-icons left">create</i>No account yet? click here to register!</a>
	  
    </form>
  </div>
      </div>
  <br><br><br>
  </div>
@endsection

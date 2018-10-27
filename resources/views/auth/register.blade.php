@extends('layouts.master')

@section('title', 'Registration | '. config('app.name'))

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="section no-pad-bot" id="index-banner">
      <div class="container">
        <div class="section">
		<br><br>
		<h4><center>Registration</center> </h4>
		<br>
		<h5> Personal Information </h5>
		<hr><br>
    <form class="col s12" method="POST" action="/register">
      <div class="row">
    {{csrf_field()}}
        <div class="input-field col s6">
		          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="name">
          <label for="icon_prefix">Full Name</label>
        </div>
		<div class="input-field col s6">
          <i class="material-icons prefix">phone</i> 
          <input id="icon_prefix" type="text" class="validate" name="phone_number">
          <label for="icon_prefix">Contact Number (+63 )</label>
        </div>
		<div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="username">
          <label for="icon_prefix">Username</label>
        </div>
	    	<div class="input-field col s6">
          <i class="material-icons prefix">mail</i>
          <input id="icon_prefix" type="text" class="validate" name="email">
          <label for="icon_prefix">Email</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">address</i>
          <input id="icon_prefix" type="text" class="validate" name="address">
          <label for="icon_prefix">Address</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="password" class="validate" name="password">
          <label for="icon_telephone">Password</label>
        </div>
		
		 <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="icon_telephone" type="password" class="validate" name="password_confirmation">
          <label for="icon_telephone">Confirm Password</label>
        </div>    
		<div class="row">
		
      <div class="col s12"><button class="waves-effect cyan darken-2 btn-small right" type="submit"><i class="material-icons right">arrow_forward</i>Register</button></div>
   
      </div>
      <a href="/login"><i class="material-icons left">create</i>Already have an account? Login here!</a>
	  
    </form>
  </div>
      </div>
  
  </div>
@endsection

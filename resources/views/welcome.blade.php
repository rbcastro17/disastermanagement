@extends('layouts.master')

@section('title', config('app.name'))

@section('content')
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center green-text">Seerena</h1>
      <div class="row center">
        <h5 class="header col s12 red-text light">Alert the community</h5>
      </div>
      <div class="row center">
        <a href="registration.html" class="btn-large waves-effect waves-light purple">Get Started</a>
      </div>
      <br><br>

    </div>
  </div>

    <div class="container">
    <div class="section">
	<hr>
	<h4> <center>Seerena's Objective:</center></h4>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center red-text"><i class="material-icons">announcement</i></h2>
            <h5 class="center">Share their state</h5>

            <p class="light">When natural disaster happens, the community can share their state and inform each other whether their place is safe or not or if they are in need of help. The community can also message the authorities if they need rescue.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center pink-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Inform relatives of your safety</h5>

            <p class="light">When natural disaster happens, Seerena keeps your family and relatives updated on your state whether you are safe, in danger, or in need of rescue.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center grey-text"><i class="material-icons">wb_cloudy</i></h2>
            <h5 class="center">Rainfall, Flood, Suspension</h5>

            <p class="light">Warning about rainfall, flood, and suspension around your area will keep you and your family updated. </p>
          </div>
        </div>
      </div>

    </div>
	<br><br>
	<hr>
	<h4> <center>Features:</center></h4>
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center green-text"><i class="material-icons">notifications</i></h2>
            <h5 class="center">Notification</h5>

            <p class="light">Seerena helps keep your family worry-free by sending notification to your family members to know your state during and after the disaster.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center purple-text"><i class="material-icons">message</i></h2>
            <h5 class="center">Messaging</h5>

            <p class="light">When you are in a state of danger, messaging helps to connect you to the proper authorities that can help you in times of need.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center teal-text"><i class="material-icons">group_add</i></h2>
            <h5 class="center">Group</h5>

            <p class="light">Seerena wants to unite the community by sharing information and details regarding their state, evacuation, and their flood levels. </p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

@endsection
@extends('layouts.master')

@section('title', 'Community')

@section('content')
<div class="card">
    <div class="card-content">
      <textarea></textarea>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
      <li class="tab"><a href="#test4">&nbsp;</a></li>
      <li class="tab"><a href="#test4">&nbsp;</a></li>
      <li class="tab"><a href="#test4">&nbsp;</a></li>
      <li class="tab"><a href="#test4">&nbsp;</a></li>
      <li class="tab"><a href="#test4">&nbsp;</a></li>
      <li class="tab"><a href="#test4">&nbsp;</a></li>
        <li class="tab"><a href="#test4">Post</a></li>

      </ul>
    </div>
    <div class="card-content grey lighten-4">
    
    </div>
  </div>

    <div class="container">
    <div class="section">
	<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s10">
          <textarea  style="resize: none"></textarea>
		   <label for="textarea1">Announcement</label></div>
		   <div class="input-field col s2"><a class="waves-effect waves-light btn">Post</a>
        </div>
      </div>
    </form>
    <ul class="collection">
    <li class="collection-item avatar">
      <img src="images/yuna.jpg" alt="" class="circle">
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle green">insert_chart</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p> 
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">play_arrow</i>
      <span class="title">Title</span>
      <p>First Line <br>
         Second Line
      </p>
      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
    </li>
  </ul>
     </div>
    <br><br>
  </div>
<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Are you sure you want to remove this family?</h4>
	  <br>
      <h6>By removing this family, you won't receive future notifications regarding their state.</h6>
    </div>
    <div class="modal-footer">
      <a href="family.html" class="modal-close waves-effect waves-green btn-flat">Yes</a>
	  <a href="family.html" class="modal-close waves-effect waves-green btn-flat">No</a>
    </div>
  </div>	

@endsection
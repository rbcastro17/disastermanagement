@extends('layouts.master')

@section('title','Home | '. config('app.name'))

@section('content')

<div class="container">
    <div class="section">
	<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s10">
          <form>
        <div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
        </div>
      </div>
    </form>
	    <ul class="collection">
      <li class="collection-item">Result1</li>
      <li class="collection-item">Result2</li>
      <li class="collection-item">Result3</li>
      <li class="collection-item">Result4</li>
    </ul>
	<br>
	 <button data-target="modal1" class="btn modal-trigger green darken-1" onclick="showModal()	"><i class="material-icons left ">create</i>Create Community</button>
	</div>
     </div>
    <br><br>
  </div>
<!-- Modal Structure -->
   <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Add Community</h4>
	  <br>
	  <div class="col s6">Name:</div>
	  <div class="col s6"><input type="text" id="input" ></div>
	  <div class="col s6">Description:</div>
	   <div class="col s6"><input type="text" id="input"></div>
	   	    <div class="modal-footer">
       <button type="submit" class="modal-close waves-effect waves-green btn">Create </button>
    </div>
    </div>
	</div>


@endsection
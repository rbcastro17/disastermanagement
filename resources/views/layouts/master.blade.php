<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
<script>
function logout(){
  document.getElementById("logout-form").submit();
}
</script>
</head>
<body>
  <nav class="green darken-3" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
      @if(Auth::check())
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Community</a></li>
        <li><a href="#">My Family</a></li>
        <li><a href="#">Alerts</a></li>
        <li><a href="">Notification <span class="new badge">4</span></a></li>
        <li><a href="#logout" onclick="logout()" >Logout</a></li> 
        <form action="/logout" method="post" style="display:none" id="logout-form">
                    {{ csrf_field() }}
                </form>       
      @else
      <li><a href="/register">Register</a></li>
      <li><a href="/login">Sign In</a></li>
      @endif
      </ul>

      <ul id="nav-mobile" class="sidenav">
      @if(Auth::check())
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Community</a></li>
        <li><a href="#">My Family</a></li>
        <li><a href="#">Alerts</a></li>
        <li><a href="">Notification <span class="new badge">4</span></a></li>
        <li><a href="#logout" onclick="logout()" >Logout</a></li>   
      @else
      <li><a href="#">Register</a></li>
      <li><a href="#">Sign In</a></li>
      @endif
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
 
 <!--Content -->

@yield('content')

<!-- End OF CONTENT-->
  <footer class="page-footer red darken-4">
    <div class="container">
      <div class="row">
        <div class="col 20 s12">
          <h5 class="white-text">What is Seerena?</h5>
          <p class="grey-text text-lighten-4">The application mainly focuses on the state of a person when a disaster hits their area as well as the notification to the relatives of the user and their immediate community. The application would also warn the users on the state of the rainfall, flooded areas and for any suspensions. As for if a user’s relative has no internet connection, there will be a SMS system for the warning of news. There will be a messaging feature for when a person is in a state of emergency and would need any rescuing. Lastly, the application would not only show the state of danger a person would be in, but also notify if a person is safe.</p>


        </div>
         </div>
    </div>
      </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

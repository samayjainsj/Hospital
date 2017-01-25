<?php
  if (isset($_GET['cancer'])) {
    echo '<!doctype html>
<html lang="en" class="no-js">
<head>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/materialize.min.css">
	   <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	   <link rel="stylesheet" href="css/doctor.css"> <!-- Resource style -->
	   <link rel="stylesheet" href="css/disease.css"> <!-- Resource style -->
        <link rel="stylesheet" href="css/style.css">
	   <script src="js/doctor2.js"></script> <!-- Modernizr -->
	   <title>Doctor</title>
</head>
    
<body>
    
	<center>
        <div class="header row container" style="border-bottom:1px solid #ebf0f5">
        <div class="" style="float:left">
        <strong class=""><i class="fa fa-clock-o"></i> Schedule</strong>: Monday-Saturday-8:00-18:00,Sunday-8:00-14:00</div>    
        <div style="float:right" class=""><a href="index.html" class=" marg-2"><img src="img/envelope.jpg" alt="ict_logo" class=" marg">example@gmail.com</a><i class="fa fa-phone marg"></i>123 4567 890</div>
        </div>
    </center>
<!--Nav Bar -->
        <div class="main_nav">
        <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!" class="cool-link">one</a></li>
        <li><a href="#!" class="cool-link">two</a></li>
        <li><a href="#!" class="cool-link">three</a></li>
        </ul>
        
        
    <nav style="border-bottom:1px solid #ebf0f5">
    <div class="nav-wrapper container" style="padding-top:10px;">
      <a href="#!" class="brand-logo"><img src="img/logo.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" style="padding-top:10px;">
        <li><a class="dropdown-button cool-link-neg" href="#!" data-activates="dropdown1">Home</a></li>
        <li><a class="cool-link-neg" href="badges.html">Services</a></li>
        <li><a class="cool-link-neg" href="collapsible.html">Doctors</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Time Table</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Pages</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Blog</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Contact</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal1">LogIn</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal2">SignUp</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
        </div>
        
        
        <div id="modal1" class="modal">
    <div class="modal-content">
      <h4 class="center-align">LogIn</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">LogIn</a></center>
        
    </div>
  </div>
        
        
        <div id="modal2" class="modal">
    <div class="modal-content">
      <h4 class="center-align">SignUp</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Phone No</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">SignUp</a></center>
    </div>
  </div>
        
    
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
        <script>$(document).ready(function(){
                $(".button-collapse").sideNav();
				$(".dropdown-button").dropdown({hover:true});
                $(".slider").slider({full_width: true});
                $(".slider").slider({time_constant: 300});
                $(".slider").slider({height: 540});
                $(".parallax").parallax();
                $(".modal-trigger").leanModal();
                 $(".tooltipped").tooltip({delay: 50});
                });
        </script>
<script src="js/doctor.js"></script>
<script src="js/doctor1.js"></script> <!-- Resource jQuery -->
</body>
</html>';
  }
  if (isset($_GET['diabetic'])) {
    echo '<!doctype html>
<html lang="en" class="no-js">
<head>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/materialize.min.css">
	   <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	   <link rel="stylesheet" href="css/doctor.css"> <!-- Resource style -->
	   <link rel="stylesheet" href="css/disease.css"> <!-- Resource style -->
	   <script src="js/doctor2.js"></script> <!-- Modernizr -->
	   <title>Doctor</title>
</head>
    
<body>
    
	<center>
        <div class="header row container" style="border-bottom:1px solid #ebf0f5">
        <div class="" style="float:left">
        <strong class=""><i class="fa fa-clock-o"></i> Schedule</strong>: Monday-Saturday-8:00-18:00,Sunday-8:00-14:00</div>    
        <div style="float:right" class=""><a href="index.html" class=" marg-2"><img src="img/envelope.jpg" alt="ict_logo" class=" marg">example@gmail.com</a><i class="fa fa-phone marg"></i>123 4567 890</div>
        </div>
    </center>
<!--Nav Bar -->
        <div class="main_nav">
        <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!" class="cool-link">one</a></li>
        <li><a href="#!" class="cool-link">two</a></li>
        <li><a href="#!" class="cool-link">three</a></li>
        </ul>
        
        
    <nav style="border-bottom:1px solid #ebf0f5">
    <div class="nav-wrapper container" style="padding-top:10px;">
      <a href="#!" class="brand-logo"><img src="img/logo.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" style="padding-top:10px;">
        <li><a class="dropdown-button cool-link-neg" href="#!" data-activates="dropdown1">Home</a></li>
        <li><a class="cool-link-neg" href="badges.html">Services</a></li>
        <li><a class="cool-link-neg" href="collapsible.html">Doctors</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Time Table</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Pages</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Blog</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Contact</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal1">LogIn</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal2">SignUp</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
        </div>
        
        
        <div id="modal1" class="modal">
    <div class="modal-content">
      <h4 class="center-align">LogIn</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">LogIn</a></center>
        
    </div>
  </div>
        
        
        <div id="modal2" class="modal">
    <div class="modal-content">
      <h4 class="center-align">SignUp</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Phone No</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">SignUp</a></center>
    </div>
  </div>
        
    <div class="container">
	<main class="cd-main-content">
		<center><h1 style="font-size:30px;margin-top:50px;color: #0186D5;">Doctors for Cancer</h1></center>
		<section class="cd-gallery">
			<ul>
				
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		
		</main> <!-- cd-main-content -->
    </div>
    
    
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
        <script>$(document).ready(function(){
                $(".button-collapse").sideNav();
				$(".dropdown-button").dropdown({hover:true});
                $(".slider").slider({full_width: true});
                $(".slider").slider({time_constant: 300});
                $(".slider").slider({height: 540});
                $(".parallax").parallax();
                $(".modal-trigger").leanModal();
                });
        </script>
<script src="js/doctor.js"></script>
<script src="js/doctor1.js"></script> <!-- Resource jQuery -->
</body>
</html>';
  }
  if (isset($_GET['heart'])) {
    echo '<!doctype html>
<html lang="en" class="no-js">
<head>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/materialize.min.css">
	   <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	   <link rel="stylesheet" href="css/doctor.css"> <!-- Resource style -->
	   <link rel="stylesheet" href="css/disease.css"> <!-- Resource style -->
	   <script src="js/doctor2.js"></script> <!-- Modernizr -->
	   <title>Doctor</title>
</head>
    
<body>
    
	<center>
        <div class="header row container" style="border-bottom:1px solid #ebf0f5">
        <div class="" style="float:left">
        <strong class=""><i class="fa fa-clock-o"></i> Schedule</strong>: Monday-Saturday-8:00-18:00,Sunday-8:00-14:00</div>    
        <div style="float:right" class=""><a href="index.html" class=" marg-2"><img src="img/envelope.jpg" alt="ict_logo" class=" marg">example@gmail.com</a><i class="fa fa-phone marg"></i>123 4567 890</div>
        </div>
    </center>
<!--Nav Bar -->
        <div class="main_nav">
        <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!" class="cool-link">one</a></li>
        <li><a href="#!" class="cool-link">two</a></li>
        <li><a href="#!" class="cool-link">three</a></li>
        </ul>
        
        
    <nav style="border-bottom:1px solid #ebf0f5">
    <div class="nav-wrapper container" style="padding-top:10px;">
      <a href="#!" class="brand-logo"><img src="img/logo.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" style="padding-top:10px;">
        <li><a class="dropdown-button cool-link-neg" href="#!" data-activates="dropdown1">Home</a></li>
        <li><a class="cool-link-neg" href="badges.html">Services</a></li>
        <li><a class="cool-link-neg" href="collapsible.html">Doctors</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Time Table</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Pages</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Blog</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Contact</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal1">LogIn</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal2">SignUp</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
        </div>
        
        
        <div id="modal1" class="modal">
    <div class="modal-content">
      <h4 class="center-align">LogIn</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">LogIn</a></center>
        
    </div>
  </div>
        
        
        <div id="modal2" class="modal">
    <div class="modal-content">
      <h4 class="center-align">SignUp</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Phone No</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">SignUp</a></center>
    </div>
  </div>
        
    <div class="container">
	<main class="cd-main-content">
		<center><h1 style="font-size:30px;margin-top:50px;color: #0186D5;">Doctors for Cancer</h1></center>
		<section class="cd-gallery">
			<ul>
				
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		
		</main> <!-- cd-main-content -->
    </div>
    
    
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
        <script>$(document).ready(function(){
                $(".button-collapse").sideNav();
				$(".dropdown-button").dropdown({hover:true});
                $(".slider").slider({full_width: true});
                $(".slider").slider({time_constant: 300});
                $(".slider").slider({height: 540});
                $(".parallax").parallax();
                $(".modal-trigger").leanModal();
                });
        </script>
<script src="js/doctor.js"></script>
<script src="js/doctor1.js"></script> <!-- Resource jQuery -->
</body>
</html>';
  }
  if (isset($_GET['spine'])) {
    echo '<!doctype html>
<html lang="en" class="no-js">
<head>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/materialize.min.css">
	   <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	   <link rel="stylesheet" href="css/doctor.css"> <!-- Resource style -->
	   <link rel="stylesheet" href="css/disease.css"> <!-- Resource style -->
	   <script src="js/doctor2.js"></script> <!-- Modernizr -->
	   <title>Doctor</title>
</head>
    
<body>
    
	<center>
        <div class="header row container" style="border-bottom:1px solid #ebf0f5">
        <div class="" style="float:left">
        <strong class=""><i class="fa fa-clock-o"></i> Schedule</strong>: Monday-Saturday-8:00-18:00,Sunday-8:00-14:00</div>    
        <div style="float:right" class=""><a href="index.html" class=" marg-2"><img src="img/envelope.jpg" alt="ict_logo" class=" marg">example@gmail.com</a><i class="fa fa-phone marg"></i>123 4567 890</div>
        </div>
    </center>
<!--Nav Bar -->
        <div class="main_nav">
        <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!" class="cool-link">one</a></li>
        <li><a href="#!" class="cool-link">two</a></li>
        <li><a href="#!" class="cool-link">three</a></li>
        </ul>
        
        
    <nav style="border-bottom:1px solid #ebf0f5">
    <div class="nav-wrapper container" style="padding-top:10px;">
      <a href="#!" class="brand-logo"><img src="img/logo.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" style="padding-top:10px;">
        <li><a class="dropdown-button cool-link-neg" href="#!" data-activates="dropdown1">Home</a></li>
        <li><a class="cool-link-neg" href="badges.html">Services</a></li>
        <li><a class="cool-link-neg" href="collapsible.html">Doctors</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Time Table</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Pages</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Blog</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Contact</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal1">LogIn</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal2">SignUp</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
        </div>
        
        
        <div id="modal1" class="modal">
    <div class="modal-content">
      <h4 class="center-align">LogIn</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">LogIn</a></center>
        
    </div>
  </div>
        
        
        <div id="modal2" class="modal">
    <div class="modal-content">
      <h4 class="center-align">SignUp</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Phone No</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">SignUp</a></center>
    </div>
  </div>
        
    <div class="container">
	<main class="cd-main-content">
		<center><h1 style="font-size:30px;margin-top:50px;color: #0186D5;">Doctors for Cancer</h1></center>
		<section class="cd-gallery">
			<ul>
				
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		
		</main> <!-- cd-main-content -->
    </div>
    
    
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
        <script>$(document).ready(function(){
                $(".button-collapse").sideNav();
				$(".dropdown-button").dropdown({hover:true});
                $(".slider").slider({full_width: true});
                $(".slider").slider({time_constant: 300});
                $(".slider").slider({height: 540});
                $(".parallax").parallax();
                $(".modal-trigger").leanModal();
                });
        </script>
<script src="js/doctor.js"></script>
<script src="js/doctor1.js"></script> <!-- Resource jQuery -->
</body>
</html>';
  }
  if (isset($_GET['neuro'])) {
    echo '<!doctype html>
<html lang="en" class="no-js">
<head>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/materialize.min.css">
	   <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	   <link rel="stylesheet" href="css/doctor.css"> <!-- Resource style -->
	   <link rel="stylesheet" href="css/disease.css"> <!-- Resource style -->
	   <script src="js/doctor2.js"></script> <!-- Modernizr -->
	   <title>Doctor</title>
</head>
    
<body>
    
	<center>
        <div class="header row container" style="border-bottom:1px solid #ebf0f5">
        <div class="" style="float:left">
        <strong class=""><i class="fa fa-clock-o"></i> Schedule</strong>: Monday-Saturday-8:00-18:00,Sunday-8:00-14:00</div>    
        <div style="float:right" class=""><a href="index.html" class=" marg-2"><img src="img/envelope.jpg" alt="ict_logo" class=" marg">example@gmail.com</a><i class="fa fa-phone marg"></i>123 4567 890</div>
        </div>
    </center>
<!--Nav Bar -->
        <div class="main_nav">
        <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!" class="cool-link">one</a></li>
        <li><a href="#!" class="cool-link">two</a></li>
        <li><a href="#!" class="cool-link">three</a></li>
        </ul>
        
        
    <nav style="border-bottom:1px solid #ebf0f5">
    <div class="nav-wrapper container" style="padding-top:10px;">
      <a href="#!" class="brand-logo"><img src="img/logo.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" style="padding-top:10px;">
        <li><a class="dropdown-button cool-link-neg" href="#!" data-activates="dropdown1">Home</a></li>
        <li><a class="cool-link-neg" href="badges.html">Services</a></li>
        <li><a class="cool-link-neg" href="collapsible.html">Doctors</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Time Table</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Pages</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Blog</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Contact</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal1">LogIn</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal2">SignUp</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
        </div>
        
        
        <div id="modal1" class="modal">
    <div class="modal-content">
      <h4 class="center-align">LogIn</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">LogIn</a></center>
        
    </div>
  </div>
        
        
        <div id="modal2" class="modal">
    <div class="modal-content">
      <h4 class="center-align">SignUp</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Phone No</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">SignUp</a></center>
    </div>
  </div>
        
    <div class="container">
	<main class="cd-main-content">
		<center><h1 style="font-size:30px;margin-top:50px;color: #0186D5;">Doctors for Cancer</h1></center>
		<section class="cd-gallery">
			<ul>
				
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		
		</main> <!-- cd-main-content -->
    </div>
    
    
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
        <script>$(document).ready(function(){
                $(".button-collapse").sideNav();
				$(".dropdown-button").dropdown({hover:true});
                $(".slider").slider({full_width: true});
                $(".slider").slider({time_constant: 300});
                $(".slider").slider({height: 540});
                $(".parallax").parallax();
                $(".modal-trigger").leanModal();
                });
        </script>
<script src="js/doctor.js"></script>
<script src="js/doctor1.js"></script> <!-- Resource jQuery -->
</body>
</html>';
  }
  if (isset($_GET['ortho'])) {
    echo '<!doctype html>
<html lang="en" class="no-js">
<head>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/materialize.min.css">
	   <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	   <link rel="stylesheet" href="css/doctor.css"> <!-- Resource style -->
	   <link rel="stylesheet" href="css/disease.css"> <!-- Resource style -->
	   <script src="js/doctor2.js"></script> <!-- Modernizr -->
	   <title>Doctor</title>
</head>
    
<body>
    
	<center>
        <div class="header row container" style="border-bottom:1px solid #ebf0f5">
        <div class="" style="float:left">
        <strong class=""><i class="fa fa-clock-o"></i> Schedule</strong>: Monday-Saturday-8:00-18:00,Sunday-8:00-14:00</div>    
        <div style="float:right" class=""><a href="index.html" class=" marg-2"><img src="img/envelope.jpg" alt="ict_logo" class=" marg">example@gmail.com</a><i class="fa fa-phone marg"></i>123 4567 890</div>
        </div>
    </center>
<!--Nav Bar -->
        <div class="main_nav">
        <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!" class="cool-link">one</a></li>
        <li><a href="#!" class="cool-link">two</a></li>
        <li><a href="#!" class="cool-link">three</a></li>
        </ul>
        
        
    <nav style="border-bottom:1px solid #ebf0f5">
    <div class="nav-wrapper container" style="padding-top:10px;">
      <a href="#!" class="brand-logo"><img src="img/logo.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" style="padding-top:10px;">
        <li><a class="dropdown-button cool-link-neg" href="#!" data-activates="dropdown1">Home</a></li>
        <li><a class="cool-link-neg" href="badges.html">Services</a></li>
        <li><a class="cool-link-neg" href="collapsible.html">Doctors</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Time Table</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Pages</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Blog</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Contact</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal1">LogIn</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal2">SignUp</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
        </div>
        
        
        <div id="modal1" class="modal">
    <div class="modal-content">
      <h4 class="center-align">LogIn</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">LogIn</a></center>
        
    </div>
  </div>
        
        
        <div id="modal2" class="modal">
    <div class="modal-content">
      <h4 class="center-align">SignUp</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Phone No</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">SignUp</a></center>
    </div>
  </div>
        
    <div class="container">
	<main class="cd-main-content">
		<center><h1 style="font-size:30px;margin-top:50px;color: #0186D5;">Doctors for Cancer</h1></center>
		<section class="cd-gallery">
			<ul>
		
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		
		</main> <!-- cd-main-content -->
    </div>
    
    
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
        <script>$(document).ready(function(){
                $(".button-collapse").sideNav();
				$(".dropdown-button").dropdown({hover:true});
                $(".slider").slider({full_width: true});
                $(".slider").slider({time_constant: 300});
                $(".slider").slider({height: 540});
                $(".parallax").parallax();
                $(".modal-trigger").leanModal();
                });
        </script>
<script src="js/doctor.js"></script>
<script src="js/doctor1.js"></script> <!-- Resource jQuery -->
</body>
</html>';
  }
  if (isset($_GET['gastro'])) {
    echo '<!doctype html>
<html lang="en" class="no-js">
<head>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/materialize.min.css">
	   <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	   <link rel="stylesheet" href="css/doctor.css"> <!-- Resource style -->
	   <link rel="stylesheet" href="css/disease.css"> <!-- Resource style -->
	   <script src="js/doctor2.js"></script> <!-- Modernizr -->
	   <title>Doctor</title>
</head>
    
<body>
    
	<center>
        <div class="header row container" style="border-bottom:1px solid #ebf0f5">
        <div class="" style="float:left">
        <strong class=""><i class="fa fa-clock-o"></i> Schedule</strong>: Monday-Saturday-8:00-18:00,Sunday-8:00-14:00</div>    
        <div style="float:right" class=""><a href="index.html" class=" marg-2"><img src="img/envelope.jpg" alt="ict_logo" class=" marg">example@gmail.com</a><i class="fa fa-phone marg"></i>123 4567 890</div>
        </div>
    </center>
<!--Nav Bar -->
        <div class="main_nav">
        <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!" class="cool-link">one</a></li>
        <li><a href="#!" class="cool-link">two</a></li>
        <li><a href="#!" class="cool-link">three</a></li>
        </ul>
        
        
    <nav style="border-bottom:1px solid #ebf0f5">
    <div class="nav-wrapper container" style="padding-top:10px;">
      <a href="#!" class="brand-logo"><img src="img/logo.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down" style="padding-top:10px;">
        <li><a class="dropdown-button cool-link-neg" href="#!" data-activates="dropdown1">Home</a></li>
        <li><a class="cool-link-neg" href="badges.html">Services</a></li>
        <li><a class="cool-link-neg" href="collapsible.html">Doctors</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Time Table</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Pages</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Blog</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Contact</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal1">LogIn</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal2">SignUp</a></li>
        
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
        </div>
        
        
        <div id="modal1" class="modal">
    <div class="modal-content">
      <h4 class="center-align">LogIn</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">LogIn</a></center>
        
    </div>
  </div>
        
        
        <div id="modal2" class="modal">
    <div class="modal-content">
      <h4 class="center-align">SignUp</h4>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      
        
      </div>
        <div class="row">
      
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Phone No</label>
        </div>
      </div>
    </form>
  </div>
        
    </div>
    <div class="modal-footer">
        <center><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">SignUp</a></center>
    </div>
  </div>
        
    <div class="container">
	<main class="cd-main-content">
		<center><h1 style="font-size:30px;margin-top:50px;color: #0186D5;">Doctors for Cancer</h1></center>
		<section class="cd-gallery">
			<ul>
				
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="mix  check2 radio2 option1"><div class="card">
    <div class="card">
  <div class="card-header">
    <img src="https://dermamedical.co.uk/wp-content/uploads/2015/06/Doctor.jpg"/>
  </div>
  <div class="card-content">
    <h3>Samay Kumar Jain</h3>
    <h4 style="text-align:left">Sr.Doctor </h4>
      <br>
      <div class="row">
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Make An Appointment" style="font-size:10px;" href="appointment.php">Appointment</a>
        </div>
    <div class="col s6"><a class="btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="View Full Profile" style="font-size:10px;" href="doc-profile.php">Profile</a></div>
    </div>
    </div>
  </div>
  
</div></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		
		</main> <!-- cd-main-content -->
    </div>
    
    
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
        <script>$(document).ready(function(){
                $(".button-collapse").sideNav();
				$(".dropdown-button").dropdown({hover:true});
                $(".slider").slider({full_width: true});
                $(".slider").slider({time_constant: 300});
                $(".slider").slider({height: 540});
                $(".parallax").parallax();
                $(".modal-trigger").leanModal();
                });
        </script>
<script src="js/doctor.js"></script>
<script src="js/doctor1.js"></script> <!-- Resource jQuery -->
</body>
</html>';
  }
?>

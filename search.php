<?php
session_start();
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
        <link rel="icon" href="medicare.ico" type="image/x-icon"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/materialize.min.css">
<!--	   <link rel="stylesheet" href="css/reset.css">-->
	   <link rel="stylesheet" href="css/style.css">
	   <link rel="stylesheet" href="css/doctor.css"> <!-- Resource style -->
	   <title>Doctor</title>
</head>
    
<body>
<center><div class="header row container" style="border-bottom:1px solid rgba(153, 153, 153, 0.32)">
            <div class="color-2" style="float:left">
                <strong class="color-2"><i class="fa fa-clock-o"></i> Schedule</strong>: Monday-Saturday-8:00-18:00,Sunday-8:00-14:00</div>
            
            <div style="float:right" class="color-2"><a href="index.html" class="color-2 marg-2"><img src="img/envelope.jpg" alt="ict_logo" class="color-2 marg">example@gmail.com</a><i class="fa fa-phone marg"></i>123 4567 890</div>
        </div>
        </center>
<!--Nav Bar -->
        <div class="main_nav">
        <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!" class="cool-link">one</a></li>
  <li><a href="#!" class="cool-link">two</a></li>
  <li><a href="#!" class="cool-link">three</a></li>
</ul>
        
        
    <nav>
    <div class="nav-wrapper container">
      <a href="index.php" class="brand-logo"><img src="img/logo.png"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="cool-link-neg" href="index.php">Home</a></li>
        <li><a class="cool-link-neg" href="badges.html">Services</a></li>
        <li><a class="cool-link-neg" href="doctor.php">Doctors</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Time Table</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Pages</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Blog</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Contact</a></li>
          <?php
        if(isset($_SESSION['uname'])){
                echo '<li><a class="cool-link-neg" href="profile.php">Profile</a></li>
                <li><a class="cool-link-neg" href="logout.php">Logout</a></li>';                        
        }
          else{
              echo '<li><a class="modal-trigger cool-link-neg" href="#modal1">LogIn</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal2">SignUp</a></li>';
          }
          ?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a class="cool-link-neg" href="index.php">Home</a></li>
        <li><a class="cool-link-neg" href="badges.html">Services</a></li>
        <li><a class="cool-link-neg" href="doctor.php">Doctors</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Time Table</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Pages</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Blog</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Contact</a></li>
          <?php
        if(isset($_SESSION['uname'])){
                echo '<li><a class="cool-link-neg" href="profile.php">Profile</a></li>
                <li><a class="cool-link-neg" href="logout.php">Logout</a></li>';                        
        }
          else{
              echo '<li><a class="modal-trigger cool-link-neg" href="#modal1">LogIn</a></li>
        <li><a class="modal-trigger cool-link-neg" href="#modal2">SignUp</a></li>';
          }
          ?>
      </ul>
    </div>
  </nav>
        </div>
        
        
        <div id="modal1" class="modal">
    <div class="modal-content">
        <div class="row">
            <div class="col s12">
        <ul class="tabs">
            <li class="tab col s3"><a class="active" href="#logpat">LogIn As Patient</a></li>
            <li class="tab col s3"><a href="#logdoc">LogIn As Doctor</a></li>
        </ul>
            </div>
            <div id="logpat" class="col s12"><h4 class="center-align">LogIn</h4>
      <div class="row">
    
          <form class="formValidate1" id="formValidate1" method="post" action="check.php" novalidate="novalidate">
                <div class="row">
                                        <div class="input-field col s12">
                                            <label for="uname">Username *</label>
                                            <input id="uname" name="uname" type="text" data-error=".errorTxt10">
                                            <div class="errorTxt10"></div>
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="password">Password *</label>
                                          <input id="password" type="password" name="password" data-error=".errorTxt11">
                                          <div class="errorTxt11"></div>
                                        </div>                        
                </div>
        
                <div class="row">
                                        <div class="col s12">
                                        <center>
                                            <button class="btn waves-effect waves-light right submit" type="submit" name="action">SignUp
<!--                                              <i class="mdi-content-send right"></i>-->
                                            </button></center>
                                        </div>
                </div>
        </form>
  
                </div>
            </div>
                <div id="logdoc" class="col s12">This for Doctor</div>
        </div>
    </div>
    <!--<div class="modal-footer">
        <center><a href="logincheck.php" class="modal-action modal-close waves-effect waves-green btn-flat" style="color:white">LogIn</a></center>
        
    </div>-->
  </div>
        
        
        <div id="modal2" class="modal" style="bottom:10%;">
            
            <div class="card-panel" style="box-shadow:none;">
                            <h4 class="header2 center-align white-text">Sign Up</h4>
                            <div class="row">
                                <form class="formValidate" id="formValidate" method="post" action="signupdata.php" novalidate="novalidate">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="uname">Username*</label>
                                            <input id="uname" name="uname" type="text" data-error=".errorTxt1">
                                            <div class="errorTxt1"></div>
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="cemail">E-Mail *</label>
                                          <input id="cemail" type="email" name="cemail" data-error=".errorTxt2">
                                          <div class="errorTxt2"></div>
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="pass">Password *</label>
                                          <input id="pass" type="password" name="pass" data-error=".errorTxt3">
                                          <div class="errorTxt3"></div>
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="cpassword">Confirm Password *</label>
                                          <input id="cpassword" type="password" name="cpassword" data-error=".errorTxt4">
                                          <div class="errorTxt4"></div>
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="cname">Name *</label>
                                            <input id="cname" type="text" name="cname">
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="cphoneno">Phone No. *</label>
                                            <input id="cphoneno" type="text" name="cphoneno" data-error=".errorTxt5">
                                            <div class="errorTxt5"></div>
                                        </div>
                                        <div class="col s12">
                                            <label for="cdob">Date of Birth *</label>
                                           <input id="dob" type="date" class="datepicker" name="cdob" data-error=".errorTxt6">
                                            <div class="input-field">
                                			    <div class="errorTxt6"></div>
                                			</div>
                                        </div> 
                                        <div class="input-field col s12">
                                            <input id="cadd" type="text" name="cadd" data-error=".errorTxt7">
<!--                                            <textarea id="cadd" name="cadd" class="materialize-textarea validate" data-error=".errorTxt7"></textarea>-->
                                            <label for="cadd">Address *</label>
                                            <div class="errorTxt7"></div>
                                        </div>
                                        <div class="col s12">
                                            <label for="genter_select">Gender *</label>
                                            <p>
                                              <input name="cgender" type="radio" id="gender_male" value="Male" data-error=".errorTxt8">
                                              <label for="gender_male">Male</label>
                                            </p>
                                            <p>
                                              <input name="cgender" type="radio" id="gender_female" value="Female">
                                              <label for="gender_female">Female</label>
                                            </p>
                                            <div class="input-field">
                                                <div class="errorTxt8"></div>
                                            </div>
                            			</div>
                            			<div class="col s12">
                            			    <label for="tnc_select">T&amp;C *</label>
                            			    <p>
                            			        <input type="checkbox" class="checkbox" id="cagree" name="cagree" data-error=".errorTxt9"> 
                            			        <label for="cagree">Please agree to our policy</label>
                            			     </p>
                                            <div class="input-field">
                                                <div class="errorTxt6"></div>
                                            </div>
                            			</div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right submit" type="submit" name="action">SignUp
<!--                                              <i class="mdi-content-send right"></i>-->
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
        </div>
    <center class="container">
        <div><h3 class="center-align color-1">Doctors</h3></div>
        
        <div class="row">
          <form method="post" action="search.php" novalidate="novalidate" method="post">
                <div class="row">
                                        <div class="input-field col s4">
                                            <label for="search" style="color:#9e9e9e;">Search</label>
                                            <input id="search" name="docname" type="search" style="color:#0186D5;">
                                        </div>
                                        <div class="input-field col s4">
                                            <select class="icons" name="department">
                                                <option value="" disabled selected>Select Department</option>
                                                <option value="all" class="left circle">All</option>
                                                <option value="neurologist" class="left circle">Neurologist</option>
                                                <option value="orthopedician" class="left circle">Orthopedician</option>
                                                <option value="gastroenterologist" class="left circle">Gastroenterologist</option>
                                                <option value="general medicine" class="left circle">General Medicine</option>
                                                <option value="diabetician" class="left circle">Diabetician</option>
                                                <option value="cardiologists" class="left circle">Cardiologists</option>
                                                <option value="neurosurgion" class="left circle">Neurosurgion</option>
                                            </select>     
                                        </div>
                                        <div class="col s4" style="margin-top:2%;">
                                            <button class="btn waves-effect waves-light" type="submit" name="action"><i class="material-icons right">search</i> Search
  </button>
        </div>
                </div>
        </form>
  
                </div>
        
    </center>

<?php
$name=strtoupper($_POST['docname']);
$spec=$_POST['department'];

$link = mysqli_connect('localhost', 'root', '');
if(!$link) {
die('Failed to connect to server: ' . mysqli_error());
}
$db = mysqli_select_db($link,'hospital');
if(!$db) {
die("Unable to select database");
}


if(!$name)
{
	if($spec=='all')
	{
		$qry="SELECT employee.E_id,employee.E_Name,doctor.DEPT_NAME,E_Sex,doctor.LICENCE_NO,employee.E_Address,employee.E_Age,employee.E_Email FROM employee INNER JOIN doctor on doctor.D_ID=employee.E_id";
	}
	else
	{
		$qry="SELECT employee.E_id,employee.E_Name,doctor.DEPT_NAME,E_Sex,doctor.LICENCE_NO,employee.E_Address,employee.E_Age,employee.E_Email FROM employee INNER JOIN doctor on doctor.D_ID=employee.E_id where doctor.DEPT_NAME='$spec'";
	}
}
else
{
	if($spec=='all')
	{
		$qry="SELECT employee.E_id,employee.E_Name,doctor.DEPT_NAME,E_Sex,doctor.LICENCE_NO,employee.E_Address,employee.E_Age,employee.E_Email FROM employee INNER JOIN doctor on doctor.D_ID=employee.E_id where employee.E_Name='$name' OR employee.E_Name LIKE CONCAT('%','$name') or employee.E_Name LIKE CONCAT('%','$name','%') or employee.E_Name LIKE CONCAT('$name','%')";
	}
	else
	{
		$qry="SELECT employee.E_id,employee.E_Name,doctor.DEPT_NAME,E_Sex,doctor.LICENCE_NO,employee.E_Address,employee.E_Age,employee.E_Email FROM employee INNER JOIN doctor on doctor.D_ID=employee.E_id where (employee.E_Name='$name' OR employee.E_Name LIKE CONCAT('%','$name') or employee.E_Name LIKE CONCAT('%','$name','%') or employee.E_Name LIKE CONCAT('$name','%')) and doctor.SPECIALISATION='$spec'";
	}
}
//echo $qry;
$result=mysqli_query($link,$qry);
$count = mysqli_num_rows($result);
if($count == 0)
{
	header('location:doctor.php');
}
else{
    $num = $result->num_rows;
    while ($row = mysqli_fetch_assoc($result))
        {
    echo '<center><div class="container">
        <div class="row">
				            <div class="card">
				 	            <img src="img/male.png" class="avatar">      
                                <h5 class="center-align">Dr. '.$row['E_Name'].'</h5>';
        $_SESSION['E_Id']=$row['E_id'];
echo '
                                <p class="center-align" style="margin:4px;">'.ucfirst($row['DEPT_NAME']).'</p>';
        
                                if(isset($_SESSION['uname'])){
        echo '
                                <a class="waves-effect waves-light btn modal-trigger" href="#modal3" margin:4px;>Appointment</a>
                                <a class="waves-effect waves-light btn" style="margin:4px;">Profile</a>';
                                }
          else if (isset($_SESSION['dname'])){
              echo '
                                <a class="waves-effect waves-light btn" style="margin:4px;">Profile</a>';}
        else{
        echo '
                                <a class="waves-effect waves-light btn modal-trigger" href="#modal3" margin:4px;>Appointment</a>
                                <a class="waves-effect waves-light btn" style="margin:4px;">Profile</a>';
                                }
                            echo '
                            </div>
                            <div id="modal3" class="modal" style="width:50%;">
    <div class="modal-content">
      <h4 style="text-decoration:underline;">Select Your Appointment Date & Time</h4>
        <div class="row">
        <div class="col s6 right-align" style="color:white;">
        Doctor Name :
        </div>
        <div class="col s6 left-align" style="color:white">'.$row['E_Name'].'</div>
    </div>
        <div class="row">
        <div class="col s6 right-align" style="color:white;">
        Specialty :
        </div>
        <div class="col s6 left-align" style="color:white">'.ucfirst($row['DEPT_NAME']).'</div>
    </div>
    <form action="appoint.php" method="post">
    <div class="row">
        <div class="col s6 right-align" style="color:white;">
        Appointment Date :
        </div>
                                    <div class="col s6">
                                           <input id="dob" type="date" class="datepicker" name="adate">
                                            <div class="input-field">
                                        </div>
                                        </div>
    </div>
                                        
                                        <div class="row">
                                        <center>
                                        <button class="btn waves-effect waves-light right submit" type="submit" name="action">SignUp
<!--                                              <i class="mdi-content-send right"></i>-->
                                            </button>
                                        </center>
                                        </div>
                                            </form>
    </div>
  </div>';
        $num = $num - 1;
				
				if($num>0){
					$row = $result->fetch_assoc();
                    echo '
                            <div class="card">
				 	            <img src="img/male.png" class="avatar">      
                                <h5 class="center-align">Dr. '.$row['E_Name'].'</h5>';
        $_SESSION['E_Id']=$row['E_id'];
echo '
                                <p class="center-align" style="margin:4px;">'.ucfirst($row['DEPT_NAME']).'</p>';
        
                                if(isset($_SESSION['uname'])){
        echo '
                                <a class="waves-effect waves-light btn modal-trigger" href="#modal3" margin:4px;>Appointment</a>
                                <a class="waves-effect waves-light btn" style="margin:4px;">Profile</a>';
                                }
          else if (isset($_SESSION['dname'])){
              echo '
                                <a class="waves-effect waves-light btn" style="margin:4px;">Profile</a>';}
                    else{
        echo '
                                <a class="waves-effect waves-light btn modal-trigger" href="#modal3" margin:4px;>Appointment</a>
                                <a class="waves-effect waves-light btn" style="margin:4px;">Profile</a>';
                                }
                            echo '
                            </div>
                            <div id="modal4" class="modal" style="width:50%;">
    <div class="modal-content">
      <h4 style="text-decoration:underline;">Select Your Appointment Date & Time</h4>
        <div class="row">
        <div class="col s6 right-align" style="color:white;">
        Doctor Name :
        </div>
        <div class="col s6 left-align" style="color:white">'.$row['E_Name'].'</div>
    </div>
        <div class="row">
        <div class="col s6 right-align" style="color:white;">
        Specialty :
        </div>
        <div class="col s6 left-align" style="color:white">'.ucfirst($row['DEPT_NAME']).'</div>
    </div>
    <form action="appoint.php" method="post">
    <div class="row">
        <div class="col s6 right-align" style="color:white;">
        Appointment Date :
        </div>
                                    <div class="col s6">
                                           <input id="dob" type="date" class="datepicker" name="adate">
                                            <div class="input-field">
                                        </div>
                                        </div>
    </div>
                                        
                                        <div class="row">
                                        <center>
                                        <button class="btn waves-effect waves-light right submit" type="submit" name="action">SignUp
<!--                                              <i class="mdi-content-send right"></i>-->
                                            </button>
                                        </center>
                                        </div>
                                            </form>
    </div>
  </div>';
                            }				
				$num = $num - 1;
				
				if($num>0){
					$row = $result->fetch_assoc();
					echo '
                            <div class="card">
				 	            <img src="img/male.png" class="avatar">      
                                <h5 class="center-align">Dr. '.$row['E_Name'].'</h5>';
        $_SESSION['E_Id']=$row['E_id'];
echo '
                                <p class="center-align" style="margin:4px;">'.ucfirst($row['DEPT_NAME']).'</p>';
        
                                if(isset($_SESSION['uname'])){
        echo '
                                <a class="waves-effect waves-light btn modal-trigger" href="#modal3" margin:4px;>Appointment</a>
                                <a class="waves-effect waves-light btn" style="margin:4px;">Profile</a>';
                                }
          else if (isset($_SESSION['dname'])){
              echo '
                                <a class="waves-effect waves-light btn" style="margin:4px;">Profile</a>';}
                    else{
        echo '
                                <a class="waves-effect waves-light btn modal-trigger" href="#modal3" margin:4px;>Appointment</a>
                                <a class="waves-effect waves-light btn" style="margin:4px;">Profile</a>';
                                }
                            echo '</div>
                            <div id="modal5" class="modal" style="width:50%;">
    <div class="modal-content">
      <h4 style="text-decoration:underline;">Select Your Appointment Date & Time</h4>
        <div class="row">
        <div class="col s6 right-align" style="color:white;">
        Doctor Name :
        </div>
        <div class="col s6 left-align" style="color:white">'.$row['E_Name'].'</div>
    </div>
        <div class="row">
        <div class="col s6 right-align" style="color:white;">
        Specialty :
        </div>
        <div class="col s6 left-align" style="color:white">'.ucfirst($row['DEPT_NAME']).'</div>
    </div>
    <form action="appoint.php" method="post">
    <div class="row">
        <div class="col s6 right-align" style="color:white;">
        Appointment Date :
        </div>
                                    <div class="col s6">
                                           <input id="dob" type="date" class="datepicker" name="adate">
                                            <div class="input-field">
                                        </div>
                                        </div>
    </div>
                                        <div class="row">
                                        <center>
                                        <button class="btn waves-effect waves-light right submit" type="submit" name="action">SignUp
<!--                                              <i class="mdi-content-send right"></i>-->
                                            </button>
                                        </center>
                                        </div>
                                            </form>
    </div>
  </div>';
                            }
				$num = $num - 1;
                            echo '
    </div>
	</div></center>';    
        
    }
}
?>
    
    <section class="row" style="margin: 0;">
              <footer class="page-footer">
          <div class="container">
              <center><div class="row"><img src="img/logo2.png"></div></center>
            <div class="row">
              <div class="col l3 s12 item1">
                <ul class="list1">
                  <li><a href="">home</a></li>
                  <li><a href="">services</a></li>
                  <li><a href="">doctors</a></li>
                  <li><a href="">department</a></li>
                  <li><a href="">pages</a></li>
                    </ul></center>
              </div>
             <div class="col l3 s12 item2">
                <ul class="list2">
                  <li><a href="">blog</a></li>
                  <li><a href="">contact</a></li>
                  <li><a href="">shop</a></li>
                  <li><a href="">faq</a></li>
                  <li><a href="">shortcodes</a></li>
                  </ul>
              </div>
                  <div class="col l3 s12 item3">
                <ul class="list3">
                  <li><a href="">tearms & condition</a></li>
                  <li><a href="">privacy policy</a></li>
                  <li><a href="">legal desclaimer</a></li>
                  <li><a href="">sitemap</a></li>
                  </ul>
              </div>
                  <div class="col l3 s12 item4">
                <ul class="list4">
                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                  </ul>
              </div>

            </div>
                  </div>
          <div class="footer-copyright">
            <div class="container">
                <center>© 2014 Medicarlpro</center>
            </div>
          </div>
        </footer>
            </section>

    
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/additional-methods.min.js"></script>
        <script>$(document).ready(function(){
                $(".button-collapse").sideNav();
				$('.dropdown-button').dropdown({hover:true});
                $('.modal-trigger').leanModal();
                $('select').material_select();
                $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 50, // Creates a dropdown of 15 years to control year
                format: 'yyyy-mm-dd',
                closeOnSelect: true,
                });
                });
        </script> 
      <script type="text/javascript">
    $("#formValidate1").validate({
        rules: {
            uname: {
                required: true,
                remote: {
                    url:"check-log-uname.php",
                    type:"post",
                        },
            },
            password: {
				required: true,
			},
        },
        //For custom messages
        messages: {
            uname:{
                remote: "Username is not Exist",
            },
            password:{
                remote: "Wrong Password",    
            },
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
    </script>
      
      
      
      <script type="text/javascript">
    $("#formValidate").validate({
        rules: {
            uname: {
                required: true,
                minlength: 5,
                remote: {
                    url:"check-uname.php",
                    type:"post",
                        },
            },
            cemail: {
                required: true,
                email:true,
                remote: {
                    url:"check-uname.php",
                    type:"post",
                        },
            },
            pass: {
				required: true,
				minlength: 5,
			},
			cpassword: {
				required: true,
				minlength: 5,
				equalTo: "#pass",
			},
			cphoneno: {
                required: true,
            },
            cname: {
              required: true,
              minlength: 5  
            },
            cadd: {
				required: true,
				minlength: 5
            },
            cgender:"required",
			cagree:"required",
        },
        //For custom messages
        messages: {
            uname:{
                required: "Enter a username",
                minlength: "Enter at least 5 characters",
                remote: "Username is Exist",
            },
            cemail:{
                remote:"Email is Exist",
            },
            curl: "Enter your website",
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
                                
     });
    </script>
</body>
</html>
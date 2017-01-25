<?php
session_start();
?>
<!DOCTYPE html>
  <html>
    <head>
        <link rel="icon" href="medicare.ico" type="image/x-icon"/>
        <title>Medicare Hospital</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="css/normalize.css"  media="screen,projection"/>
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link type="text/css" rel="stylesheet" href="css/style.css">
        

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            body{
                font-family: 'Lato';
            }
        </style>
        <script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(23.1787358,80.02477810000005);
var marker;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
scrollwheel: false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

    </head>

    <body>
        
        <center><div class="header row container" style="1px solid rgba(153, 153, 153, 0.32)">
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
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons color-1">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a class="cool-link-neg" href="index.php">Home</a></li>
        <li><a class="cool-link-neg" href="badges.html">Services</a></li>
        <li><a class="cool-link-neg" href="doctor.php">Doctors</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Time Table</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Pages</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Blog</a></li>
        <li><a class="cool-link-neg" href="mobile.html">Contact</a></li>
          <?php
        if(isset($_SESSION['uname']) || isset($_SESSION['dname'])){
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
            <div id="logpat" class="col s12"><h4 class="center-align">LogIn As Patinent</h4>
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
                <div id="logdoc" class="col s12"><h4 class="center-align">LogIn As Doctor</h4>
            <div class="row">
    
          <form class="formValidate3" id="formValidate3" method="post" action="doc-check.php" novalidate="novalidate">
                <div class="row">
                                        <div class="input-field col s12">
                                            <label for="uname">Username *</label>
                                            <input id="uname" name="uname" type="text" data-error=".errorTxt12">
                                            <div class="errorTxt12"></div>
                                        </div>
                                        <div class="input-field col s12">
                                          <label for="password">Password *</label>
                                          <input id="password" type="password" name="password" data-error=".errorTxt13">
                                          <div class="errorTxt13"></div>
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
        
        
        
        
        <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/1.jpg"> <!-- random image -->
      </li>
      <li>
        <img src="img/2.jpg"> <!-- random image -->
        <div class="caption left-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="img/3.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
      <li>
        <img src="img/4.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3></h3>
          <h5 class="light grey-text text-lighten-3"></h5>
        </div>
      </li>
    </ul>
  </div>
        
        <section>
        <div class="container">
            <center><h1 style="color:#0186D5;">Centres of Excellence</h1>
                <p style="color:#7184A5;margin-bottom:15px;">Combining the best specialists and equipment to provide you nothing short of the best in healthcare</p></center>
       <div class="owl-carousel">
           <div><a href='disease.php?cancer=true'><img src="img/cancer-care.png"><center style="margin-top:10px; font-size:20px; color:#7184A5;">Cancer</center></a></div>
           <div><a href='disease.php?diabetic=true'><img src="img/diabetic.png"><center style="margin-top:10px; font-size:20px; color:#7184A5;">Diabetic</center></a></div>
           <div><a href='disease.php?heart=true'><img src="img/heart.png"><center style="margin-top:10px; font-size:20px; color:#7184A5;">Heart</center></a></div>
           <div><a href='disease.php?spine=true'><img src="img/spine.png"><center style="margin-top:10px; font-size:20px; color:#7184A5;">Spine</center></a></div>
           <div><a href='disease.php?neuro=true'><img src="img/neurosciences.png"><center style="margin-top:10px; font-size:20px; color:#7184A5;">Neuro Science</center></a></div>
           <div><a href='disease.php?ortho=true'><img src="img/orthopaedics.png"><center style="margin-top:10px; font-size:20px; color:#7184A5;">Orthopaedics</center></a></div>
           <div><a href='disease.php?gastro=true'><img src="img/gastroenterology.png"><center style="margin-top:10px; font-size:20px; color:#7184A5;">Gastroenterology</center></a></div>
            </div> 
        </div>   
        </section>
<!--
        <section class="row quick-links">
        <div class="container">
            <div class="row">
            <div class="col l4 m12 s12">
                <div class="m0 inner" style="background-color: #43b9f6;">
                <div class="heading m0">
                    <h5>
                    Quick Help
                    </h5>
                    <h3>Emergency Cases</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectet uam porttitor, nunc et fringilla.</p>
                    <a href="#" class="cool-link">Contact us now</a>
                </div>
                </div>
                <div class="col l4 m12 s12">
                <div class="m0 inner" style="background-color: #6686ff;">
                <div class="heading m0">
                    <h5>
                    In OUR COUNTRY
                    </h5>
                    <h3>263 Branches</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectet uam porttitor, nunc et fringilla.</p>
                    <a href="#" class="cool-link">Nearest Location</a>
                </div>
                </div>
                <div class="col l4 m12 s12">
                <div class="m0 inner" style="background-color: #9878ff;">
                <div class="heading m0">
                    <h5>
                    SMOOTH AND EASY
                    </h5>
                    <h3>Online bill system </h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectet uam porttitor, nunc et fringilla.</p>
                    <a href="#" class="cool-link">pay your bill now</a>
                </div>
                </div>
            </div>
            </div>
        </section>
-->
        <section class="row" style="margin-top:6%">
        <center class="title"><h5>GET WELL SOON</h5>
            <h3>MEDICALPRO SERVICES</h3>
            <div class="line"></div></center>
        </section>
        
        
        <div class="parallax-container">
      <div class="parallax"><img src="img/parrlax.jpg"></div>
          <div class="container" style="padding-top:54px">
          <div class="row">
              <div class="col l8 m9 s12 parrl"><h5>ONLINE HASSLE FREE APPOINTMENT BOOKING</h5>
              <h6>Some text here</h6>
              </div>
              <div class="col l4 m3 s12"style="padding-top:28px">
              <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Book Your Appointment</a>
              </div>
          </div>
          </div>
            
    </div>
        <div id="googleMap" style="width:auto;height:380px;"></div>
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
                <center>Developed By <a href="webteam.php" target="_blank">Alpha Coders</a></center>
            </div>
          </div>
        </footer>
            </section>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!--      <script src="js/jquery.js"></script>-->
      <script src="js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/additional-methods.min.js"></script>
        <script>$('.main_nav').scrollToFixed();</script>
        <script>$(document).ready(function(){
                $(".button-collapse").sideNav();
				$('.dropdown-button').dropdown({hover:true});
                $('.slider').slider({full_width: true});
                $('.slider').slider({time_constant: 300});
                $('.slider').slider({height: 400});
                $('.parallax').parallax();
                $('.modal-trigger').leanModal();
                $(".owl-carousel").owlCarousel();
                $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 50, // Creates a dropdown of 15 years to control year
                format: 'yyyy-mm-dd',
                closeOnSelect: true,
                });
                });
        </script>
      <script>var owl = $('.owl-carousel');
owl.owlCarousel({
    items:6,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('autoplay.play.owl',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('autoplay.stop.owl')
})
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
                remote: "Username does not Exist",
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
    $("#formValidate3").validate({
        rules: {
            uname: {
                required: true,
                remote: {
                    url:"check-doc-uname.php",
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
                remote: "Username does not Exist",
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
                remote: "Username Exists",
            },
            cemail:{
                remote:"Email Exists",
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
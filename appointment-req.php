<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" rel="stylesheet" type="text/css">
      
    <link rel="stylesheet" href="css/profile1.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
            body{
                font-family: 'Lato';
            }
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
      if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
      $dname=$_SESSION['dname'];
        $qry="SELECT E_Name from employee where E_id=$dname";
          $results = mysqli_query($conn,$qry);
          $row = mysqli_fetch_assoc($results);
    echo '
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title"><a href="index.php"><img src="img/logo.png"></a></span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item"><a href="logout.php">Log Out</a></li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="img/male.png" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>'.$row['E_Name'].'</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@example.com</li>
              <li class="mdl-menu__item">info@example.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="index.php">Home</a>
          <a class="mdl-navigation__link" href="appointment-req.php">Appointment Request</a>
          <a class="mdl-navigation__link" href="medicine.php">Upcoming Appointment</a>
          <a class="mdl-navigation__link" href="labreport.php">Get Lab Report</a>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100" style="margin-top:3%;">
        <center>
      <h5></h5>
      </center>
        <center>
        <table class="bordered">
        <thead>
          <tr>
              <th data-field=""> </th>
              <th data-field="name">Patient Id </th>
              <th data-field="price">Appointment Date</th>
          </tr>
        </thead>

        <tbody>
        <form action="sub-app-req.php" method="post">';
          $qry1="SELECT P_ID,APP_DATE from appoints where D_ID=$dname";
          $results = mysqli_query($conn,$qry1);
          while ($row = mysqli_fetch_assoc($results))
        {
          
          echo'
      
          <tr>
            <td><input type="checkbox" name=app[]/></td>
            <td>'.$row['P_ID'].'</td>
            <td>'.$row['APP_DATE'].'</td>
          </tr>
          ';
          }
              echo '
              <tr>
              <center><td colspan="3"><input type="submit" value="Send Them Approval" style="background-color: #0186D5;
    outline: none;
    padding: 0 2rem;
    border: 5px solid #0186D5;"></td></center>
              </tr>
        </form></tbody>
      </table>
        </center>
        

      </main>
    </div>
      <script src="js/profile.js"></script>';
          exit();
      }
      else{ 
          header('location:index.php'); 
          exit(); 
      }
    ?>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>$(document).ready(function(){
    $('input#input_text, textarea#textarea1').characterCounter();}
        </script>
      </body>
</html>
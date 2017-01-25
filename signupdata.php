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

$uname=$_POST['uname'];
$email=$_POST['cemail'];
$password=$_POST['pass'];
$name=$_POST['cname'];
$phoneno=$_POST['cphoneno'];
$dob=trim($_POST['cdob']);
$add=$_POST['cadd'];
$gender=$_POST['cgender'];
$sql = "INSERT INTO patient (P_ID,P_NAME,P_ADDRESS,P_SEX,P_EMAIL,PASS,P_PHNO,P_DOB) VALUES ($uname,'$name','$add','$gender','$email','$password',$phoneno,'$dob')";
if ($conn->query($sql) === TRUE) {
    echo "Sucessfully Sign Up We are redirected you to Login Page";
    header("Refresh:5; url=index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
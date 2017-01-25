<?php
session_start();
?>
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

$d_id=$_SESSION['E_Id'];
$adate=trim($_POST['adate']);
$p_id=$_SESSION['uname'];

$sql = "INSERT INTO appoints (D_ID,P_ID,APP_DATE) VALUES ($d_id,$p_id,'$adate')";
if ($conn->query($sql) === TRUE) {
    echo "Your Request is Send To doctor wait for Appointment check Your Profile";
    header("Refresh:3; url=index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
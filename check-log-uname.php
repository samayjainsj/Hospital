<?php

if (!empty($_POST['uname']))
                {
        
        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn=mysqli_connect($servername,$username,$password);
        $link=mysqli_select_db($conn,$dbname);
                    $uname = trim($_POST['uname']);
                    $qry = "SELECT * FROM patient WHERE P_ID = $uname";
                    $results = mysqli_query($conn,$qry);
    
                    if(mysqli_num_rows($results) == 1)
                    {
                        echo "true";  //good to register
                    }
                    else
                    {
                        echo "false"; //already registered
                    }
                }


$conn->close();
?>
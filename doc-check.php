<?php


        $servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

$conn=mysqli_connect($servername,$username,$password);
        $link=mysqli_select_db($conn,$dbname);
                    $uname = trim($_POST['uname']);
                    $pass=$_POST['password'];
                    $qry = "SELECT D_ID FROM doctor WHERE D_ID = $uname AND PASS = '$pass'";
                    $results = mysqli_query($conn,$qry);
                    
                        if(mysqli_num_rows($results) == 1)
                                {
                                    echo "Good to Register We are redirect you :";  //good to register
                                    session_start();
                                    $_SESSION['IS_AUTHENTICATED'] = 1;
                                    $_SESSION['dname'] = $uname;
                                    header("Refresh:1; url=doc-profile.php");
                                }
                        else
                                {
                                    echo "Invalid Password For $uname: <br>"; //already registered
                                    header("Refresh:5; url=index.php");
                                }

//$name=$_POST['uname'];
//$pass=$_POST['password'];
//
//$qry="select * from patient where username='$name' AND password='$pass'";
//            if($conn->query($qry) === TRUE) {
//                    echo "Sucessfully Login We are redirected you";
//                    header("Refresh:2; url=profile.php");
//            } 
//            else {
//                    echo "Invalid Password For $name: <br>";
//                    header("Refresh:2; url=index.php");
//}

?>
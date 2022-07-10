<?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// Create connection
$con = mysqli_connect("localhost", "root", "", "cms");

// Check connection
if(mysqli_connect_error()){
    echo"<script>alert('cannot connect to the database');</script>";
    exit();
}
else{
    // echo "Connected successfully";
}
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>

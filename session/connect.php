<?php

//$con=mysqli_connect("localhost","root","","sht_renswale");

$con=mysqli_connect("localhost","root","","session");


// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
 // echo "Connected successfully";


?>
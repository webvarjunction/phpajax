<?php
//Database Details
$server = "localhost";
$username = "phpajax";
$password = "php@123";
$db_name = "phpajax";

//Database connection
$conn = mysqli_connect($server, $username, $password, $db_name);

if(!$conn){
    die("Connection Failed : " . mysqli_error($conn));
}


?>
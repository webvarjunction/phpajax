<?php
include_once('myconnections/myconnect.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$sql = "INSERT INTO students (fname, lname) VALUES ('{$first_name}', '{$last_name}')";
if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

?>
<?php
include_once('myconnections/myconnect.php');
$student_id = $_POST['uid'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$sql = "UPDATE students SET fname='{$first_name}', lname='{$last_name}' WHERE id={$student_id}";

if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}
?>
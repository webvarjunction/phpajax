<?php
include_once('myconnections/myconnect.php');

$student_id = $_POST['sid'];

$sql = "DELETE FROM students WHERE id={$student_id}";
if(mysqli_query($conn, $sql)){
    echo 1;
}else{
    echo 0;
}

?>
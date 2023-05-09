<?php
session_start();

$customer_email = $_GET['customer_email'];

include("connection.php");

$qry = "DELETE FROM signupform where customer_email = '$customer_email';'
DELETE FROM booking WHERE customer_email = '$customer_email' ";

$result = mysqli_query($con , $qry);

if(isset($result) && $result != ""){
    $_SESSION['msg'] = "Successfully deleted";
    header("location: ../showRecord.php");
}
else{
    $_SESSION['msg'] = "Some Error in Deletion";
    header("location: ../showRecord.php");
}

?>
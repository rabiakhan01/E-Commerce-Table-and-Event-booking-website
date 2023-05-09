<?php
session_start();

$customer_id = $_POST['customer_id'];
$customer_name= $_POST['customer_name'];
$customer_email= $_POST['customer_email'];
$customer_password= $_POST['customer_password'];

include("connection.php");

$qry = "UPDATE signupform set 
customer_name = '$customer_name',
customer_email = '$customer_email'
customer_password = '$customer_password' 
WHERE customer_id = '$customer_id' 
";

$result = mysqli_query($con , $qry);

if(isset($result) && $result != ""){
    $_SESSION['msg'] = "Account updated successfully";
    header("location: ../showRecord.php");
}
else{
    $_SESSION['msg'] = "Account updated successfully";
    header("location: ../updateRecord.php?customer_id=".$customer_id);
}




?>
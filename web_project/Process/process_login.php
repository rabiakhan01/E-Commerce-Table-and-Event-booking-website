<?php
session_start();
$customer_email= $_POST['customer_email'];
$customer_password= $_POST['customer_password'];
include("connection.php");

$qry = " SELECT *FROM signupform
 WHERE customer_email = '$customer_email'
 AND customer_password = '$customer_password' ";

$res= mysqli_query($con , $qry);

if(mysqli_num_rows($res) == 1){
    $arr= mysqli_fetch_array($res);
    $_SESSION['logged_in'] = 1;
    $_SESSION['name'] = $arr['customer_name'];
    $_SESSION['email'] = $arr['customer_email'];
    $_SESSION['success'] = "You are successfully logged in";
    header("location: ../Order.php? cust_id=" . $arr['customer_id']);
    exit();
}
else{
    $_SESSION['login_error']="Email or Password is incorrect";
    header("location: ../LoginForm.php");
}

?>
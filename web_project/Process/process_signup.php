<?php
session_start();
$customer_name= $_POST['customer_name'];
$customer_email= $_POST['customer_email'];
$customer_password= $_POST['customer_password'];
$confirm_password= $_POST['confirm_password'];
include("connection.php");
if($customer_password != $confirm_password){
    $_SESSION['password_error']="Please confirm your password";
    header("location: ../Signup.php");
}
else{

    if (checkEmail($_POST['customer_email'])) {
        $query= "INSERT INTO signupform (customer_name, customer_email, customer_password, confirm_password)
    VALUES ('$customer_name','$customer_email','$customer_password','$confirm_password')";

    $result=mysqli_query($con,$query);
    } else {
        $_SESSION['email_error']= " Email already exists";
    }
}

if(isset($result) && $result != ""){
    $_SESSION['Success']="Your account is created successfully please login to continue";
    header("location: ../LoginForm.php");
}
else{
    $_SESSION['signup_error']="There is some problem to create your account please try again";
    header("location: ../Signup.php");
}

function checkEmail($customer_email) {
    include("connection.php");

    $sql = " SELECT * FROM signupform WHERE customer_email = '$customer_email'";
    $res= mysqli_query($con,$sql);

    if (mysqli_num_rows($res) == 0) {
        return true;
    }

    return false;
}


?>

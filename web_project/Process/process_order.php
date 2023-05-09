<?php
session_start();
$customer_id = $_GET['cust_id'];
$customer_name= $_POST['customer_name'];
$customer_email= $_POST['customer_email'];
$order_subject = $_POST['order_subject'];
$booking_date = $_POST['booking_date'];
$persons = $_POST['persons'];
$order_description = $_POST['order_description'];
include("connection.php");

    $query= "INSERT INTO booking (customer_id,customer_name, customer_email, order_subject, booking_date, persons, order_description)
    VALUES ('$customer_id','$customer_name','$customer_email','$order_subject','$booking_date', '$persons', '$order_description')";

    $result=mysqli_query($con , $query);


if(isset($result) && $result != "")
{
    $_SESSION['booking_success']="Your booking is successfully registered.";
    header("location: ../index.php");
}
else
{
    $_SESSION['booking_error']="There is some problem to create your account please try again";
    header("location: ../Order.php");
}
?>
<?php
session_start();
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1)
{
?>
<?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    if(isset($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }

    include('Process/connection.php');

    $qry = "SELECT *FROM booking";
    $res = mysqli_query($con , $qry);

    if(isset($res) && $res != ""){
    ?>
<center>
    <h2>
        <a href="showRecord.php">Sign Up</a>|<a href="order.php">Order</a>
    </h2>
    <h3>Order Records</h3>
    <table border="2">
        <tr>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Order Subject</th>
            <th>Booking Date</th>
            <th>Persons</th>
            <th>Description</th>
            <th>Order Date</th>
            <th>Action</th>
        </tr>
        <?php
   while($arr = mysqli_fetch_array($res))
   {
   ?>
        <tr>
            <td><?php echo $arr['customer_name'] ?></td>
            <td><?php echo $arr['customer_email'] ?></td>
            <td><?php echo $arr['order_subject'] ?></td>
            <td><?php echo $arr['booking_date'] ?></td>
            <td><?php echo $arr['persons'] ?></td>
            <td><?php echo $arr['order_description'] ?></td>
            <td><?php echo $arr['Order_Date_Time'] ?></td>
            <td>
                <a href="process_delete.php?var = <?php echo $arr['order_id']?> ">|</a>Delete |
                <a href="process_update.php?var = <?php echo $arr['order_id']?> ">Update</a>
            </td>
        </tr>
        <?php      
    }
    ?>
    </table>
    <?php
    }
else{
    echo "some error";
}
    ?>
</center>

<?php
}
else{
    $_SESSION['err_msg'] = "You cannot access the page, login please.";
        header("location: LoginForm.php");
}
    
    ?>
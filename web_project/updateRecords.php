<?php
session_start();
$customer_id = $_GET['customer_id'];
?>
<html>
    <head>
        <title>Update Records</title>
    </head>
    <body>
    <center>
    <table>
        <?php
        include('connection.php');

        $qry = "SELECT *FROM signupform WHERE customer_id = '$customer_id' ";

        $res = mysqli_query($con , $qry);

        if(mysqli_num_rows($res) == 1)
        {
            $arr = mysqli_fetch_array($res);
        ?>
        <form action="Process/process_update.php" method="post">
            <tr>
                <td>Name</td>
                <td><input type="text" name="customer_name" value = "<?php echo $arr['customer_name'];?>">
            </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="customer_password" value = "<?php echo $arr['customer_password'];?>">
            </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="Update" class="btn textstyle"
                        style=" width: 200px; height: 50px; margin-top: 10px; margin-bottom: 20px; "><br>
                </td>
            </tr>
        </form>
    </table>
    <?php
    }
    ?>
</center>
    </body>
</html>
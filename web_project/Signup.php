<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Curry Kingdom</title>
    <link rel="stylesheet" href="style.css">
    <!--font awesome-->
    <script src="https://kit.fontawesome.com/cd818882e1.js" crossorigin="anonymous"></script>
</head>

<body>

    <div id="container">
        <header>
            <div id="styleMenu">
                <span id="name">Curry. KingDOM</span>
                <img src="images/project_icon.png" alt="porject_icon" class="logo">

            </div>
        </header>
    </div>
    <center>
    <div class="signup-form">
           <?php
           if(isset($_SESSION['signup_error']))
           {
            echo $_SESSION['signup_error'];
            unset($_SESSION['signup_error']);
           }
           if(isset($_SESSION['password_error']))
           {
            echo $_SESSION['password_error'];
            unset($_SESSION['password_error']);
           }
           if(isset($_SESSION['email_error']))
           {
            echo $_SESSION['email_error'];
            unset($_SESSION['email_error']);
           }
           ?>
            <form action="Process/process_signup.php" method= "POST">
                <h3 class="login-style">Sign Up</h3>
                <table>
                <tr>
                        <td><input type="text" name="customer_name" placeholder="Enter name"></td>

                    </tr>
                    <tr>
                        <td><input type="email" name="customer_email" placeholder="Enter email"></td>

                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="customer_password" placeholder="Enter password">
                        </td>
                    </tr>
                    <tr>
                        <td><input type="password" name="confirm_password" placeholder="Confirm password"></td>

                    </tr>
                </table>
                <input type="submit" value="Sign Up" class="btn textstyle"
                        style=" width: 200px; height: 50px; margin-top: 10px; margin-bottom: 20px "><br>
                        <span class="textstyle">Already have an account
                            <a href="LoginForm.php" class="sign_in">Sign In</a>
                        </span>

            </form>
      
    </div>
    <center>


    <script src="script.js"></script>
</body>

</html>
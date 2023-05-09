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
    <div class="login-form">
           <?php
           if(isset($_SESSION['login_error'])){
           echo $_SESSION['login_error'];
            unset($_SESSION['login_error']);
           }
           ?>
            <form action="Process/process_login.php" method="POST">
                <h3 class="login-style">Login</h3>
                <span class="textstyle">We'll check if you have an account</span>
                <table>
                    <tr>
                        <td><input type="email" name="customer_email" placeholder="Enter email"></td>

                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="customer_password" placeholder="Enter password">
                        </td>
                    </tr>
                </table>
            
                <input type="submit" value="Log In" class="btn textstyle"
                        style=" width: 200px; height: 50px; margin-top: 10px; margin-bottom: 20px; "><br>
                        <span class="textstyle">Not a member
                            <a href="Signup.php" class="sign_in">Sign Up</a>
                        </span>

            </form>
      
    </div>
    <center>


    <script src="script.js"></script>
</body>

</html>
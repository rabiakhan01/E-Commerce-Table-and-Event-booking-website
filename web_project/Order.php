<?php
session_start();
$cust_id = $_GET['cust_id'];

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
                <div id="navbar">
                    <nav>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Menu</a></li>
                            <li><a href="">Events</a></li>
                            <li><a href="">Gallery</a></li>
                            <li><a href="">About Us</a></li>
                            <li><button class="btn">Book A Table</button></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>
    <div class="data">
        <!-- #region -->
        <span class="textstyle">Enjoy Your Healthy Delicious Meal</span><br>
        <span class="textstyle2">Treat Your Appetite</span><br>
        <span class="textstyle">Welcome the to the Curry. KinDOM. Bringing Pakistan's first food discovery platform
            for
            real foodies.</span><br>
        <span class="textstyle">Search your favorite food, give reviews, check out amazing recipes of top chefs and
            a
            lot more.</span><br>
        <div class=" icons">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>

    <div class="order_now">
        <div class="location">
            <table>
                <tr>
                    <td>
                        <i class="fa-solid fa-location-dot">
                    </td>
                    <td style="padding-top: 80px;">
                        <span>Location:</span><br>
                        <span>Chungi Amar Sidhu Babar Chowk Lahore.</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-clock">
                    </td>
                    <td style="padding-top: 80px;">
                        <span>Open Hours:</span><br>
                        <span>Sunday-Friday</span><br>
                        <span>10:00 AM - 23:00 PM</span>
                    </td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-envelope"></i></td>
                    <td style="padding-top: 80px;">
                        <span>Email:</span><br>
                        <span>rabiakham789@gmail.com</span><br>
                    </td>
                </tr>
                <tr>
                    <td><i class="fa-solid fa-phone"></i></td>
                    <td style="padding-top: 80px;">
                        <span>Call:</span><br>
                        <span>+92 3444002102</span><br>
                    </td>
                </tr>
            </table>
        </div>
        <div class="formData">
            <form action="Process/process_order.php?cust_id=<?php echo $cust_id ?>" method = "POST">
                <table>
                    <tr>
                        <td><input type="text" name="customer_name" placeholder="Your Name"></td>
                        <td>
                            <input type="email" name="customer_email" placeholder="Your Email">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="text" name="order_subject" placeholder="Subject" style="width: 715px;">
                        </td>
                    </tr>

                    <tr>
                        <td><input type="date" name="booking_date" placeholder="Date"></td>
                        <td><input type="number" name="persons" placeholder="Number of Person"></td>
                    </tr>

                </table>
                <textarea name="order_description" id="description" cols="95" rows="15" placeholder="Message"></textarea><br>
                 <input type="submit" value="Book A Table Now" class="btn" style=" width: 200px; height: 50px; margin-top: 50px; margin-left: 25px" >
            </form>
        </div>

    </div>
    <footer>
        <div class="footer">
            <table>
                <tr>
                    <td>
                    <th>Curry. Kingdom</th>
                    </td>
                    <td>
                    <th>Projects</th>
                    </td>
                    <td>
                    <th>Contact</th>
                    </td>
                    <td>
                    <th>Services</th>
                    </td>
                </tr>
                <tr>
                    <td>
                    <th>
                        <span>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</span><br>
                        </td>
                    <td>
                    <th>
                        <ul>
                            <li>Web Design</li>
                            <li>CSS3</li>
                            <li>HTML5</li>
                            <li>JavaScript</li>
                            <li>PHP</li>
                        </ul>
                    </th>
                    </td>
                    <td>
                    <th>
                        <ul>
                            <li>Design</li>
                            <li>Front-end</li>
                            <li>Code</li>
                            <li>Developer</li>
                            <li>Back-end</li>
                        </ul>
                    </th>
                    </td>
                    <td>
                    <th>
                        <ul>
                            <li>Chungi Amar Sidhu Babar Chowk, Quaid Milt Colony, Lahore</li>
                            <li>03444002102</li>
                            <li>Mahanoor@gmail.com</li>
                            <li>rabiakham789@gmail.com</li>
                            <li>Momal@gmail.com</li>
                        </ul>
                    </th>
                    </td>
                </tr>
                <tr>
                    <td>
                    <th>
                        <p>Connect</p>

                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </th>
                    </td>
                </tr>
            </table>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>
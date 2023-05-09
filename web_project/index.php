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
                            <li><a href="LoginForm.php"><button class="btn">Book A Table</button></a></li>
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
        <span class="textstyle">Welcome the to the Curry. KinDOM. Bringing Pakistan's first food discovery platform for
            real foodies.</span><br>
        <span class="textstyle">Search your favorite food, give reviews, check out amazing recipes of top chefs and a
            lot more.</span><br>
        <div class=" icons">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>
    <div class="foodcategory">
        <div class="div30">
            <span class="parastyle">SELECT YOUR FAVOURIT MEAL</span><br>
            <span class="parastyle1">POPULAR MEALS</span><br>
            <button class="btn-style" onclick="show_breakfast()">BREAKFAST</button><br>
            <button class="btn-style" onclick="show_lunch()">LUNCH</button><br>
            <button class="btn-style" onclick="show_dinner()">DINNER</button><br>
            <button class="btn-style" onclick="show_drinks()">DRINKS</button>
        </div>
        <div class="div70">
            <div id="breakfast">
                <h3 class="parastyle1">Breakfast</h3>
                <div class="img">
                    <figure class="fig">
                        <img src="images/tea.png" style="width: 300px; height: 2o0px"><br>
                        <caption class="parastyle">Double bread with price</caption>
                    </figure>
                    <figure class="fig">
                        <img src="images/no-back-sandwich.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                </div>
                <div class="img">
                    <figure class="fig">
                        <img src="images/white-omlit.jpg" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                    <figure class="fig">
                        <img src="images/6-2-juice-transparent.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                </div>

            </div>
            <div id="lunch">
                <h3 class="parastyle1">lunch</h3>
                <div class="img">
                    <figure class="fig">
                        <img src="images/chees-pizza.png" style="width: 300px; height: 2o0px"><br>
                        <caption class="parastyle">Double bread with price</caption>
                    </figure>
                    <figure class="fig">
                        <img src="images/chicken-burger.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                </div>
                <div class="img">
                    <figure class="fig">
                        <img src="images/biryani.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                    <figure class="fig">
                        <img src="images/egg-sandwich.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                </div>

            </div>

            <div id="dinner">
                <h3 class="parastyle1">Dinner</h3>
                <div class="img">
                    <figure class="fig">
                        <img src="images/kabab.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Double bread with price</caption>
                    </figure>
                    <figure class="fig">
                        <img src="images/chinese rice.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                </div>
                <div class="img">
                    <figure class="fig">
                        <img src="images/chicken-karahi.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                    <figure class="fig">
                        <img src="images/butter nan.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                </div>

            </div>

            <div id="drinks">
                <h3 class="parastyle1">Drinks</h3>
                <div class="img">
                    <figure class="fig">
                        <img src="images/coca-cola.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Double bread with price</caption>
                    </figure>
                    <figure class="fig">
                        <img src="images/cold-coffe.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                </div>
                <div class="img">
                    <figure class="fig">
                        <img src="images/mojito.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                    <figure class="fig">
                        <img src="images/hot capuccino.png" style="width: 300px; height: 200px"><br>
                        <caption class="parastyle">Fresh juice with price </caption>
                    </figure>
                </div>

            </div>

        </div>
        <!-- #region -->
    </div>
    <div class="desserts">
        <center>
            <p class="parastyle">SELECT YOUR FAVOURIT DESSERT</p>
            <p class="parastyle1">POPULAR DESSERTS</p>
        </center>
        <div class="flex1">
            <div class="d30">
                <img src="images/kheer.png" alt="kheer" style="width: 170px; height:170px;">
                <span class="parastyle">Kheer</span>
            </div>
            <div class="d30">
                <img src="images/muffin.png" alt="kheer" style="width: 150px; height:150px;">
                <span class="parastyle">Swaet Muffin</span>
            </div>
            <div class="d30">
                <img src="images/pancake.png" alt="kheer" style="width: 130px; height:130px;">
                <span class="parastyle">PanCake</span>
            </div>
            <div class="d30">
                <img src="images/custard.png" alt="kheer" style="width: 170px; height:170px;">
                <span class="parastyle">Custard</span>
            </div>
            <div class="d30">
                <img src="images/passtry.png" alt="kheer" style="width: 150px; height:150px;">
                <span class="parastyle">Passtry</span>
            </div>
        </div>
    </div>
    <div class="testinomial">
        <div class="d100">
            <div class="slider">
                <p class="parastyle">TESTIMONIALS</p>
                <p class="parastyle1">Satisfied Customers</p>
                <div class="mySlides fade">
                    <img src="images/avatar1.jpeg" class="avatar"><br>
                    <span class="parastyle">John Doe</span><br>
                    <span class="parastyle">CEO, Founder </span><br>
                    <span class="quotes"></span><br>
                    <q class="parastyle">Far far away, behind the word mountains, far from thr countries<br>
                        Vokalia and Consonantia, there live the blind texts.Separated they liev<br>
                        in Bookmarkgrove right at the coast of the Semantics, a large<br>
                        language ocean.
                    </q>
                </div>

                <div class="mySlides fade">
                    <img src="images/avatar2.jpg" class="avatar">
                    <span class="parastyle">James Woodland</span><br>
                    <span class="parastyle">Designer at Facebook </span><br>
                    <span class="quotes"></span><br>
                    <q class="parastyle">When she reached the first hill of the Italic Mountain, she had a last<br>
                        view back of the skyland of her hometown Bookmargroove, the
                        <br> headline of the Alphabet village and subline of her own road, the Line<br>
                        Lane. Pitifil a rethoric question can over her check. Then she continued<br>
                        her way.
                    </q>

                </div>

                <div class="mySlides fade">
                    <img src="images/avatar3.png" class="avatar"><br>
                    <span class="parastyle">Rob Smith</span><br>
                    <span class="parastyle">Product Designer at twitter </span><br>
                    <span class="quotes"></span><br>
                    <q class="parastyle">When she reached the first hill of the Italic Mountain, she had a last<br>
                        view back of the skyland of her hometown Bookmargroove, the
                        <br> headline of the Alphabet village and subline of her own road, the Line<br>
                        Lane. Pitifil a rethoric question can over her check. Then she continued<br>
                        her way.
                    </q>
                </div>

                <div>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>

            <div class="d50">
                <p class="parastyle">GALLERIES</p>
                <p class="parastyle1">PHOTO GALLERIES</p>
                <div class="photo">
                    <img src="images/galler1.jpg" alt="" srcset="">
                    <img src="images/gallery2.jpg" alt="" srcset="">
                </div>
                <div class="photo">
                    <img src="images/gallery3.jfif" alt="" srcset="">
                    <img src="images/gallery4.jpg" alt="" srcset="">
                </div>
                <button class="gallery-btn">MORE GALLERIES</button>
            </div>
        </div>
    </div>

    <div class="Events">
        <center>
            <span class="parastyle"> EVENTS</span><br>
            <span class="parastyle1">Enjoy Our Events</span><br>
            <span class="parastyle">Far far away, behind the word mountains, far from the countries<br> Vokalia and
                Consonantia, there
                live the blind texts.</span>
        </center>
        <div class="w100 fade">
            <div class="SlideImg">
                <img src="images/event1.jpg" alt="" srcset="">
            </div>
            <div class="SlideImg">
                <span class="parastyle1"> $200.99</span><br>
                <span class="parastyle">Birthday Party</span><br>
                <span class="parastyle">Far far away, behind the word mountains, far from the countries<br> Vokalia and
                    Consonantia, there live the blind texts.</span>

                <ul>
                    <li class="parastyle">Away behind the word</li>
                    <li class="parastyle">Bookmarksgrove right at the coast</li>
                    <li class="parastyle">Separated they live</li>
                </ul>
            </div>
        </div>

        <div class="w100 fade">
            <div class="SlideImg">
                <span class="parastyle1"> $199.99</span><br>
                <span class="parastyle">Dinner Party</span><br>
                <span class="parastyle">Far far away, behind the word mountains, far from the countries<br> Vokalia and
                    Consonantia, there live the blind texts.</span>

                <ul>
                    <li class="parastyle">Away behind the word</li>
                    <li class="parastyle">Bookmarksgrove right at the coast</li>
                    <li class="parastyle">Separated they live</li>
                </ul>
            </div>
            <div class="SlideImg">
                <img src="images/event2.jpg" alt="" srcset="">
            </div>
        </div>

        <div class="w100 fade">
            <div class="SlideImg">
                <img src="images/event3.jpg" alt="" srcset="">
            </div>
            <div class="SlideImg">
                <span class="parastyle1"> $400.99</span><br>
                <span class="parastyle">Family Dinner</span><br>
                <span class="parastyle">Far far away, behind the word mountains, far from the countries<br> Vokalia and
                    Consonantia, there live the blind texts.</span>

                <ul>
                    <li class="parastyle">Away behind the word</li>
                    <li class="parastyle">Bookmarksgrove right at the coast</li>
                    <li class="parastyle">Separated they live</li>
                </ul>
            </div>
        </div>

        <div class="w100 fade">
            <div class="SlideImg">
                <span class="parastyle1"> $400.99</span>
                <span class="parastyle">Proposal Dinner</span>
                <span class="parastyle">Far far away, behind the word mountains, far from the countries<br> Vokalia and
                    Consonantia, there live the blind texts.</span>

                <ul>
                    <li class="parastyle">Away behind the word</li>
                    <li class="parastyle">Bookmarksgrove right at the coast</li>
                    <li class="parastyle">Separated they live</li>
                </ul>

            </div>
            <div class="SlideImg">
                <img src="images/event4.jpeg" alt="" srcset="">
            </div>
        </div>
        <center>
            <span class="dotted" onclick="currentSlide(1)"></span>
            <span class="dotted" onclick="currentSlide(2)"></span>
            <span class="dotted" onclick="currentSlide(3)"></span>
            <span class="dotted" onclick="currentSlide(4)"></span>
        </center>

    </div>

    <div class="order">
        <div class="contact">
            <center>
                <span class="parastyle">BOOK A TABLE</span><br>
                <span class="parastyle1">Book A Table Now</span><br>
                <span>Far far away, behind the word mountains, far from the countries<br> Vokalia and Consonantia, there
                    live the blind texts.</span><br>
               <a href="LoginForm.php"><button class="gallery-btn">Book A Table</button></a>

            </center>
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
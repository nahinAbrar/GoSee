<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
    <?php include "login.php" ?>

    <!-- swiper css link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!--Font Awesome CDN Link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Custom CSS File Link-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <!--font awesome kit-->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>

<body>

    <!--header section start-->
    <section class="header">
        <div id="menu-btn" class="fas fa-bars"> </div>

        <a href="home.php" class="logo">Go See!</a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="services.php">Services</a>
            <a href="gallery.php">Gallery</a>
            <a href="package.php">Packages</a>
            <a href="book.php">Booking</a>
            <a href="contactus.php">Contact Us</a>
        </nav>

        <a href="registration.php" class="sign">Sign in</a>
        <h3><?php echo $_SESSION['userName']; ?></h3>

    </section>
    <!--header section ends-->
    <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
        <h1>Contact Us</h1>
    </div>

    <!--Contact Section Starts-->
    <section class="container">

        <img src="images/shape.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                    
                </p>
                  <br> <br> <br>
                <div class="info">
                    <div class="information">
                        <img src="images/location.png" class="icon" alt="" />
                        <p>92 Cherry Drive Uniondale, NY 11553</p>
                    </div>
                    <div class="information">
                        <img src="iimagesmg/email.png" class="icon" alt="" />
                        <p>lorem@ipsum.com</p>
                    </div>
                    <div class="information">
                        <img src="images/phone.png" class="icon" alt="" />
                        <p>123-456-789</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form action="contact_form.php" method="POST">
                    <h3 class="title">Help us with your Info!</h3>
                    <div class="input-container">
                        <input type="text" name="username" class="input" />
                        <label for="">Username</label>
                        <span>Username</span>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email" class="input" />
                        <label for="">Email</label>
                        <span>Email</span>
                    </div>
                    <div class="input-container">
                        <input type="tel" name="phone" class="input" />
                        <label for="">Phone</label>
                        <span>Phone</span>
                    </div>
                    <div class="input-container textarea">
                        <textarea name="message" class="input"></textarea>
                        <label for="">Message</label>
                        <span>Message</span>
                    </div>
                    <input type="submit" value="Send" class="btn" name="sendBtn" />
                </form>
            </div>
        </div>
    </section>
    <!--Contact Section Ends-->

    <!--Footer Section Start-->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> Booking</a>
            </div>

            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i> About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i> Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> Terms of Uses</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i> +880 188 2660 360</a>
                <a href="#"><i class="fas fa-phone"></i> +880 130 9040 483</a>
                <a href="#"><i class="fas fa-envelope"></i> travelsBD2122@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i> Dhaka, Bangladesh 4025</a>
            </div>

            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
            </div>

        </div>

        <div class="credit">
            Created by <span>Afia & Nahin</span> | All Rights Reserved | 2022
        </div>

    </section>
    <!--Footer Section End-->

    <!--Swiper JS Link-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!--Custom JS Link-->
    <script src="js/cont.js"></script>
</body>

</html>

<?php
session_start();
$username =null;
if (isset($_SESSION['userdata'])) {
    $username = $_SESSION['userdata']['full_name'];
    $user_id = $_SESSION['userdata']['user_id'];
}
include('dbconnect/dbcon.php');

?>


<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Dreams Template">
    <meta name="keywords" content="Dreams, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__search">
            <?php 
                                if ($username != null) {
                                    ?>
                                    <a href="#"><?php echo $username?></a>

                                    <?php
                                }
                                ?>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.php"><img src="img/logo.png" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li><a href="./index.php">Home</a></li>
                 
                <li ><a href="#"><i class="fa fa-tree"></i> Forest</a>
                    <ul class="dropdown">
                        <li><a href="forest-details.php"> Forest Details</a></li>
                        
                    </ul>
                </li>
                <li><a href="./news.php"><i class="fa fa-newspaper-o"></i> News</a></li>
                <li ><a href="./contact.php"><i class="fa fa-envelope"></i> Contact </a></li>
                <li class="active"><a href="about.php"><i class="fa fa-info-circle"></i>About Us</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
        </div>
        <div class="offcanvas__btn">
             <?php 
            if ($username == null) {
                ?>
                <a href="../html/login.php" class="primary-btn " > Login/Register</a>

                <?php
            }else{
                ?>
                 <a href="../html/userindex.php" class="primary-btn " > <i class="fa fa-cog"></i> Profile </a>
                <?php
            }
            ?>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                         <ul>
                                <li><a href="./index.php">Home</a></li>
                                 
                                <li ><a href="#"><i class="fa fa-tree"></i> Forest</a>
                                    <ul class="dropdown">
                                        <li><a href="forest-details.php"> Forest Details</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="./news.php"><i class="fa fa-newspaper-o"></i> News</a></li>
                                <li ><a href="./contact.php"><i class="fa fa-envelope"></i> Contact </a></li>
                                <li class="active"><a href="about.php"><i class="fa fa-info-circle"></i> About Us</a></li>
                            </ul>
                    </nav>
                </div>
                <div class="col-lg-4">
                    <div class="header__right">
                        <div class="header__right__search">
                           <?php 
                                if ($username != null) {
                                    ?>
                                    <a href="#"><?php echo $username?></a>

                                    <?php
                                }
                                ?>
                        </div>
                        
                        <div class="header__right__btn">
                             <?php 
                                if ($username == null) {
                                    ?>
                                    <a href="../html/login.php" class="primary-btn " > Login/Register</a>

                                    <?php
                                }else{
                                    ?>
                                     <a href="../html/userindex.php" class="primary-btn " ><i class="fa fa-cog"></i> Profile </a>
                                    <?php
                                }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option breadcrumb--about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="about.php">About Us</a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Hero Section Begin -->
    <section class="about-hero spad set-bg" data-setbg="img/about/about-hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-5 m-auto text-center">
                    <div class="about__hero__text">
                        <div class="section-title">
                            <span>About us</span>
                            <h2>Best of for you</h2>
                        </div>
                       
                        <a href="media/aboutvlc.mp4" class="play-btn video-popup"><i
                                class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Hero Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Our Great Team</span>
                        <!-- <h2>Our Instructors</h2> -->
                    </div>
                </div>
                <!-- <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="team__all">
                        <a href="#" class="primary-btn second-bg">View all</a>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team-2.png" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Prof. Vinay Singh</h5>
                            <span>Team Mentor</span>
                            <p><span>Designation:</span> Associate Professor at SISTec </p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team-0.jpg" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Ashish Labade</h5>
                            <span>Team Mentor</span>
                            <p><span>Designation:</span> Corporate Trainer at SISTec.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team-3.jpeg" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Keerti</h5>
                            <span>Team Leader</span>
                            <p><span>Designation:</span> Content Creator, Ml, Dl.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team-1.png" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Vishwas Lodhi</h5>
                            <span>Team-Member</span>
                            <p><span>Designation:</span> Database,Functioning, Full stack.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team-5.jpg" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Archit Gupta</h5>
                            <span>Team Member</span>
                            <p><span>Designation:</span> Machine Learning, Deep learning.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team-4.jpg" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Preeti Singh</h5>
                            <span>Team Member</span>
                            <p><span>Designation :</span>Data Collection, Ml, Helper.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team-7.jpg" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Mansi Shrivastava</h5>
                            <span>Team Member</span>
                            <p><span>Designation :</span>Data Collection, Research, Ml, Helper.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team-6.jpg" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Suraj Sahu</h5>
                            <span>Team Member</span>
                            <p><span>Designation :</span>Web developer, Helper.</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Testimonial Section Begin -->
    <!-- <section class="testimonial">
        <div class="container">
            <div class="testimonial__content set-bg" data-setbg="img/testimonial-bg.jpg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <span>Testimonial</span>
                            <h2>Client say</h2>
                        </div>
                        <div class="testimonial__slider owl-carousel">
                            <div class="testimonial__item">
                                <div class="quote-icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing, eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                    Risus commodo viverra maecenas lacus vel facilisis.</p>
                                <h6>Lincoln Shinler</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="quote-icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing, eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                    Risus commodo viverra maecenas lacus vel facilisis.</p>
                                <h6>David Warner</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="testimonial__item">
                                <div class="quote-icon">
                                    <i class="fa fa-quote-right"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing, eiusmod tempor incididunt
                                    ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                                    Risus commodo viverra maecenas lacus vel facilisis.</p>
                                <h6>Mike Hussy</h6>
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Testimonial Section End -->

    <!-- Feature Section Begin -->
    <!-- <section class="feature feature--about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Why choose us ?</span>
                        <h2>Our feature</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="feature__item">
                        <img src="img/feature/fa-1.png" alt="">
                        <h5>Unlimited Car Support</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="feature__item">
                        <img src="img/feature/fa-2.png" alt="">
                        <h5>Driving School Insures</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="feature__item">
                        <img src="img/feature/fa-3.png" alt="">
                        <h5>Any Time Any Location</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Feature Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="footer__widget">
                        <h5>Our Mission</h5>
                        <ul>
                            <li><a href="#">Discover Wild Life</a></li>
                            <li><a href="#">Forest Programs</a></li>
                            <li><a href="#">Activity Alert</a></li>
                            <li><a href="#">Save lifes</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="footer__widget">
                        <h5>Social Links</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" style="font-size:19px; color: #286090;"></i> Facebook</a></li>
                               <li> <a href="#"><i class="fa fa-twitter" style="font-size:19px; color: #55acee;"></i> Tweeter</a></li>
                                <li><a href="#"><i class="fa fa-instagram" style="font-size:19px; color: #d10088;"></i> Instagram</a></li>
                                <li><a href="#"><i class="fa fa-linkedin" style="font-size:19px; color: #0077b5;"></i> LinkedIn</a></li>
                                <li><a href="#"><i class="fa fa-youtube" style="font-size:19px; color: #cd201f;"></i> YouTube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="footer__about">
                         <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div> 
                        <p>Address : Karond, Airport Road, Bhopal</p>
                        <ul>
                            <li>Phone : +91-8319870196</li>
                            <li>Email : vishwaslodhi03@gmail.com</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | (SIH) Vishwas Lodhi <i class="fa fa-heart" aria-hidden="true"></i> </p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<?php 
session_start();
$username =null;
if (isset($_SESSION['userdata'])) {
    $username = $_SESSION['userdata']['full_name'];
}
//echo $username;
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Designed By Vishwas">
    <meta name="keywords" content="Dreams, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/*" href="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIH 2K20</title>

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
                <li class="active"><a href="./index.php"><i class="fa fa-home"></i> Home</a></li>
                
                <li ><a href="#"><i class="fa fa-tree"></i> Forest</a>
                    <ul class="dropdown">
                        <li><a href="forest-details.php"> Forest Details</a></li>
                        
                    </ul>
                </li>
                <li><a href="./news.php"><i class="fa fa-newspaper-o"></i> News</a></li>
                <li><a href="./contact.php"> <i class="fa fa-edit"></i> Feedback</a></li>

            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        
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
    <header class="header">
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
                            <li class="active" ><a href="./index.php"><i class="fa fa-home"></i> Home</a></li>
                            
                            <li ><a href="#"><i class="fa fa-tree"></i> Forest</a>
                                <ul class="dropdown">
                                    <li><a href="forest-details.php">Forest Details</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="./news.php"><i class="fa fa-newspaper-o"></i> News</a></li>
                            <li><a href="./contact.php"><i class="fa fa-edit"></i> Feedback</a></li>
                        </ul>
                        
                    </nav>
                </div>
                <div class="col-lg-4">
                    <div class="header__right">
                        <div class="header__right__search">
                            <!-- <i class="fa fa-search search-switch"></i> -->
                             <?php 
                                if ($username != null) {
                                    ?>
                                    <a href="#"><?php echo $username?></a>

                                    <?php
                                }
                                ?>
                        </div>
                        <!-- <div class="header__right__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </div> -->
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
<!-- login models -->
    <!-- Modal -->


<!-- end login model -->
    <!-- Hero Section Begin -->
     <section class="hero set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero__text">
                        <h5>Know About Our Nation</h5>
                        <h2>Save Our Forest's, Save Our Life's</h2>
                        <a href="contact.php" class="primary-btn">Contact us</a>
                        <a href="about.php" class="primary-btn second-bg">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section> 
   

    <!-- Team Section Begin -->
    <!-- <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7">
                    <div class="section-title">
                        <span>Our Great Team</span>
                        <h2>Our Team Information</h2>
                    </div>
                </div>
               
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="team__item">
                        <div class="team__item__img">
                            <img src="img/team/team-1.png" alt="">
                        </div>
                        <div class="team__item__text">
                            <h5>Mr. Vishwas Lodhi</h5>
                            <span>Team Member</span>
                            <p>It is my plesure to participated in SIH2K20. </p>
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
    </section> -->
    <!-- Team Section End -->

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
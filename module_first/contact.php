
<?php
session_start();
$username =null;
$user_id='';
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
    <title>Contact & feedback</title>

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
                <li class="active"><a href="./contact.php"> <i class="fa fa-envelope"></i> Contact </a></li>
                 <li ><a href="about.php"><i class="fa fa-info-circle"></i> About Us</a></li>
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
                            <li  ><a href="./index.php"><i class="fa fa-home"></i> Home</a></li>
                            
                            <li ><a href="#"><i class="fa fa-tree"></i> Forest</a>
                                <ul class="dropdown">
                                    <li><a href="forest-details.php">Forest Details</a></li>
                                    
                                </ul>
                            </li>
                            <li><a href="./news.php"><i class="fa fa-newspaper-o"></i> News</a></li>
                            <li class="active"><a href="./contact.php"><i class="fa fa-envelope"></i> Contact </a></li>
                            <li ><a href="about.php"><i class="fa fa-info-circle"></i> About Us</a></li>
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
                        <a href="./index.php" style="color: black;"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <div class="mapouter">
            
               <div class="map">
                    <iframe src="https://maps.google.com/maps?q=bhopal&t=k&z=13&ie=UTF8&iwloc=&output=embed"
            height="400" style="border:0;" allowfullscreen=""></iframe> 
    
            </div>
        </div>
   
    <!-- Breadcrumb End -->
<!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=bhopal&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div> -->
    <!-- Map Section Begin -->
    
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="contact__address">
                        <h4>Contact info</h4>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <p><span>Vishwaslodhi@gmail.com</span><span>+91-8319870196</span></p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <p>Karond, Airport Road, Bhopal</p>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <p><span>Mon - Sat : 24X7</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="contact__form">
                        <h4>Leave a message & Feedback</h4>
                        
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="alert alert-success " style="display: none;" id="right"><i class="fa fa-check"></i>
                                        Successfull Added. Thanks for your Appreciation.
                                    </div>
                                    <div class="alert alert-success " style="display: none;" id="worng"><i class="fa fa-warning" style="color: red;"></i>
                                        Try Again. Something went worng.
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select name="subject" id="subject" onchange="otherval(this)" class="form-control" >
                                        <option value="" selected disabled> Choose Subject</option>
                                        <option value="deforestation">Deforestation</option>
                                        <option value="hunting">Hunting</option>
                                        <option value="natural disaster"> Natural Disaster</option>
                                        <?php
                                        $sql = "SELECT distinct subject from tbl_feedback";
                                        $run = mysqli_query($con,$sql);
                                        $row = mysqli_num_rows($run);
                                        if ($row>0) {
                                            while($data = mysqli_fetch_assoc($run))
                                            {
                                                ?>
                                                <option value="<?php echo $data['subject']?>"><?php echo $data['subject']?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                        <option value="other">Other</option>
                                    </select>
                                    </div>
                                    
                                </div>
                                <div class="col-lg-6" >
                                    <div class="form-group" id="type-subject">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea placeholder="Your message" id="msg" name="msg" class="form-control" style="max-width: 100%; max-height: 120px;"></textarea>
                                    </div>
                                    
                                </div>
                            
                            </div>
                            <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>">
                            <button  class="site-btn" id="send"><i class="fa fa-send"></i> SEND</button>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function otherval(val) {
            var subject = val.value;
                
            if (subject == 'other') 
            {
                $("#type-subject").html('<input type="text" placeholder="Enter Subject" id="type_subject" name="type_subject" class="form-control">');
                $("#subject").attr('disabled','disabled');
            }
        }
        $(document).on('click','#send',function(){
            var error_cnt = 0;
            var user_id = $("#user_id").val();
            if (user_id == '') 
            {
                alert("PLease Login then send Your message...!");
            }else{
                 var subject = $("#subject").val();
                //var type_subject = $("#type_subject").val();
                var msg = $("#msg").val();
                var sub=0;
                if (subject == "other") 
                {
                    sub= $("#type_subject").val();
                }else{
                    sub=subject;
                }
                 $.ajax({
                    url:'send_msg.php',
                    type:'POST',
                    dataType:'JSON',
                    data:{user_id:user_id,sub:sub,msg:msg},
                    success:function(res)
                    {
                        //console.log(res);
                        if (res.status=='success') 
                        {
                            $("#right").show();
                            setTimeout(function(){$("#right").slideUp();},900);
                        }else if (res.status=='fail') 
                        {
                            $("#worng").show();
                            setTimeout(function(){$("#worng").slideUp();},900);
                        }

                    }
                 });

            }
           
            

        });
    </script>
</body>

</html>
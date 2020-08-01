
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
    <title>Forest - Details</title>

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
                <li ><a href="./contact.php"><i class="fa fa-envelope"></i> Contact </a></li>
                            <li ><a href="about.php"><i class="fa fa-info-circle"></i> About Us</a></li>

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
                            <li  ><a href="./index.php"><i class="fa fa-home"></i> Home</a></li>
                            
                            <li class="active"><a href="#"><i class="fa fa-tree"></i> Forest</a>
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
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Forest Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Section End -->

    <!-- Blog Hero Section Begin -->
    <section class="blog-hero set-bg" data-setbg="img/blog/details/blog-hero.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__hero__text">
                        <span>&ldquo; Quotes Forest &rdquo;</span>
                        <h2>And into the forest I go, to lose my mind and find my soul.</h2>
                        <ul>
                            <li>Love Forest</li>
                            <li>Save Animals</li>
                            <li>It's village boy <i class="fa fa-heart" style="color: red;"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Hero Section End -->

    <!-- Blog Details Section Begin -->
   
    <!-- Blog Details Section End -->

    <!-- Recent Blog Section Begin -->
    <section class="recent-blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title center-title">
                        <h2>Forest's Details</h2>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                 
                    <div class="col-lg-4" >
                    
                        <div class="section-title center-title" >
                              <select name="state" id="state" onchange="statevalue(this)"  class="form-control">
                                  <option value="" selected disabled>choose state</option>
                                  <?php
                                  $sql3 = "SELECT distinct forest_state from tbl_forest ";
                                  $run3 = mysqli_query($con,$sql3);
                                  $row3 = mysqli_num_rows($run3);
                                  if ($row3>0) {
                                      while ($fedata = mysqli_fetch_assoc($run3)) {
                                          ?>
                                          <option value="<?php echo $fedata['forest_state']?>"><?php echo $fedata['forest_state'];?></option>
                                          <?php
                                      }
                                  }else{
                                    ?>
                                        <option value="">No States Listed ..</option>
                                    <?php
                                  }
                                  ?>
                              </select>
                          </div>     
                    </div>
                    <!-- <div class="col-lg-4" >
                    
                        <div class="section-title center-title" >
                              <select name="forest_names" id="forest_names" class="form-control" onchange="get_list_forest(this)">
                                  <option value="" selected disabled>Choose Forest Name</option>
                                  
                              </select>
                          </div>     
                    </div> -->
                
             
            </div>
            <hr>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                
                <div class="section-title center-title">
                        <span class="pull-left"><u>All Forest Listed</u></span>
                    </div>
              </div>
            </div>

            <div class="row d-flex justify-content-center">

                <div class="col-lg-8" id="show_animal_list">
                    
                    <div class="row" id="show_forest_list">
                      
                          

                        <?php 
                        $sql = "SELECT * from tbl_forest where status='1'";
                        $run = mysqli_query($con,$sql);
                        $row = mysqli_num_rows($run);
                        if ($row>0) {
                                
                            while ($data = mysqli_fetch_assoc($run)) {
                                ?>
                                <div class="col-lg-4 col-md-4 col-sm-6">
                                    <div class="blog__item">
                                        <div class="blog__item__pic">
                                            <?php
                                            $forest_id = $data['forest_id'];
                                            $sql2 = "SELECT * from tbl_forest_image where forest_id = '$forest_id' ";
                                            //echo $sql2;
                                            $run2 = mysqli_query($con,$sql2);
                                            $row2 = mysqli_num_rows($run2);
                                            if ($row2>0) {
                                               while ($fetch = mysqli_fetch_assoc($run2)) {
                                                   ?>
                                                   <img src="../html/upload/<?php echo $fetch['fr_img'];?>" alt="Forect image">
                                                   <?php
                                               }
                                            }

                                            ?>
                                            
                                        </div>
                                        <div class="blog__item__text">
                                           
                                            <ul>
                                                <li><span><?php echo $data['forest_state'];?></span></li>
                                                <li><span><?php echo $data['forest_location'];?></span></li>
                                            </ul>
                                            
                                            <h5><a href="javascript:void(0)" class="list_animals" data-forest_name="<?php echo $data['forest_name']?>" data-forest_state="<?php echo $data['forest_state']?>" data-forest_location="<?php echo $data['forest_location']?>" data-forest_id="<?php echo $data['forest_id'];?>"><?php echo $data['forest_name']?></a></h5>
                                            <ul>
                                                <li> <?php echo $data['added_date'];?></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }

                        }

                        ?>
                      
                        
                       
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Recent Blog Section End -->

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
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function statevalue(val){
            var state_name = val.value;
            $.ajax({
                url:'get_forest_name.php',
                type:'POST',
                dataType:'JSON',
                data:{state_name:state_name},
                success:function(res){
                    console.log(res);
                    var html = '';
                    if (res.status=="success") 
                    {
                        html+='<div class="row">';
                        for (var i = 0; i < res.size; i++) {
                            html+='<div class="col-lg-4 col-md-4 col-sm-6">'+
                            '<div class="blog__item">'+
                                '<div class="blog__item__pic">';
                                for (var j = 0; j < res.fr_img[i].length; j++) {
                                    html+='<img src="../html/upload/'+res.fr_img[i][j]+'" alt="">';
                                }

                                    
                                html+='</div>'+
                                '<div class="blog__item__text">'+
                                    
                                    
                                    '<ul>'+
                                        '<li><span>'+res.forest_state[i]+'</span></li>'+
                                        '<li><span>'+res.forest_location[i]+'</span></li>'+
                                    '</ul>'+
                                    '<h5><a href="javascript:void(0);" class="list_animals" data-forest_name="'+res.forest_name[i]+'" data-forest_state="'+res.forest_state[i]+'" data-forest_location="'+res.forest_location[i]+'" data-forest_id="'+res.forest_id[i]+'">'+res.forest_name[i]+'</a></h5>'+
                                            '<ul>'+
                                                '<li>'+res.added_date[i]+'</li>'+
                                                
                                            '</ul>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
                        }
                        html+='</div>';


                        $("#show_animal_list").html(html);
                    }else if (res.status == "fail") 
                    {
                        html='Oops, No forest Detail Added yet';
                        $("#show_animal_list").html(html);
                    }
                }
            });
        }
        /*function get_list_forest(val)
        {
                var 
        }*/

        $(document).on('click','.list_animals',function(){
           var forest_id = $(this).attr("data-forest_id");
           var forest_name = $(this).attr("data-forest_name");
           var forest_state = $(this).attr("data-forest_state");
           var forest_location = $(this).attr("data-forest_location");
           $.ajax({
            url:'get_animals_details.php',
            type:'POST',
            dataType:'JSON',
            data:{forest_id:forest_id},
            success:function(res){
                console.log(res);
            var html = '';
            if (res.status == 'success') 
            {
                 html='<div class="row" id="show_forest_list" >'+
                        '<div class="col-lg-12 col-md-6 col-sm-6">'+
                            '<h5> <b>Forest Name : </b>'+forest_name+'</h5>'+
                            '<p><b>State : </b> '+forest_state+' / <b>City:</b> '+forest_location+' </p>'+
                            
                        '</div>'+
                    '</div>';
                   for (var i = 0; i < res.size; i++) {
                    html+='<div class="row">'+
                        '<div class="col-lg-4 col-md-4 col-sm-6">'+
                            '<div class="blog__item">'+
                                        '<div class="blog__item__pic">';
                                             for (var j = 0; j < res.animal_image[i].length; j++) {
                                           html+=' <img src="../html/upload/'+res.animal_image[i][j]+'" alt="Forect image">';
                                       }
                                            
                                       html+= '</div>'+
                                        '<div class="blog__item__text">'+
                                           
                                            
                                            
                                           ' <h5><a href="javascript:void(0)" > <b>Animal Name :    </b> <small>'+res.animal_name[i]+'</small></a></h5>'+
                                           
                                        '</div>'+
                                    '</div>'+
                       ' </div>'+
                    '</div>';

                    } 

                $("#show_animal_list").html(html);
            }else if (res.status == "fail") 
                    {
                        html='No Animals Record list Founded In this Forest';
                        $("#show_animal_list").html(html);
                    }
            
            }
           });
        });
    </script>
</body>

</html>
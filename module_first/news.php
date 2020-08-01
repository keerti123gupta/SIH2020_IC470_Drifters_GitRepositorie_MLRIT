
<?php
session_start();
$username =null;
$user_id=null;
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
    <title>News | Announcements</title>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                <li class="active"><a href="./news.php"><i class="fa fa-newspaper-o"></i> News</a></li>
                <li><a href="./contact.php"> <i class="fa fa-envelope"></i> Contact </a></li>
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
                            <li class="active"><a href="./news.php"><i class="fa fa-newspaper-o"></i> News</a></li>
                            <li ><a href="./contact.php"><i class="fa fa-envelope"></i> Contact </a></li>
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
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>News</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->
<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id;?>">
    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Latest update</span>
                        <h2>Latest news</h2>
                    </div>
                    <?php 
                    $sql = "SELECT * from tbl_annouce where status='1'";
                    $run = mysqli_query($con,$sql);
                    $row = mysqli_num_rows($run);
                    if ($row>0) {
                        $i=0;
                        while($data1 = mysqli_fetch_assoc($run))
                        {
                            ?>

                            <div class="blog__large">
                                <div class="blog__large__pic">
                                    <img src="#" alt="">
                                </div>
                                <div class="blog__large__text">
                                   <!--  <span>Driving tips</span> -->
                                    <ul>
                                        <li><span><?php echo $data1['annouce_date'];?></span></li>
                                        <li><span>Posted By: <?php echo $data1['user_id'];?></span></li>
                                    </ul>
                                    <h4><?php echo $data1['title'];?></h4>
                                    
                                    <p><?php echo $data1['message'];?></p>
                                    <?php
                                    $annouce_id = $data1['annouce_id'];
                                    $sql2 = "SELECT count(comment_id) as num_cm from tbl_announce_comments where annouce_id = '$annouce_id'";
                                    $run2 = mysqli_query($con,$sql2);
                                    $data2 = mysqli_fetch_assoc($run2);
                                    ?>
                                       <ul>
                                        
                                        <li><?php echo $data2['num_cm'];?> Total Comments</li>
                                        <li>View <a href="javaScript:void(0)" class="viewcmt" data-anc_id="<?php echo $data1['annouce_id'];?>"> <i class="fa fa-eye"></i></a></li>
                                    </ul> 
                                    <?php





                                    ?>
                                    <!-- <a href="#">Read more</a> -->
                                    <button class="btn btn-info btn-sm pull-right comment" id="cmt<?php echo $i;?>" data-comment_id="#cm_id<?php echo $i;?>" data-btn_id="#sendcom<?php echo $i;?>" style="margin: 0 0 15px 0;"><i class=" fa fa-comment"></i> Comment</button>

                                    <textarea class="form-control " placeholder="Post Your Comment...." id="cm_id<?php echo $i;?>" style="margin: 0 0 15px 0; display: none;" ></textarea>
                                    <button class="btn btn-primary btn-sm sendcom pull-right" id="sendcom<?php echo $i?>" data-comment_id1="#cm_id<?php echo $i;?>"  data-announce_id="<?php echo $data1['annouce_id'];?>" data-cmt_id="#cmt<?php echo $i;?>" style="margin: 0 0 15px 0; display: none;" ><i class="fa fa-send"></i> Post</button>
                                </div>
                                
                            </div>
                            <?php
                            $i++;
                        }
                    }



                    ?>
                    

                </div>

            </div>
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="#">1</a>
                        
                        <a href="#">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="dialog1" class="modal  fade">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="modal-body" id="show_cmt">
        <label><b>Comments : </b></label>
          <div><span><i class="fa fa-calendar"></i>: 20jun2020</span> / <span><i class="fa fa-user"></i>: vishwas lodhi</span></div>
          <hr>
          <p>hey iam vishwas</p>
          


      </div>
      <div class="modal-footer">
               
        <button type="button" id="dialog-close" class="btn btn-default" data-dismiss="modal">Close</button>          
      </div>
    </div>
  </div>
</div>
    <!-- Blog Section End -->

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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        $(document).on('click','.comment',function(){
          var comment_id = $(this).attr("data-comment_id");
          var btn_id = $(this).attr("data-btn_id");
          $(comment_id).slideToggle("slow");
          $(btn_id).slideToggle("slow");

        });
        $(document).on('click','.sendcom',function(){
                var user_id = $("#user_id").val();
                //console.log(user_id);
                if (user_id=='') 
                {
                    alert("you have to login first then post your answer");
                }
                else
                {
                    var error_cnt =0;    
                    var msg_id = $(this).attr("data-comment_id1");
                    var annouce_id = $(this).attr("data-announce_id");
                    
                    var comment = $(msg_id).val();
                    var cmt_id = $(this).attr("data-cmt_id");
                    if (comment=='') 
                    {
                        error_cnt++;
                        alert("Write Something. Comment box Could Not Empty..!");
                    }
                    if (error_cnt == 0) 
                    {
                         $.ajax({
                                url:'add_comments.php',
                                type:'POST',
                                dataType:'JSON',
                                data:{user_id:user_id,comment:comment,annouce_id:annouce_id},
                                success:function(res){
                                    if (res.status=='success') 
                                    {
                                        alert('Comment Posted Successfully..');
                                        $(cmt_id).trigger("click");
                                    }else{
                                        alert("Something wrong. try again...");
                                    }
                                }
                            });
                    }

                }
               
               // var annouce_val = $(annouce_id).val();
               
        });


$(document).on('click','.viewcmt',function(){
    var anc_id = $(this).attr("data-anc_id");
    $.ajax({
        url:'get_comments.php',
        type:'POST',
        dataType:'JSON',
        data:{anc_id:anc_id},
        success:function(res){
            console.log(res);
            var html = '';
            if (res.return=="success") 
            {
                for (var i = 0; i < res.size; i++) {
                    html+=' <label><b>Comments : </b></label>'+
                 ' <div><span><i class="fa fa-calendar"></i>: '+res.added_date[i]+'</span> / <span><i class="fa fa-user"></i>: '+res.user_id[i]+'</span></div>'+
                  '<hr>'+
                  '<p><i>'+res.comments[i]+'</i></p>';
                }
                $("#show_cmt").html(html);
                $("#dialog1").removeClass("fade").show();

            }else{
                alert("No comments added");
            }
        }
    });
});
$(document).on('click','#dialog-close',function(){
    $("#dialog1").addClass("fade").slideUp("slow");
});

    </script>
</body>

</html>
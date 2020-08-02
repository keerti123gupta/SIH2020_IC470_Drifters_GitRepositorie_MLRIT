<?php
session_start();
if (isset($_SESSION['userdata'])) {
    if ($_SESSION['userdata']['role']=='user') {
    header("Location: userindex.php");    
    }else{
        header("Location: index.php");
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Login</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link rel="icon" type="image/*" href="img/favicon.png" sizes="16x16">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        
        <div id="loginbox">
        <div align="center">
            <!-- <a href="../dreams/index.php"><i class="icon icon-arrow-left"></i> Back to Home</a> --><button onclick="window.location.href='../dreams/index.php';" class="btn btn-sm btn-primary"><i class="icon icon-arrow-left"></i> Back To Home</button>
        </div>            
            <form id="loginform" class="form-vertical" action="loginprocess.php" method="post" onsubmit="return validate()">
				 <div class="control-group normal_text"> <h3><img src="img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="email" placeholder="Email/ Mobile" id="login_username" name="login_username" />
                            <div style="color: red;" id="login_username_error"></div>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" id="login_password" name="login_password" />
                            <div style="color: red;" id="login_password_error"></div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    
                        <div align="center">
                             <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Create New Account</a>
                                </span>
                     
                        
                           
                       
                            
                            <span class="pull-right" ><input type="submit" name="submit" class="btn btn-success" value="Login" /> 
                            </span>
                        </div>
                   
                   
                    
                    
                </div>
            </form>
            <form id="registerform" action="#" class="form-vertical hide">
				<p class="normal_text">We Want Some Information About You!. <span class="label label-important">Register here..</span></p>
				    <div class="control-group">
                        <div class="controls">
                                <div class="main_input_box">
                                    <span class="add-on bg_ls"><i class="icon-user"></i></span><input type="text" id="fulname" placeholder="Full Name" />
                                    <div style="color: red;" id="fulname_error"></div>
                                </div>
                            </div>
                   </div>
                   <div class="control-group">
                        <div class="controls">
                            <div class="main_input_box">
                                <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="email" placeholder="E-mail address" id="email" />
                                <div style="color: red;" id="email_error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <div class="main_input_box">
                                <span class="add-on bg_lb"><i class="icon-phone"> </i></span><input type="number" id="contact_no" placeholder="Contact No" />
                                <div style="color: red;" id="contact_error"></div>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <div class="main_input_box">
                                <span class="add-on bg_lg"><i class="icon-key"> </i></span><input type="password" id="pass" placeholder="Password" />
                                <div style="color: red;" id="pass_error"></div>
                            </div>
                        </div>
                    </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><button type="button" id="btnRegis" class="btn btn-info">Register</button>
                    </span>
                </div>
            </form>
            
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>

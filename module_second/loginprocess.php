<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
	 
</head>
<body> -->

<!-- </body>
</html> -->
<?php 
include('dbcon.php');
if (isset($_POST['submit'])) {
	$login_username = $_POST['login_username'];
	$login_password = $_POST['login_password'];
	$sql = "SELECT * from tbl_users where (email  = '$login_username' or contact = '$login_username') and pass ='$login_password' and status='1' ";
	//echo $sql;
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	//echo $row;
	if ($row>0) {
		$data['status'] = 'success';
		session_start();
		$data = mysqli_fetch_assoc($run);
		$_SESSION['userdata']=$data;

		//var_dump($_SESSION);
		?>
		<div align="center" class="message" style="display: none;" >
			<img src="img/load.gif" ><span >loading... wait for <i id="second"></i>s </span>
		</div>
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".message").hide();
				myfunction();
			});
			var funcount=0;
    

		    function simulate_ajax_call()
		    {
		       
		               if (funcount==1) {
		                setTimeout(function(){window.location='index.php'},500);
		                }else{
		                	funcount++;
		                	myfunction();
		                	
		                }
		            
		    }

		     function myfunction(){
		     	$("#second").html(funcount);
		        $(".message").fadeIn(500);
		        $(".message").fadeOut(500);
		        setInterval("simulate_ajax_call()", 1000);   
		         }

		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert('Username and Password not match..!');
			window.location='login.php';
		</script>

		<?php
	}

}


 ?>
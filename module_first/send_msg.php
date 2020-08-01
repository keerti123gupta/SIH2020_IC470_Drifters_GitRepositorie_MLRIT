<?php 
include("dbconnect/dbcon.php");
var_dump("data",$_POST);
if (isset($_POST['user_id']) && isset($_POST['sub']) && isset($_POST['msg'])) {
	$user_id = $_POST['user_id'];
	$sub = $_POST['sub'];
	$msg = $_POST['msg'];
	$feed_id = 'feed_'.uniqid();
	$sql = "INSERT INTO tbl_feedback(feedback_id,user_id,subject,message) values('$feed_id','$user_id','$sub','$msg')";  
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		$data['status'] =  'success';
	}else{
		$data['status']='fail';
	}
	echo json_encode($data);
}
 ?>
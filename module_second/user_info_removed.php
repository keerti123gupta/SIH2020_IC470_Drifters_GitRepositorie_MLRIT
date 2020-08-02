<?php 
include("dbcon.php");
if (isset($_POST['user_id'])) {
	$user_id = $_POST['user_id'];
	$sql = "UPDATE tbl_users set status = '2' where user_id='$user_id'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_affected_rows($con);
	if ($row>0) {
		$data['status']='success';
	}else{
		$data['status']='fail';
	}
	echo json_encode($data);
}


 ?>
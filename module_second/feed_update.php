<?php 
include("dbcon.php");
if (isset($_POST['feed_id'])) {
	$feed_id = $_POST['feed_id'];
	$sql = "UPDATE tbl_feedback set status = '2' where feedback_id='$feed_id'";
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
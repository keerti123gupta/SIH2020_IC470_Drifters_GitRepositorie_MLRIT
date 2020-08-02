<?php 
include("dbcon.php");
if (isset($_POST['forest_id'])) {
	$forest_id = $_POST['forest_id'];
	$sql = "UPDATE tbl_forest set status = '2' where forest_id='$forest_id'";
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
<?php 
include("dbcon.php");
if (isset($_POST['annouce_id'])) {
	$annouce_id = $_POST['annouce_id'];
	$sql = "UPDATE tbl_annouce set status = '2' where annouce_id='$annouce_id'";
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
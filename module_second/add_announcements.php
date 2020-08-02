<?php 
include("dbcon.php");
if (isset($_POST['msg']) && isset($_POST['title']) ) {
	$msg = $_POST['msg'];
	$title = $_POST['title'];
	$userid = $_POST['userid'];
	$announce_id=  'an_id'.uniqid();
	$sql = "INSERT into tbl_annouce (annouce_id,user_id,title,message) values('$announce_id','$userid','$title','$msg')";
	$run = mysqli_query($con,$sql);
	//echo $sql;
	if ($run == true) {
		$data['status'] = 'success';
	}else{
		$data['status'] = 'fail';
	}
	echo json_encode($data);

}


 ?>
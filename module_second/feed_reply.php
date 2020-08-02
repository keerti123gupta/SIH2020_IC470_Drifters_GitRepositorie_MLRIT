<?php 
include("dbcon.php");
//var_dump($_POST);
if (isset($_POST['userid']) && isset($_POST['feed_id2']) && isset($_POST['response'])) {
	$reply_id = 'rly_id_'.uniqid();
	$user_id = $_POST['userid'];
	$feed_id2 = $_POST['feed_id2'];
	$response = $_POST['response'];
	$sql = "INSERT into tbl_feedback_reply(reply_id,feedback_id,msgs,user_id) values('$reply_id','$feed_id2','$response','$user_id');
	";
	//echo $sql;
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		$data['status'] =  'success';
	}else{
		$data['status']='fail';
	}
	echo json_encode($data);
}
 ?>
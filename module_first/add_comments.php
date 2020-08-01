<?php 
include("dbconnect/dbcon.php");
//var_dump($_POST);
if (isset($_POST['user_id']) && isset($_POST['comment']) && isset($_POST['annouce_id'])) {
	$comment_id = 'cmt_'.uniqid();
	$user_id = $_POST['user_id'];
	$annouce_id = $_POST['annouce_id'];
	$comments = $_POST['comment'];
	$sql = "INSERT into tbl_announce_comments(comment_id,user_id,annouce_id,comments) values('$comment_id','$user_id','$annouce_id','$comments');
	";
	
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		$data['status'] =  'success';
	}else{
		$data['status']='fail';
	}
	echo json_encode($data);
}
 ?>
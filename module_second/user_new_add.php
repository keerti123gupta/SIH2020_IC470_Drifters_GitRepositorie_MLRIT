<?php 
include("dbcon.php");
if (isset($_POST['name']) && isset($_POST['contact'])) {
	$user_id = uniqid();
	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$role = $_POST['role'];
	$sql = "INSERT INTO tbl_users(user_id,full_name,contact,email,pass,role) values('$user_id','$name','$contact','$email','$pass','$role')";
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		$data['status']='success';
	}else{
		$data['status']='fail';
	}
	echo json_encode($data);
}


 ?>
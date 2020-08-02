<?php 
include('dbcon.php');
if (isset($_POST['fulname']) && isset($_POST['email']) && isset($_POST['contact_no']) && isset($_POST['pass'])) {
	$fulname = $_POST['fulname'];
	$email = $_POST['email'];
	$contact_no = $_POST['contact_no'];
	$pass = $_POST['pass'];
	$user_id = uniqid();
	$sql = "INSERT INTO tbl_users(user_id,full_name,contact,email,pass) values('$user_id','$fulname','$contact_no','$email','$pass')";
	$run = mysqli_query($con,$sql);
	if ($run == true) {
			$data['status']='success';
		}	
	echo json_encode($data);
}
?>
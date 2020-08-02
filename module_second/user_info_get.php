<?php 

include("dbcon.php");
if (isset($_POST['validator'])) {
	$sql = "SELECT * from tbl_users where (role = 'ranger' or role='staff') and status ='1'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	if ($row>0) {
		$fetch['return']='success';
		$i=0;
		while ($data = mysqli_fetch_assoc($run)) {
			$fetch['user_id'][$i] = $data['user_id'];
			$fetch['full_name'][$i] = $data['full_name'];
			$fetch['contact'][$i] = $data['contact'];
			$fetch['email'][$i] = $data['email'];
			$fetch['status'][$i] = $data['status'];
			$fetch['role'][$i] = $data['role'];
			$i++;

		}
		$fetch['size']=$i;
	}else{
		$fetch['return']='fail';
	}
	echo json_encode($fetch);
}

 ?>
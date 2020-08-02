<?php
include('dbcon.php');
if (isset($_POST['validator'])) {
	//echo "it is working";

	$sql = "SELECT * From tbl_forest where status='1'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	if ($row>0) {
		$i = 0;
		$fetch['status']='success';
		while ($data = mysqli_fetch_assoc($run)) {
			$fetch['forest_id'][$i] = $data['forest_id'];
			$fetch['forest_name'][$i] = $data['forest_name'];
			$fetch['forest_location'][$i] = $data['forest_location'];
			$fetch['forest_state'][$i] = $data['forest_state'];
			$fetch['added_date'][$i] = $data['added_date'];
			$fetch['user_id'][$i] = $data['user_id'];
			$i++;
		}
		$fetch['size']=$i;
	}else{
		$fetch['status']='empty';
	}
	echo json_encode($fetch);

}



?>
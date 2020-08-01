<?php
include('dbconnect/dbcon.php');
if (isset($_POST['state_name'])) {
	$state_name = $_POST['state_name'];
	$sql = "SELECT * from tbl_forest where forest_state='$state_name' and status='1'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	//echo $row;
	if ($row>0) {
		$fetch['status'] = 'success';
		$i=0;
		while($data = mysqli_fetch_assoc($run))
		{
			$fetch['forest_id'][$i] = $data['forest_id'];
			$id = $fetch['forest_id'][$i];
			$sql2 ="SELECT * from tbl_forest_image where forest_id='$id'";
			$run2 = mysqli_query($con,$sql2);
			$j=0;
			while($data2 = mysqli_fetch_assoc($run2))
			{
				$fetch['fr_img'][$i][$j] = $data2['fr_img'];
				$j++;
			} 
			//$fetch['size'][$i][$j];
			$fetch['forest_location'][$i]=$data['forest_location'];
			$fetch['forest_state'][$i] = $data['forest_state'];
			$fetch['added_date'][$i] = $data['added_date'];
			$fetch['forest_name'][$i] = $data['forest_name'];
			$i++;
		}
		$fetch['size']=$i;
	}else{
		$fetch['status']='fail';
	}
	//var_dump('<pre>',$fetch);
	echo json_encode($fetch);
}

?>
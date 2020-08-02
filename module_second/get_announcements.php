<?php 

include("dbcon.php");
if (isset($_POST['validator'])) {
	$sql = "SELECT * from tbl_annouce where status ='1'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	if ($row>0) {
		$fetch['return']='success';
		$i=0;
		while ($data = mysqli_fetch_assoc($run)) {
			$fetch['annouce_id'][$i] = $data['annouce_id'];
			$fetch['user_id'][$i] = $data['user_id'];
			$fetch['title'][$i] = $data['title'];
			$fetch['annouce_date'][$i] = $data['annouce_date'];
			$fetch['message'][$i] = $data['message'];
			$fetch['status'][$i] = $data['status'];
			$i++;

		}
		$fetch['size']=$i;
	}else{
		$fetch['return']='fail';
	}
	echo json_encode($fetch);
}

 ?>
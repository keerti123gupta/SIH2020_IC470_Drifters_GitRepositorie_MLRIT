<?php 

include("dbconnect/dbcon.php");
if (isset($_POST['anc_id'])) {
	$anc_id = $_POST['anc_id'];
	$sql = "SELECT user_id,comments,added_date from tbl_announce_comments where annouce_id ='$anc_id'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	if ($row>0) {
		$fetch['return']='success';
		$i=0;
		while ($data = mysqli_fetch_assoc($run)) {
			$fetch['user_id'][$i] = $data['user_id'];
			$fetch['comments'][$i] = $data['comments'];
			$fetch['added_date'][$i] = $data['added_date'];
			$i++;

		}
		$fetch['size']=$i;
	}else{
		$fetch['return']='fail';
	}
	echo json_encode($fetch);
}

 ?>
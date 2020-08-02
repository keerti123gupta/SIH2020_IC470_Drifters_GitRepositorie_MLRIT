<?php 
include("dbconnect/dbcon.php");
if (isset($_POST['forest_id'])) {
	$forest_id = $_POST['forest_id'];
	$sql = "SELECT * from tbl_animals where forest_id = '$forest_id'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	if ($row>0) {
		$fetch['status']='success';
		$i=0;
		$sql2 = "SELECT * from tbl_forest where forest_id = '$forest_id'";
		$run2 = mysqli_query($con,$sql2);
		$fetch['forest_detail'] = mysqli_fetch_assoc($run2);
		
		while ($data = mysqli_fetch_assoc($run))
		{
			$fetch['animal_id'][$i] = $data['animal_id'];
			$fetch['user_id'][$i] = $data['user_id'];
			$fetch['forest_id'][$i] = $data['forest_id'];
			$fetch['animal_name'][$i] = $data['animal_name'];
			$fetch['cate_id'][$i] = $data['cate_id'];
			$animal_id = $$fetch['animal_id'][$i];
			$sql3= "SELECT * from tbl_animal_image where animal_id = '$animal_id'";
			$run3= mysqli_query($con,$sql3);
			$row3=mysqli_num_rows($run3);
			if ($row3>0) {
				$j=0;
				while ($data2 = mysqli_fetch_assoc($run3)) {
					$fetch["animal_image"][$i][$j] = $data2['animal_image'];
					$j++;
				}
			}
			//$j=0;

			$i++;
		}
		$fetch['size'] = $i;
	}else{
		$fetch['status'] = 'fail';
	}
	//echo json_encode($fetch);
	var_dump($fetch);
	
}
?>
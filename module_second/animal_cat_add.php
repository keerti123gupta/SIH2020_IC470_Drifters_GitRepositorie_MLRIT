<?php 
include("dbcon.php");
if (isset($_POST['userid1']) && isset($_POST['animal_cat'])) {
	$animal_cat = $_POST['animal_cat'];
	$userid1 = $_POST['userid1'];
	$cate_id = 'cat_'.uniqid();
	$sql = "INSERT into tbl_animal_cat(cate_id,cate_name,user_id) values('$cate_id','$animal_cat','$userid1')";
	//echo $sql;
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		$data['status']="success";
	}else{
		$data['status']="fail";
	}
	echo json_encode($data);
}



 ?>
<?php 
include("dbcon.php");
//var_dump($_POST);
if (isset($_POST['animal_name']) && isset($_POST['animalcat']) && isset($_POST['forestid']) && isset($_POST['userid2'])) 
{
	//echo "hello";
	$animal_name = $_POST['animal_name'];
	$animalcat = $_POST['animalcat'];
	$forestid = $_POST['forestid'];
	$userid2 = $_POST['userid2'];
	$file=$_FILES;
	//var_dump($_FILES);
	$fnew=$file['animal_img']['name'];
	$path=time().$file['animal_img']['name'];
	$full_path = preg_replace('/[^a-zA-Z0-9_.]/', '_', $path);


	$_FILES['animal_img']['name']=$full_path;
	$filename = $_FILES['animal_img']['name'];
	$tmp_filename = $_FILES['animal_img']['tmp_name'];

	$animalid = 'aml_'.uniqid();
	$ani_img_id = 'animg_'.uniqid();
	$sql = "INSERT into tbl_animals(animal_id,user_id,forest_id,animal_name,cate_id) values('$animalid','$userid2','$forestid','$animal_name','$animalcat')";
	//echo $sql;
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		move_uploaded_file($tmp_filename, 'upload/'.$filename);
		$sql2 = "INSERT into tbl_animal_image(ani_img_id,animal_id,animal_image) values('$ani_img_id','$animalid','$filename')";
		mysqli_query($con,$sql2);
		?>
		<script type="text/javascript">
			alert("Successfully added");
			setTimeout(function () {
				window.location='animal_detail.php';
			},500);
		</script>

		<?php

	}else{
		?>
		<script type="text/javascript">
			alert("Unsuccessful try again");
			setTimeout(function () {
				window.location='animal_detail.php';
			},500);
		</script>

		<?php
	}
	
}



 ?>
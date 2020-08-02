<?php
include('dbcon.php');
if (isset($_POST['submit'])) {
	
     //var_dump($_POST); 
     $forest_name = $_POST['forest_name'];
     $location  = $_POST['location'];
     $state = $_POST['state'];
     $add_date = $_POST['add_date'];
     $userid = $_POST['userid'];

	$file=$_FILES;
	//var_dump($_FILES);
	$fnew=$file['image']['name'];
	$path=time().$file['image']['name'];
	$full_path = preg_replace('/[^a-zA-Z0-9_.]/', '_', $path);


	$_FILES['image']['name']=$full_path;
	$filename = $_FILES['image']['name'];
	$tmp_filename = $_FILES['image']['tmp_name'];
	$forest_id = 'fr_'.uniqid();
	$sql = "INSERT into tbl_forest(forest_id,forest_name,forest_location,forest_state,user_id,added_date) values('$forest_id','$forest_name','$location','$state','$userid','$add_date')";
	//echo $sql;
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		$image_id = 'img_'.uniqid();
			$sql2 = "INSERT INTO tbl_forest_image(forest_id,fr_img_id,fr_img) values('$forest_id','$image_id','$filename')";
			mysqli_query($con,$sql2);
			move_uploaded_file($tmp_filename, 'upload/'.$filename);

		?>
		<script type="text/javascript">
			alert('Succefully completed');
			setTimeout(function(){window.location='forest_detail.php'},500);
		</script>

		<?php
	}else{
		?>
<script type="text/javascript">
	alert('Please try again.');
	setTimeout(function(){window.location='forest_detail.php'},500);
</script>

		<?php
		
	}

                       
}


?>
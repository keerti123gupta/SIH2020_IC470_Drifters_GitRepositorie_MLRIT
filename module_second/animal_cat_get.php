<?php
     
include('dbcon.php');
if (isset($_POST['validate'])) 
{
  $sql = "SELECT concat(cate_id,',',cate_name) as animalcat,cate_id from tbl_animal_cat";
    $run = mysqli_query($con,$sql);
    $row = mysqli_num_rows($run);
    if ($row>0) {
      $i =0;
      while ($data = mysqli_fetch_assoc($run)) {
        
       $fetch['animalcat'][$i] = $data['animalcat'];
       $fetch['cate_id'][$i] = $data['cate_id'];
       $i++;
      }
      $fetch['size']=$i;
      $fetch['status']= 'success';
    }else{
      $fetch['status']='fail';
    }
 echo json_encode($fetch);

}


?>
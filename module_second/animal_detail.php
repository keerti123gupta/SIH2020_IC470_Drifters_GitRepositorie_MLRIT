<?php
session_start();
if (isset($_SESSION['userdata'])) {
  if ($_SESSION['userdata']['role']=='user') {
    header("Location: userindex.php");
  }
  else{
    $username = $_SESSION['userdata']['full_name'];
    $userid = $_SESSION['userdata']['user_id'];
  }
  
}else{
  header("Location: login.php");
}

include("dbcon.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Animal Detail</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />

<link rel="stylesheet" href="css/fullcalendar.css" />


<link rel="stylesheet" href="css/jquery.gritter.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.php">SIH Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <span class="label label-warning"><?php echo $username;?></span></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        
        <li><a href="logout.php"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
   <li class=""><a title="logout from System" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"><a href="#" class="visible-phone"><i class="fa fa-paw"></i> Forest Animal</a>
  <ul>
    <li ><a href="index.php"><i class="icon icon-dashboard"></i> <span>Dashboard</span></a> </li>
    <li ><a href="../dreams/index.php"> <i class="icon icon-home"></i> Home </a></li>
     <li> <a href="alert.php"><i class="icon icon-bell"></i> <span>Alert System</span></a> </li>
    <li> <a href="user_info.php"><i class="icon icon-user"></i> <span>Users Info</span></a> </li>
    <!-- <li> <a href="videosystem.php"><i class="icon icon-play"></i> <span>Video Stream</span></a> </li> -->
    <!-- <li> <a href="videosystem.php"><i class="icon icon-play"></i> <span>Video Stream</span></a> </li> -->
    <li class="submenu " > <a href="#"><i class="icon icon-play"></i> <span>Video Stream</span> </a>
      <ul>
        <li ><a href="list_video.php"><i class="icon icon-list"></i> List Videos</a></li>
        <li><a href="livestream.php"><i class="icon icon-camera"></i> Live Cam</a></li>
        
      </ul>
    </li>
    <li > <a href="forest_detail.php"><i class="fa fa-tree"></i> <span> Forest Info</span></a> </li>
     <li class="active"> <a href="animal_detail.php"><i class="fa fa-paw"></i> <span> Forest Animal </span></a> </li>
    <li> <a href="feedback.php"><i class="icon icon-envelope"></i> <span>Contact & Feedback </span></a> </li>
    <li> <a href="announcement.php"><i class="icon icon-bullhorn"></i> <span>Announcement</span></a> </li>
  
  </ul> 
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon icon-dashboard"></i> Dashboard</a> <a href="#" class="tip-bottom">Forest animal  </a>  </div>
  <h1>Forest Animal Detail</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-edit"></i> </span>
          <h5>Add Animal Categories</h5>
        </div>
        <div class="widget-content nopadding">
          
          <form action="#" method="post" class="form-horizontal"   >
            <div class="control-group" align="center" >
              <h5 class="label label-warning" ><i class="fa fa-warning"></i>  Animal Categories like ex- snakes, sea animals, Cannibal.</h5>
            </div>
            <div class="control-group" align="center" >
              <label class="alert alert-success sucalert" style="display: none;"><i class="fa fa-check"></i> Successfully Added Category</label>
              <label class="alert alert-danger danalert" style="display: none;"><i class="fa fa-warning"></i>  Please try agian. Something went Worng.</label>
            </div>
            <div class="control-group">
              <label class="control-label">Animal Category Name : </label>
              <div class="controls">
                <input type="text" class="span11" name="animal_cat" id="animal_cat" placeholder="Category Name" >
                <div><small id="error_animal_cat" style="color: red;"></small></div>
              </div>
            </div>
            
            <input type="hidden" name="userid1" id="userid1" value="<?php echo $userid;?>">
            <div class="form-actions">
              <button type="button" id="submit1" class="btn btn-sm btn-primary">Save</button><!-- <input type="submit" name="submit" id="submit" value="Submit" > -->
            </div>
            </form>
      </div>
      
    </div>
  </div>
  <div class="span6">
      <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="fa fa-list"></i></span>
            <h5>Added Animal Categories</h5>
          </div>
          <div class="widget-content nopadding" style="overflow-x:auto;">
            
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Animal Cat. Id</th>
                  <th>Animal Cat. Info</th>
                  
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="show_animal_cat">
                
                
              </tbody>
            </table>
          </div>
        </div>
  </div>
  
  </div>
  <div class="row-fluid">
    
  <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-edit"></i> </span>
          <h5>Add Animal Species</h5>
        </div>
        <div class="widget-content nopadding">
          
          <form action="add_animal_species.php" method="post" class="form-horizontal" onsubmit="return Speciesvalidate()"  enctype="multipart/form-data" >
            <div class="control-group" align="center" >
              <h5 class="label label-important" ><i class="fa fa-warning"></i>  Fill All Required Field</h5>
            </div>
            <div class="control-group" align="center" >
              <label class="alert alert-success sucalert1" style="display: none;"><i class="fa fa-check"></i> Successfully Saved.</label>
              <label class="alert alert-danger danalert1" style="display: none;"><i class="fa fa-warning"></i>  Something Worng Try Again.</label>
            </div>
            <div class="control-group">
              <label class="control-label">Animal Name : </label>
              <div class="controls">
                <input type="text" class="span11" name="animal_name" id="animal_name" placeholder="Animal Name" >
                <div><small id="error_animal_name" style="color: red;"></small></div>
              </div>
            </div>
            <input type="hidden" name="userid2" id="userid2" value="<?php echo $userid;?>">
            <!-- forest list -->
            <div class="control-group">
              <label class="control-label">Select Forest info: </label>
              <div class="controls">

                <select name="forestid" id="forestid">
                  <?php
                  $sql = "SELECT concat(forest_id,',',forest_name,',',forest_state) as forestdetail,forest_id from tbl_forest where status='1'";
                  $run = mysqli_query($con,$sql);
                  $row = mysqli_num_rows($run);
                  if ($row>0) {
                    while ($data = mysqli_fetch_assoc($run)) {
                      ?>
                      <option value="<?php echo $data['forest_id'];?>" ><?php echo $data['forestdetail'];?></option>
                      <?php
                     
                    }
                  }

                  ?>
                 
                </select>
                
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Select Animal Category </label>
              <div class="controls">

                <select name="animalcat" id="animalcat">
                 
                
                </select>
                <div><small id="error_animalcat" style="color: red;"></small></div>
                
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Animal Image</label>
              <div class="controls">

                <input type="file" name="animal_img" id="animal_img" >
                <div><small id="error_animal_img" style="color: red;"></small></div>
                
              </div>
            </div>
            <!-- forest list -->
            <div class="form-actions">
              <!-- <button type="button" id="submit2" >Add</button> -->
             <input type="submit" name="submit2" id="submit2" class="btn btn-sm btn-success" value="Add">
            </div>
            </form>
      </div>
      
    </div>
  </div>
  <div class="span6">
    <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="fa fa-list"></i></span>
            <h5>Added Animals List</h5>
          </div>
          <div class="widget-content nopadding" style="overflow-x:auto;">
            
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Animal Name</th>
                  <th>Animal Id</th>
                  <th>Forest Id</th>
                  <th>User Id</th>
                   <th>Animal Cat. Id</th>
                  
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="show_added_animal">
                <?php 
                $sql = "SELECT animal_id,user_id,forest_id,animal_name,cate_id from tbl_animals";
                $run = mysqli_query($con,$sql);
                $row = mysqli_num_rows($run);
                if ($row>0) {
                  $i=0;
                  while ($data = mysqli_fetch_assoc($run)) {
                    ?>
                      <tr>
                        <td><?php echo ($i+1);?></td>
                        <td><?php echo $data['animal_name'];?></td>
                        <td><?php echo $data['animal_id'];?></td>
                        <td><?php echo $data['forest_id'];?></td>
                        <td><?php echo $data['user_id'];?></td>
                        <td><?php echo $data['cate_id'];?></td>
                        <td><button class="btn btn-danger rmvlist" type="button" >X</button></td>
                      </tr>
                    <?php 
                    $i++; 
                  }
                }


                ?>
                
              </tbody>
            </table>
          </div>
        </div>
  </div>
  </div>
<!--   <div class="row-fluid">
    <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="fa fa-list"></i></span>
            <h5>All Added Forest's List</h5>
          </div>
          <div class="widget-content nopadding" style="overflow-x:auto;">
            
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th> No</th>
                  <th>Forest Name</th>
                  <th>Forest Id</th>
                  <th>Forest Location</th>
                  <th>Forest State</th>
                  <th>User Id</th>
                  <th>Added Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="show_forest">
                
                
              </tbody>
            </table>
          </div>
        </div>
  </div> -->
</div>
</div>
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12" style="color: wheat;"> 2020 &copy; (SIH) | Created by Vishwas Lodhi <i class="icon icon-heart" style="color:red;"></i></div>
</div>
<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<!-- <script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script>  -->
<!-- <script src="js/jquery.toggle.buttons.js"></script>  -->
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<!-- <script src="js/matrix.form_common.js"></script> --> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   get_animal_cat();
  });
 $(document).on('click','#submit1',function(){
  var error_t=0;
  var animal_cat = $("#animal_cat").val();
  var userid1 = $("#userid1").val();
  if (animal_cat == '') 
  {
    error_t ++;
    $("#error_animal_cat").html('<i class="fa fa-warning"> </i> Please Enter Anuimal Species Categiry')
  }
  if (error_t==0) 
  {
    $.ajax({
      url:'animal_cat_add.php',
      type:'POST',
      dataType:'JSON',
      data:{animal_cat:animal_cat,userid1:userid1},
      success:function(res){
        console.log(res);
        if (res.status=='success') 
        {
          $(".sucalert").show();
          get_animal_cat();
          setTimeout(function(){$(".sucalert").slideUp();},3000);

        }else if (res.status=='fail') 
        {
          $(".danalert").show();
          setTimeout(function(){$(".danalert").slideUp();},3000);
        }
      }
    });
  }
 });
function Speciesvalidate(){
  //alert('hello');
  var error_cnt =0;
  var animal_name = $("#animal_name").val();
 var animal_img = $("#animal_img").val();
 var animalcat = $("#animalcat").val();
 if (animalcat == null) 
 {
  error_cnt++;
  $("#error_animalcat").html('<i class="fa fa-warning"></i> PLease selecte Category');
 }
  if (animal_name == '') 
  {
    error_cnt++;
    $("#error_animal_name").html('<i class="fa fa-warning"></i> Please Enter animal Name');
  }
  if (animal_img == '') 
  {
    error_cnt++;
    $("#error_animal_img").html('<i class="fa fa- fa-warning"></i> Please Choose Image');
  }
  if (error_cnt ==0) 
  {
    
    return true;
    
  }else{
    return false;
  }
}
function get_animal_cat(){
  var validate = 'success';
  $.ajax({
    url:'animal_cat_get.php',
    type:'POST',
    dataType:'JSON',
    data:{validate:validate},
    success:function(res){
      var html = '';
      var html2='';
      //console.log(res);
      if (res.status=="success") 
      {
        /*html='<option value="" selected>Select Category</option>';*/
        for (var i = 0; i < res.size; i++) {
         html+='<option value="'+res.cate_id[i]+'" >'+res.animalcat[i]+'</option>';
        }
        for (var i = 0; i < res.size; i++) {
          html2+='<tr>'+
                  '<td>'+(i+1)+'</td>'+
                  '<td>'+res.cate_id[i]+'</td>'+
                  '<td>'+res.animalcat[i]+'</td>'+
                  '<td><button type="button" class"btn btn-sm btn-warning rmvcat" >X</button></td>'+
          +'</tr>';
        }
        $("#show_animal_cat").html(html2);
        $("#animalcat").html(html);
       /* alert('success')*/
      }else if (res.status=='fail') 
      {
        html+='<option value="" selected>No Categories added</option>';
        $("#animalcat").html(html);
      }
    }
  });
}
</script>



<script>
  $('.textarea_editor').wysihtml5();
</script>


</body>
</html>

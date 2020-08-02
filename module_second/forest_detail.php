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

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Forest Detail</title>
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

<div id="sidebar"><a href="#" class="visible-phone"><i class="fa fa-tree"></i> Forest Detail</a>
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
    <li class="active"> <a href="forest_detail.php"><i class="fa fa-tree"></i> <span> Forest Info</span></a> </li>
     <li> <a href="animal_detail.php"><i class="fa fa-paw"></i> <span> Forest Animal </span></a> </li>
    <li> <a href="feedback.php"><i class="icon icon-envelope"></i> <span>Contact & Feedback </span></a> </li>
    <li> <a href="announcement.php"><i class="icon icon-bullhorn"></i> <span>Announcement</span></a> </li>
  
  </ul> 
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon icon-dashboard"></i> Dashboard</a> <a href="#" class="tip-bottom">Forest Information </a>  </div>
  <h1>Forest's Details Panel</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-edit"></i> </span>
          <h5>Add New Forest Area Detail</h5>
        </div>
        <div class="widget-content nopadding">
          
          <form action="add_forest.php" method="post" class="form-horizontal"  onsubmit="return validate();" enctype="multipart/form-data" >
            <div class="control-group" align="center" >
              <h5 class="label label-important" ><i class="fa fa-warning"></i> Please fill all required information carefully</h5>
            </div>
            <div class="control-group">
              <label class="control-label">Forest Name : </label>
              <div class="controls">
                <input type="text" class="span11" name="forest_name" id="forest_name" placeholder="First name" >
                <div><small id="error_forest_name" style="color: red;"></small></div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">City / Area : </label>
              <div class="controls">
                <input type="text" class="span11" name="location" id="location" placeholder="City / Area Address" >
                <div><small id="error_location" style="color: red;"></small></div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">State : </label>
              <div class="controls">
                <select name="state" id="state">
                  
                  <option value="madhya pradesh" >Madhya Pradesh</option>
                  <option label="Andhra pradesh">Andhra Pradesh</option>
                  <option value="assam">Assam</option>
                  <option value="Bihar">Bihar</option>
                </select>
                <div><small id="error_state" style="color: red;"></small></div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Date : </label>
              <div class="controls">
                <input type="date" class="span11" id="add_date" name="add_date"  >
                <div><small id="error_add_date" style="color: red;"></small></div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Image : </label>
              <div class="controls">
                <input type="file" class="span11" id="image" name="image"  >
                <div><small id="error_image" style="color: red;"></small></div>
              </div>
            </div>
            <input type="hidden" name="userid" value="<?php echo $userid;?>">
            <div class="form-actions">
              <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-sm btn-success">
            </div>
            </form>
      </div>
      
    </div>
  </div>
  
  </div>

  <div class="row-fluid">
    <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="fa fa-list"></i></span>
            <h5>All Added Forest's List</h5>
          </div>
          <div class="widget-content nopadding" style="overflow-x:auto;">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No</th>
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
  </div>
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
    added_forests();
  });
  function added_forests()
  {
    //alert('hello');
    var validator = "success";
    $.ajax({
      url:"forest_detail_get.php",
      type:"POST",
      dataType:"JSON",
      data:{validator:validator},
      success:function(res){
        var html = '';
        if (res.status=='success') 
        {
          for (var i = 0; i < res.size; i++) {
            html+='<tr class="gradeX">'+
                  '<td>'+(i+1)+'</td>'+
                  '<td>'+res.forest_name[i]+'</td>'+
                  '<td>'+res.forest_id[i]+'</td>'+
                   '<td>'+res.forest_location[i]+'</td>'+
                    '<td>'+res.forest_state[i]+'</td>'+
                     '<td>'+res.user_id[i]+'</td>'+
                      '<td>'+res.added_date[i]+'</td>'+
                      '<td><button class="btn btn-xs btn-danger rmbtn" data-forest_id="'+res.forest_id[i]+'">X</button></td>'+
                 
                '</tr>';    

            }
            $("#show_forest").html(html);
        }
      }
    });
  }
</script>
<script>
  $('.textarea_editor').wysihtml5();
</script>
<script type="text/javascript">
  function validate(){
      var error_cnt=0;
      var forest_name = $("#forest_name").val();
      var location = $("#location").val();
      var state = $("#state").val();
      var add_date = $("#add_date").val();
      var image = $("#image").val();
      //alert(forest_name);
      if (forest_name == '') 
      {
        error_cnt++;
        $("#error_forest_name").html('filed required');
      }
      if (location == '') 
      {
        error_cnt++;
        $("#error_location").html('field required');
      }
      if (state == null) 
      {
        error_cnt++;
        $("#error_state").html('field required');
      }
      if (add_date == '') 
      {
        error_cnt++;
        $("#error_add_date").html('field required');
      }
      if (image == '') 
      {
        error_cnt++;
        $("#error_image").html('field required');
      }
      if (error_cnt == 0) 
      {
        return true;
      }else{
        return false;
      }
  }
  $(document).on('click','.rmbtn',function(){
    var forest_id = $(this).attr("data-forest_id");
    $.ajax({
      url:'forest_remove.php',
      type:'POST',
      dataType:'JSON',
      data:{forest_id:forest_id},
      success:function(res){
        if (res.status=='success') 
        {
          alert("Forest Removed Successfully..!");
          added_forests();
        }else{
          alert("something went worng Try Again Later");
        }
      }
    });
  });
</script>

</body>
</html>

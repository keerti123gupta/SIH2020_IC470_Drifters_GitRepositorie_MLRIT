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
<title>Announcements</title>
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
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-bullhorn"></i> Announcement</a>
  <ul>
    <li ><a href="index.php"><i class="icon icon-dashboard"></i> <span>Dashboard</span></a> </li>
    <li ><a href="../dreams/index.php"> <i class="icon icon-home"></i> Home </a></li>
    <li> <a href="alert.php"><i class="icon icon-bell"></i> <span>Alert System</span></a> </li>
    <li> <a href="user_info.php"><i class="icon icon-user"></i> <span>Users Info</span></a> </li>
    
    <!-- <li> <a href="videosystem.php"><i class="icon icon-play"></i> <span>Video Stream</span></a> </li> -->
    <!-- <li> <a href="videosystem.php"><i class="icon icon-play"></i> <span>Video Stream</span></a> </li> -->
    <li class="submenu"> <a href="#"><i class="icon icon-play"></i> <span>Video Stream</span> </a>
      <ul>
        <li><a href="list_video.php"><i class="icon icon-list"></i> List Videos</a></li>
        <li><a href="livestream.php"><i class="icon icon-camera"></i> Live Cam</a></li>
        
      </ul>
    </li>
    <li> <a href="forest_detail.php"><i class="fa fa-tree"></i> <span> Forest Info</span></a> </li>
     <li> <a href="animal_detail.php"><i class="fa fa-paw"></i> <span> Forest Animal </span></a> </li>
    <li> <a href="feedback.php"><i class="icon icon-envelope"></i> <span>Contact & Feedback </span></a> </li>
    <li class="active"> <a href="announcement.php"><i class="icon icon-bullhorn"></i> <span>Announcement</span></a> </li>
  
  </ul> 
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon icon-dashboard"></i> Dashboard</a> <a href="#" class="tip-bottom">Announcememnts and News  </a>  </div>
  <h1>Announcememnts Updates & News</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fa fa-edit"></i> </span>
          <h5>Add New Announcememnts</h5>
        </div>
        <div class="widget-content nopadding">
          
          <form action="#"  class="form-horizontal"  >
            <div class="control-group" align="center" >
              <h5 class="label label-important" ><i class="fa fa-warning"></i> All Fields Are Mendatory</h5>
            </div>
            <div class="control-group">
              <label class="control-label">Announcements Title : </label>
              <div class="controls">
                <input type="text" class="span11" name="title" id="title" placeholder="Enter  title" >
                <div><small id="error_title" style="color: red;"></small></div>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Message: </label>
              <div class="controls">
                <textarea name="message" id="message" placeholder="Enter Message" style="max-height: 120px; max-width: 100%;"></textarea>
                <!-- <input type="text" class="span11" name="message" id="message" placeholder="Enter Message" > -->
                <div><small id="error_message" style="color: red;"></small></div>
              </div>
            </div>
            
            <input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>">
            <div class="form-actions">
              <!-- <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-sm btn-success"> -->
              <button type="button" name="submit" id="submit" class="btn btn-sm btn-success">Save</button>
              <p><b>Note:-</b> Please Do Not Use (<b>'</b>) Operater in message box</p>
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
                  <th>An. Id</th>
                  <th>User Id</th>
                  <th>Title</th>
                  <th>Message</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="show_announce">
                
                
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
  show_announcements();
 });
 $(document).on('click','#submit',function(){
  var error_cnt=0;
  var title = $("#title").val();
  var msg = $("#message").val();
  var userid = $("#userid").val();
  if (title == '') 
  {
    error_cnt++;
    $("#error_title").html("Field required");
  }
  if (msg == '') 
  {
    error_cnt++;

    $("#error_message").html("Field Required");
  }
  if (error_cnt==0) 
  {
    $.ajax({
      url:'add_announcements.php',
      type:'POST',
      dataType:'JSON',
      data:{title:title,msg:msg,userid:userid },
      success:function(res){
       if (res.status=='success') 
       {
        alert("Announcement Added Successfully...");
        show_announcements();
       }else{
        alert("Announcement failed to Added");
       }
      }
    });
  }
 });
 function show_announcements()
 {
  var validator= 'yes';
  $.ajax({
    url:'get_announcements.php',
    type:'POST',
    dataType:'JSON',
    data:{validator:validator},
    success:function(res){
      console.log(res);
      var html='';
      if (res.return == 'success') 
      {
        for (var i = 0; i < res.size; i++) {
          html+='<tr>'+
                  '<td>'+(i+1)+'</td>'+
                  '<td>'+res.annouce_id[i]+'</td>'+
                  '<td>'+res.user_id[i]+'</td>'+
                  '<td>'+res.title[i]+'</td>'+
                  '<td>'+res.message[i]+'</td>'+
                  '<td>'+res.annouce_date[i]+'</td>';
                  if (res.status[i] == '1') 
                  {
                    html+='<td><button class="btn btn-danger changestatus" data-announce_id="'+res.annouce_id[i]+'">X</button></td>';
                  }
                  

          html+='</tr>';
        }
        $("#show_announce").html(html);
      }
    }
  });
 }
 $(document).on('click','.changestatus',function(){
  var annouce_id = $(this).attr("data-announce_id");
  $.ajax({
    url:'update_announce_status.php',
    type:'POST',
    dataType:'JSON',
    data:{annouce_id:annouce_id},
    success:function(res){
      if (res.status == 'success') 
      {
        alert("Announcement Removed Successfully");
        show_announcements();
      }else{
        alert("Not Removed Try again");
      }
    }
  });

 });
</script>



<script>
  $('.textarea_editor').wysihtml5();
</script>


</body>
</html>

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
<title>Feedback panel</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />

<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/fullcalendar.css" />


<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">SIH Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="javascript:void(0)" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <span class="label label-warning"><?php echo $username;?></span></span><b class="caret"></b></a>
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

<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-envelope"></i> Contact & Feedback</a>
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
     <li > <a href="animal_detail.php"><i class="fa fa-paw"></i> <span> Forest Animal </span></a> </li>
    <li class="active"> <a href="feedback.php"><i class="icon icon-envelope"></i> <span>Contact & Feedback </span></a> </li>
    <li> <a href="announcement.php"><i class="icon icon-bullhorn"></i> <span>Announcement</span></a> </li>
  
  </ul> 
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon icon-dashboard"></i> Dashboard</a> <a href="#" class="current">Feedback & Queries</a> </div>
    <h1>Feedback Panel</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-comments"></i></span>
            <h5>Feedback & queries</h5>
          </div>
          <div class="widget-content nopadding" style="overflow-x: auto;">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Serial No</th>
                  <th>Feedback Id</th>
                  <th>UserID</th>
                  
                  <th>Subject </th>
                  <th>Message</th>
                  <th>Action/Reply</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql1 = "SELECT * from tbl_feedback where status ='1'";
                $run1 = mysqli_query($con,$sql1);
                $row1 = mysqli_num_rows($run1);
                if ($row1>0) {
                  $i=0;
                    while ($data1 = mysqli_fetch_assoc($run1)) 
                    {
                      $i++;
                      ?>
                         <tr class="gradeX">
                          <td class="center"><?php echo $i;?></td>
                          <td><?php echo $data1['feedback_id'];?></td>
                          <td><?php echo $data1['user_id'];?></td>
                         
                          <td class="center"><span class="label"><?php echo $data1['subject'];?></span></td>
                          <td><?php echo $data1['message'];?></td>
                          <td><button class="btn btn-sm btn-danger rmvfeed" data-feed_id='<?php echo $data1['feedback_id'];?>' style="margin:0 0 8px 0;">Disable</button><br><button class="btn btn-sm btn-info feed_reply" data-feedback_id="<?php echo $data1['feedback_id'];?>">Reply</button></td>
                        </tr>
                      <?php
                    }
                }else{

                }

                ?>
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="modal fade" id="myModal" role="dialog" style="overflow-x: hidden;overflow-y: auto;">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Write Your Resopnse</h4>
        </div>
        <div class="modal-body">
          <input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>">
          <input type="hidden" name="feed_id2" id="feed_id2" value="">
          <textarea class="form-control" id="response" placeholder="Write Something..." ></textarea>
          <div style="color: red;" id="response_error"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info btn-sm addreply" >Post</button>
        </div>
      </div>
      
    </div>
  </div>

<div class="row-fluid">
  <div id="footer" class="span12" style="color: wheat;"> 2020 &copy; (SIH) | Created by Vishwas Lodhi <i class="icon icon-heart" style="color:red;"></i></div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
<script type="text/javascript">
  $(document).on('click','.rmvfeed',function(){
    var feed_id = $(this).attr("data-feed_id");
    $.ajax({
      url:'feed_update.php',
      type:'POST',
      dataType:'JSON',
      data:{feed_id:feed_id},
      success:function(res){
        //console.log(res);
        if (res.status=='success') 
        {
          alert('Removed Successfully');
          setTimeout(function(){window.location='feedback.php'},500);
        }else{
          alert('Action Unsuccessful Try Again');
        }
      }
    });

  });
  $(document).on('click','.feed_reply',function(){
    var feedback_id = $(this).attr("data-feedback_id");
    $("#feed_id2").val(feedback_id);
    $("#myModal").modal("show");
  });

  $(document).on('click','.addreply',function(){
    var error_cnt=0;
    var userid = $("#userid").val();
    var feed_id2 = $("#feed_id2").val();
    var response = $("#response").val();
    if (response == '') 
    {
      $error_cnt++;
      $("#response_error").html("Field Required");
    }
    if (error_cnt==0) {
      $.ajax({
        url:'feed_reply.php',
        type:'POST',
        dataType:'JSON',
        data:{userid:userid,feed_id2:feed_id2,response:response},
        success:function(res){
          console.log(res);
          if (res.status=='success') 
          {
            alert("Reply added Successfully");
            $("#myModal").modal("hide");
          }else if (res.status=='fail') {
            alert("Please Try Again Server Error");
          }
        }
      });
    }
  });
</script>

</body>
</html>

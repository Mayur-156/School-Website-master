<?php session_start();
  include'connect.php';
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Notice Details</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
  <div class="main-content">
    <!--left-fixed -navigation-->
     <?php include 'sidebar.php'; ?>
    <!--left-fixed -navigation-->
    <!-- header-starts -->
     <?php include 'Header.php'; ?>
    <!-- //header-ends -->
    <!-- main content start-->
     <?php
$view = mysqli_query($connect,"select * from notice order by
id asc") or die(mysqli_error($connect));
?>
    <div id="page-wrapper">
      <div class="main-page">
        <div class="tables">
          <div class="table-responsive bs-example widget-shadow">
            <h4>Notice Details</h4>

            <table class="table table-bordered"> 
              <thead> 
                <tr> 
                  
                      <th style="text-align: center;" >ID</th>
                      <th style="text-align: center;">Title</th>
                      <th style="text-align: center;">Date</th>
                      <th style="text-align: center;">Content</th>
                      <th style="text-align: center;">Name</th>
                      <th style="text-align: center;">Designation</th>
                      <th style="text-align: center;">Action</th>
                  
                </tr> 
              </thead> 
              <tbody> 
              <?php
              $counter = 0;
              while ($row = mysqli_fetch_array($view)) {

              extract($row);
              ?>
              <tr>
              <td><?php echo ++$counter; ?></td>
              <td><?php echo $row['title']; ?></td>
              <td><?php echo $row['date']; ?></td>
              <td><?php echo $row['content']; ?></td>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['desig']; ?></td>
              
              <td>
              <a class="text-success" onClick="return confirm('Are you sure you want to update this notice details ?);"
              href="notice_details_update.php?stud_id=<?php echo $Id;?>"
              title="Update Notice details"><i class="fa fa-edit"></i></a>

              <a class="text-danger" onClick="return confirm('Are you sure you want to delete this registration details ?);"
              href="notice_delete.php?stud_id=<?php echo $Id;?>"
              title="Delete Notice details"><i class="fa fa-trash-o"></i></a>
              </td>
              </tr>
              <?php } ?>
              </tbody> 
            </table> 
          </div>
        </div>
      </div>
    </div>
    <!--footer-->
    <? php include'footer.php'; ?>
        <!--//footer-->
  </div>
  <!-- Classie -->
    <script src="js/classie.js"></script>
    <script>
      var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;
        
      showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
      };
      
      function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
          classie.toggle( showLeftPush, 'disabled' );
        }
      }
    </script>
  <!--scrolling js-->
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/scripts.js"></script>
  <!--//scrolling js-->
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.js"> </script>
</body>
</html>
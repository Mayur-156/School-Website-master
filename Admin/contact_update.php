<!DOCTYPE HTML>
<html>
<head>
<title>Contact Update</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<style type="text/css">
	.a1{
		margin-left: 10px;
	}

	.b1{
		font-size: 25px;

	}
	.b2{
		font-size: 25px;
		margin-left: 100px;
	}
	.b3{
		border-radius: 8px;
	    border: 2px solid green; 
	    margin-left: 4px;
	}
	.formfield * {
  vertical-align: middle;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  border-radius: 20px;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px 5px 200px;
  cursor: pointer;
}
.button2 {background-color: rebeccapurple;} /* Blue */	
</style>
</head> 
<body class="cbp-spmenu-push">
<?php
include'connect.php';
if($_GET['stud_id'])
{
$update = mysqli_query($connect,"select * from contact where Id='".$_GET['stud_id']."'") or die(mysqli_error($connect));
$row = mysqli_fetch_array($update);
     
}
?>


	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include 'sidebar.php'; ?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		 <?php include 'Header.php'; ?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
					<div class="row calender widget-shadow">
					
					<div class="cal1">

						<!-- form started-->
							
						 
							<div class="form-title">
								<h4 class="title" style="color:green; font-size:30px"><center><strong>Contact Update</strong></center></h4>
							</div>


							<div class="form-body">

							<div class="col-md-3">
								
							</div>
							<div class=" col-md-6  main_grid_contact" style="background: lightblue;">
		                        <div class="form">
		                            
		                            <form name="contact" id="myForm" method="post" novalidate="novalidate" enctype="multipart/form-data"  onsubmit="return validateform()" >
		                                <div class="form-group">
		                                    <label style="font-size:18px; font-family: sans-serif;" >Name</label>

		                                    <input class="form-control" type="text" name="Name"
		                                    value="<?php echo $row['name']; ?>">
		                                </div>
		                                <div class="form-group">
		                                    <label style="font-size:18px; font-family: sans-serif;">Email</label>
		                                    <input class="form-control" type="email" name="Email" placeholder="" value="<?php echo $row['email']; ?>" >
		                                </div>
		                                <div class="form-group">
		                                	<p  class="formfield">
		                                    <label style="font-size:18px; font-family: sans-serif;">Message</label>
		                                   
		                                     <textarea  required="" name="message"  rows="4" cols="29" >
		                                     	<?php echo $row['message']; ?>
		                                     </textarea> 
		                                     </p>
		                                </div>
		                                <div class="input-group1">    
		                                    <button class="button button2" type="submit"  name="submit">Update</button>
		                                </div>
		                            </form>
		                        </div>
                    		</div>
									
								</div>
								<!-- Button Ended-->
							</form>
							</div>
						</div>
					
						
						<!-- Form Ended -->
						
					</div>
				</div>			
				
			</div>
		</div>
		<!--footer-->
		 <?php include 'footer.php'; ?>

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
<?php

if(isset($_POST['submit']))
{
extract($_POST);

	  $pname=$_FILES['photo']['name']; 
         $type=$_FILES['photo']['type'];
         $size=$_FILES['photo']['size']; 
         $temp=$_FILES['photo']['tmp_name']; 
         if($pname)
         {
         
         $upload= "../image/"; 
         $imgExt=strtolower(pathinfo($pname, PATHINFO_EXTENSION)); 
         $valid_ext= array('jpg','png','jpeg' ); 
         $photo= rand(1000,1000000).".".$imgExt; 
         move_uploaded_file($temp,$upload.$photo); 
         }




$update = mysqli_query($connect,"update contact set
name='".$Name."',
email='".$Email."',
message='".$message."'
where Id='".$_GET['stud_id']."' ") or die
(mysqli_error($connect));

if($update)
{
echo "<script>;";
echo "window.alert('Data update successfully....!');";
echo 'window.location.href = "contact_details.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo 'window.location.href ="contact_update.php";';
echo "</script>";
}
}
?>
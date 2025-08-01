<!DOCTYPE HTML>
<html>
<head>
<title>Notice</title>
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

</style>
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
		<div id="page-wrapper">
			<div class="main-page">
					<div class="row calender widget-shadow">
					
					<div class="cal1">

						<!-- form started-->
							
						 
							<div class="form-title">
								<h4 class="title" style="color:green; font-size:30px"><center><strong>NOTICE</strong></center></h4>
							</div>
							<div class="form-body">
								 <form name="notice" id="formID" method="post" novalidate="novalidate" enctype="multipart/form-data"  onsubmit="return validateform()" >
										<div>
											<label>ENTER TITLE: </label>
											<input type="text" name="title" style="margin-left: 30px;">
										</div>
										<br>
										<div>
											<label>ENTER DATE : </label>
											<input type="date" name="date" style="margin-left: 30px;">
										</div>
									</center>
										<br>
										
										<div>
											<p class="formfield">
											  <label for="textarea">ENTER CONTENT :</label>
											  <textarea id="textarea" rows="15" cols="100" name="content"></textarea>
											</p> 
										</div>
										<br>
										<div>
											<label style="font-size:18px">Name: </label>
											<input type="text" name="name" style="margin-left: 70px; ">
										</div>
										<br>
										<div>
											<label style="font-size:18px">Designation: </label>
											<input type="text" name="desig" style="margin-left: 25px;">
										</div>
											<br><br>

								<!-- Button Started -->
									<div class="form-group">
									<center><button type="submit" name="submit" class="btn btn-primary submit" style="font-size:25px; border-radius: 8px; border: 2px solid green; margin-left: 4px;  ">Submit</button>

									</center>
								</div>

								<!-- Button Ended -->
								</form>

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

include 'connect.php';



    if(isset($_POST['submit']))
    {

    
    extract($_POST);

        
       
        

    $asd ="insert into notice(title,date,content,name,desig) 
               values('$title','$date','$content','$name','$desig')";

   

    

        $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
        if($asd)
        {
        echo "<script>;";
        echo "window.alert('Notice Uploded');";
        echo 'window.location.href = "admin_notice.php";';
        echo "</script>";
        }
        else
        {
        echo "<script>;";
        echo "window.alert('You have not provided valid details');";
        echo "</script>";
        }
        }


 ?>	
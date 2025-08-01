<!DOCTYPE HTML>
<html>
<head>
<title>Class4_Update</title>
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
</style>
</head> 
<body class="cbp-spmenu-push">
<?php
include'connect.php';
if($_GET['stud_id'])
{
$update = mysqli_query($connect,"select * from teacher_details where Id='".$_GET['stud_id']."'") or die(mysqli_error($connect));
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
							
						 
							<div class="cal1">

						<!-- form started-->
							
						 
							<div class="form-title">
								<h4 class="title" style="color:green; font-size:30px"><center><strong>Teacher Details</strong></center></h4>
							</div>
							<div class="form-body">
							<form name="myform" id="formID" method="post" novalidate="novalidate" enctype="multipart/form-data"  onsubmit="return validateform()">
								<div class="row">
								 
								  <div class="col-xs-6">
								  	<label>Post Applied For:</label>
								  	<input type="text" name="pst_app" value="<?php echo $row['pst_app']; ?>">
								  </div>

								  <div class="col-xs-6">
								  	<label style="margin-right: 15px;  font-size: 25px;">
								  	Upload Photo:
								  	</label>

									<!-- <img id="preivew_img" src="images/no-image-full.jpg" width="70"/> -->

									 <!-- <input type="file" id="image" class="fileinput" name="photo" accept=" .png, .jpg, .jpeg"
									style="border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"> -->


									<img id="preview_img" src="../Admin/Student_images/"  width="70"/>
                                       <input type="file" id="image" class="fileinput" name="photo" accept=" .png, .jpg, .jpeg">


								  </div>

								</div>

								<hr>
								<h3>GENERAL INFORMATION</h3>
								<div class="row">
								  <div class="col-xs-6">
								  	<label>Name:</label>
								  	<input type="text" name="name" required="" value="<?php echo $row['name']; ?>">
								  </div>
								  <div class="col-xs-6">
								  	<label>Father's/Husband's Name :</label>
								  	<input type="text" name="F_or_H" value="<?php echo $row['F_or_H']; ?>">
								  </div>
								</div>

								<div class="row">
								  <div class="col-xs-6">
								  	<label >Address:</label>
									<textarea  name="ADDRESS"><?php echo $row['ADDRESS']; ?></textarea>
								  </div>
								  <div class="col-xs-6">
								  	
								  </div>
								</div>

								<div class="row">
								  <div class="col-xs-6">
								  	<label >Contact No. (R):</label>
									<input type="text" name="Contact_no" value="<?php echo $row['Contact_no']; ?>">
								  </div>
								  <div class="col-xs-6">
								  	<label>Mobile(P):</label>
								  	<input type="text" name="Mobile" value="<?php echo $row['Mobile']; ?>">
								  </div>
								</div>


								<div class="row">
								  <div class="col-xs-6">
								  	<label >Date of Birth:</label>
									<input type="date" name="DOB" value="<?php echo $row['DOB']; ?>">
								  </div>
								  <div class="col-xs-6">
								  	<label>Email ID:</label>
								  	<input type="email" name="Email" value="<?php echo $row['Email']; ?>">
								  </div>
								</div>

								<hr>
								<h3>Marital Status</h3>

								<div class="row">
								  <div class="col-xs-6">
								  	<label>Single</label>
									<input  type="radio" value="Single" name="Marital">  <?php if($row['Marital']=='Single'){?> checked="checked"<?php }?>
									<label>Married</label>
									<input type="radio"  value="Married"name="Marital" ><?php if($row['Marital']=='Married'){?> checked="checked"<?php }?>
								  </div>
								  <div class="col-xs-6">
								  	
								  </div>
								</div>


								<div class="row">
								  <div class="col-xs-6">
										<label>Spouse Name:</label>
										<input type="text" name="Spouse_Name" value="<?php echo $row['Spouse_Name']; ?>">
								  </div>
								  <div class="col-xs-6">
								  		<label>Educational Qualification:</label>
								  		<input type="text" name="Edu_quali" value="<?php echo $row['Edu_quali']; ?>">
								  </div>
								</div>


								<div class="row">
								  <div class="col-xs-6">
										<label>Work Address:</label>
										<textarea name="Spouse_work_address"><?php echo $row['Spouse_work_address']; ?></textarea>
								  </div>
								  <div class="col-xs-6">
								  		<label>Phone:</label>
								  		<input type="text" name="Spouse_phone" value="<?php echo $row['Spouse_phone']; ?>">
								  </div>
								</div>

								<hr>
								<h3 style="margin-bottom: 25px;">Subject(s) Specialization:</h3>

								<div>
								  <label>1)</label>
								  <input type="text" name="fi_spec" style="width: 50%;" value="<?php echo $row['1st_specili']; ?>">
								  <br><br>
								  <label>2)</label>
								  <input type="text" name="sec_spec" style="width: 50%;" value="<?php echo $row['2nd_specili']; ?>">
								  <br><br>
								  <label>3)</label>
								  <input type="text" name="thr_spec" style="width: 50%;" value="<?php echo $row['3rd_specili']; ?>">
								  
								</div>

								<hr>
								<h3>Academic Information</h3>
								<table class="table table-bordered" style="text-align:center;">
								   <tr>
									    <th><center>Qualification</center></th>
									    <th><center>Year Of Passing</center></th>
									    <th><center>School/college/Univ. (Name)</center></th>
									    <th><center>Percentage</center></th>
									    
									  </tr>
									  <tr>
									    <td>Secondary</td>
									    <td>
									    	<input type="date" name="secondary_YoP" value="<?php echo $row['secondary_YoP']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="secon_SUC" value="<?php echo $row['secon_SUC']; ?>">
									    </td>
									     <td>
									    	<input type="text" name="secon_per" value="<?php echo $row['secon_per']; ?>">
									    </td>
									  </tr>
									  <tr>
									    <td>Sr.Secondary</td>
									    <td>
									    	<input type="date" name="Sr_secondary_YoP" value="<?php echo $row['Sr_secondary_YoP']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="Sr_secon_SUC" value="<?php echo $row['Sr_secon_SUC']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="Sr_secon_per" value="<?php echo $row['Sr_secon_per']; ?>">
									    </td>
									  </tr>
									  <tr>
									    <td>Graduation</td>
									    <td>
									    	<input type="date" name="Graduation_YoP" value="<?php echo $row['Graduation_YoP']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="Graduation_college" value="<?php echo $row['Graduation_college']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="Graduation_per" value="<?php echo $row['Graduation_per']; ?>">
									    </td>
									  </tr>
									  <tr>
									    <td>Post Graduation</td>
									    <td>
									    	<input type="date" name="Post_graduation_YoP" value="<?php echo $row['Post_graduation_YoP']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="Post_grad_university" value="<?php echo $row['Post_grad_university']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="Post_grad_per" value="<?php echo $row['Post_grad_per']; ?>">
									    </td>
									   
									  </tr>
									  
									 
								</table>


								<hr>
								<h3>Professional Information</h3>
								<table class="table table-bordered" style="text-align:center;">
								   <tr>
									    <th><center>Qualification</center></th>
									    <th><center>Year Of Passing</center></th>
									    <th><center>college/Univ. (Name)</center></th>
									    <th><center>Percentage</center></th>
									    
									  </tr>
									  <tr>
									    <td>N. T. T.</td>
									    <td>
									    	<input type="date" name="NTT_YoP" value="<?php echo $row['NTT_YoP']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="NTT_SUC" value="<?php echo $row['NTT_SUC']; ?>">
									    </td>
									     <td>
									    	<input type="text" name="NTT_per" value="<?php echo $row['NTT_per']; ?>">
									    </td>
									  </tr>
									  <tr>
									    <td>B. Ed</td>
									    <td>
									    	<input type="date" name="BEd_YoP" value="<?php echo $row['BEd_YoP']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="BEd_SUC" value="<?php echo $row['BEd_SUC']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="BEd_per" value="<?php echo $row['BEd_per']; ?>">
									    </td>
									  </tr>
									  <tr>
									    <td>M. Ed</td>
									    <td>
									    	<input type="date" name="MED_YoP" value="<?php echo $row['MED_YoP']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="MED_college" value="<?php echo $row['MED_college']; ?>">
									    </td>
									    <td>
									    	<input type="text" name="MED_per" value="<?php echo $row['MED_per']; ?>">
									    </td>
									  </tr>
									 
									 
									 
								</table>
								<hr>
								<div class="row">
								  <div class="col-xs-6">
								  	<label>Present Salary:</label>
								 	<input type="text" name="present_salary" value="<?php echo $row['present_salary']; ?>">
								  </div>
								  <div class="col-xs-6"></div>
								</div>

								<hr>

								<div class="form-group">
									<center><button type="submit" name="submit" class="btn btn-primary submit" style="font-size:25px; border-radius: 8px; border: 2px solid green; margin-left: 4px; ">Submit</button></center>
								</div>

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
         
         $upload= "../Admin/teacher_image/"; 
         $imgExt=strtolower(pathinfo($pname, PATHINFO_EXTENSION)); 
         $valid_ext= array('jpg','png','jpeg' ); 
         $photo= rand(1000,1000000).".".$imgExt; 
         move_uploaded_file($temp,$upload.$photo); 
         }
       



$update = mysqli_query($connect,"update teacher_details set
pst_app='".$pst_app."',
photo='".$photo."',
name='".$name."',
F_or_H='".$F_or_H."',
ADDRESS='".$ADDRESS."',
Contact_no='".$Contact_no."',
Mobile='".$Mobile."',
DOB='".$DOB."',
Email='".$Email."',
Marital='".$Marital."',
Spouse_Name='".$Spouse_Name."',
Edu_quali='".$Edu_quali."',
Spouse_work_address='".$Spouse_work_address."',
Spouse_phone='".$Spouse_phone."',
1st_specili='".$fi_spec."',
2nd_specili='".$sec_spec."',
3rd_specili='".$thr_spec."',
Graduation_college='".$Graduation_college."',
Graduation_per='".$Graduation_per."',
Post_graduation_YoP='".$Post_graduation_YoP."',
Post_grad_university='".$Post_grad_university."',
Post_grad_per='".$Post_grad_per."',
NTT_YoP='".$NTT_SUC."',
NTT_per='".$NTT_per."',
BEd_YoP='".$BEd_YoP."',
BEd_SUC='".$BEd_SUC."',
BEd_per='".$BEd_per."',
MED_YoP='".$MED_YoP."',
MED_YoP='".$MED_college."',
MED_per='".$MED_per."',
present_salary='".$present_salary."'
where Id='".$_GET['stud_id']."' ") or die
(mysqli_error($connect));

if($update)
{
echo "<script>;";
echo "window.alert('Data update successfully....!');";
echo 'window.location.href = "teacher_details.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo 'window.location.href ="teacher_update.php";';
echo "</script>";
}
}
?>




 
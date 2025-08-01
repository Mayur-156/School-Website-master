<!DOCTYPE HTML>
<html>
<head>
<title>Class2_Update</title>
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
$update = mysqli_query($connect,"select * from admission_form where Id='".$_GET['stud_id']."'") or die(mysqli_error($connect));
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
								<h4 class="title" style="color:green; font-size:30px"><center><strong>Admission Form</strong></center></h4>
							</div>


							<div class="form-body">

							<form name="myform" id="formID" method="post" novalidate="novalidate" enctype="multipart/form-data"  onsubmit="return validateform()">



								<!-- Upload photo start -->
								<div style="border:groove; green; display: inline-block; padding:20px; border-radius:20px;  background-color:whitesmoke;" >

								<label style="margin-right: 15px;  font-size: 25px;">Upload Photo:</label>

								<!-- <img id="preivew_img" src="images/no-image-full.jpg" width="70"/> -->

								<img id="preview_img" src="../Admin/Student_images/" height="100" width="100"/>
                                       <input type="file" id="image" class="fileinput" name="photo" accept=" .png, .jpg, .jpeg">


								</div>


								<!-- Upload photo ends -->
								<br>
								<br>
								<!-- Admission seeking started-->
								<label style="margin-right: 15px;  font-size: 25px;">Admission seeking for :</label>
									<label class="a1" style=" font-size: 25px;">1st</label>
<input type="radio" name="class" value="1st" <?php if($row['class']=='1st'){?>checked="checked"<?php }?>>
	
									<label class="a1" style=" font-size: 25px;">2nd</label>
<input type="radio" name="class" value="2nd" <?php if($row['class']=='2nd'){?> checked="checked"<?php }?>>


									<label class="a1" style=" font-size: 25px;">3rd</label>
<input type="radio" name="class" value="3rd" <?php if($row['class']=='3rd'){?> checked="checked"<?php }?>>


									<label class="a1" style=" font-size: 25px;">4th</label>
							<input type="radio" name="class" <?php if($row['class']=='4th'){?> checked="checked"<?php }?>>


								<!-- Admission seeking Ended-->

								<!-- Date of Admission started-->
					
					<label style="margin-left: 50px; font-size: 25px;" >Date of Admission :</label>
						
					<input type="date" name="DOA" style="border-radius: 8px; border: 2px solid green;"value="<?php echo $row['DOA']; ?>">
					
								<!-- Date of Admission Ended-->
<br>
								<label style="margin-left: 00px; font-size: 25px;">Enter GR. NO. :</label>
									<input type="text" name="GR_NO" style="border-radius: 8px; border: 2px solid green; margin-left: 20px;" value="<?php echo $row['GR_NO']; ?>">

									<br>
									<br>

								<!-- Student details started-->
								<div style="font-size: 30px; margin-top: 15px; "><center><span>Student Details</span></center>
								<hr style="border:  solid green;  border-radius: 5px;">
								</div>

								<div>
								<label style="margin-left: 00px; font-size: 25px;">First Name :</label>
									<input type="text" name="FN" style="border-radius: 8px; border: 2px solid green; margin-left: 20px;" value="<?php echo $row['FN']; ?>">>

								<label style="margin-left: 100px; font-size: 25px;">Last Name :</label>
									<input type="text" name="LN" style="border-radius: 8px; border: 2px solid green;" value="<?php echo $row['LN']; ?>">>
								</div>

<br>
								<div>
								<label style="margin-left: 00px; font-size: 25px;">Date of Birth:</label>
									<input type="date" name="DOB" style="border-radius: 8px; border: 2px solid green; margin-left: 9px;" value="<?php echo $row['DOB']; ?>">>

								<label style="margin-left: 115px; font-size: 25px;">Gender :</label>
	<input type="radio" name="GN" value="Male" <?php if($row['GN']=='Male'){?> checked="checked"<?php }?>>
	<label style=" font-size: 25px;">Male</label>

	<input type="radio" name="GN" value="Female"  <?php if($row['GN']=='Female'){?> checked="checked"<?php }?>><label style="font-size:25px;">Female</label>

	<input type="radio" name="GN" value="Other"  <?php if($row['GN']=='Other'){?> checked="checked"<?php }?>><label style="font-size: 25px;">Other</label>
								</div>
<br>
								<div>

								<td>
								<label style="margin-left: 0px; font-size: 25px;">Blood Group</label>
							    </td>
								<td>

								<select name="blood_group"   style="border-radius: 8px; border: 2px solid green; margin-left:20px; padding-right: 20px; ">
								<option disabled selected style="font-size:20px; color:black;"><b>Select Blood Group</b></option>
<option value="A+" style="font-size:20px; color:black;" <?php if($row['blood_group']=='A+'){echo
"selected";}?>>A positive (A+)</option>
								<option value="A-" style="font-size:20px; color:black;" <?php if($row['blood_group']=='A-'){echo
"selected";}?>>A negative (A-)</option>
							    <option value="B+" style="font-size:20px; color:black;" <?php if($row['blood_group']=='B+'){echo
"selected";}?>>B positive (B+)</option>
								<option value="B-" style="font-size:20px; color:black;" <?php if($row['blood_group']=='B-'){echo
"selected";}?>>B negative (B-)</option>
								<option value="O+" style="font-size:20px; color:black;" <?php if($row['blood_group']=='O+'){echo
"selected";}?>>O positive (O+)</option>
								<option value="O-" style="font-size:20px; color:black;" <?php if($row['blood_group']=='O-'){echo
"selected";}?>>O negative (O-)</option>
								<option value="AB+" style="font-size:20px; color:black;" <?php if($row['blood_group']=='AB+'){echo
"selected";}?>>AB positive (AB+)</option>
								<option value="AB-" style="font-size:20px; color:black;" <?php if($row['blood_group']=='AB-'){echo
"selected";}?>>AB Negative (AB-)</option>
						
			   
								</select>
								</td>

								<label style="margin-left: 100px; font-size: 25px;">Place of birth:</label>
									<input type="text" name="POB" style="border-radius: 8px; border: 2px solid green;" value="<?php echo $row['POB']; ?>">
								</div>
<br>
								<div>
								<label style="margin-left: 00px; font-size: 25px;">Aadhar No. :</label>
									<input type="text" name="AADHAR_NO" style="border-radius: 8px; border: 2px solid green; margin-left:16px" value="<?php echo $row['AADHAR_NO']; ?>">

								<td>
								<label style="margin-left: 100px; font-size: 25px;">Caste</label>
							    </td>
										<td>

										<select name="caste"   style="border-radius: 8px; border: 2px solid green; margin-left:85px; padding-right: 110px; ">
										<option disabled selected style="font-size:20px; color:black;"><b> Select Caste</b></option>
										<option value="obc" style="font-size:20px; color:black;"  <?php if($row['caste']=='obc'){echo"selected";}?>>OBC</option>
										<option value="open" style="font-size:20px; color:black;" <?php if($row['caste']=='open'){echo"selected";}?>>OPEN</option>
									    <option value="st" style="font-size:20px; color:black;" <?php if($row['caste']=='st'){echo"selected";}?>>ST</option>
										<option value="sc" style="font-size:20px; color:black;" <?php if($row['caste']=='sc'){echo"selected";}?>>SC</option>
										<option value="nt" style="font-size:20px; color:black;"<?php if($row['caste']=='nt'){echo"selected";}?>>NT</option>
			   
										</select>
										</td>
								</div>
<br>
								<div>
								<label style="margin-left: 00px; font-size: 25px;">First Language:</label>
									<input type="text" name="FLAN" style="border-radius: 8px; border: 2px solid green; margin-left: 4px;" value="<?php echo $row['FLAN']; ?>">
								</div>


								<!-- Student details  Ended-->

								<div style="font-size: 30px; margin-top: 15px; "><center><span>Parents Details</span></center>
								<hr style="border:  solid green;  border-radius: 5px;">
								</div>

								<!-- Parents details  Started-->
								<div>
								<label class="b1">Father Name:</label>
									<input type="text" name="FATHERNAME" class="b3" value="<?php echo $row['FATHERNAME']; ?>">
								<label class="b2" style="margin-left:238px">Mother Name:</label>
									<input type="text" name="MOTHERNAME" class="b3" value="<?php echo $row['MOTHERNAME']; ?>">
								</div>
<br>
								<div>
								<label class="b1">Phone No. :</label>
									<input type="text" name="PHONE" class="b3" style="margin-left: 20px;" value="<?php echo $row['PHONE']; ?>">
								</div>
<br>
								<div>

								<td>
								<label style="margin-left: 0px; font-size: 25px;">Edu. Qualification :</label>
							    </td>
									<td>

									<select name="edu_quali"   style="border-radius: 8px; border: 2px solid green; margin-left:10px; 	 ">
										<option disabled selected style="font-size:20px; color:black;"><b>Educational Qualification</b></option>
										<option value="10th" style="font-size:20px; color:black;" <?php if($row['edu_quali']=='10th'){echo"selected";}?>>10th</option>

										<option value="12th" style="font-size:20px; color:black;"  <?php if($row['edu_quali']=='12th'){echo"selected";}?>>12th</option>

										<option value="diploma" style="font-size:20px; color:black;"<?php if($row['edu_quali']=='diploma'){echo"selected";}?>>Diploma</option>

									    <option value="graduate" style="font-size:20px; color:black;"  <?php if($row['edu_quali']=='graduate'){echo"selected";}?>>Graduate</option>

										<option value="postgraduate" style="font-size:20px; color:black;"  <?php if($row['edu_quali']=='postgraduate'){echo"selected";}?>>PostGraduate</option>
										<option value="other" style="font-size:20px; color:black;"  <?php if($row['edu_quali']=='other'){echo"selected";}?>>Other</option>
			  
									</select>
									</td>

								<label class="b2" style="margin-left:165px">Profession:</label>
									<input type="text" name="PROFES" class="b3" value="<?php echo $row['PROFES']; ?>">
								</div>
								<!-- Parents details  Ended-->

								<!-- Residential address started-->
<br><br>
								<div style="font-size: 30px; margin-top: 15px; "><center><span>Residential Details</span></center>
								<hr style="border:  solid green;  border-radius: 5px;">
								</div>

								<div>
								<label class="b1">Address:</label>
									<textarea class="b3" name="ADDRESS"><?php echo $row['ADDRESS']; ?></textarea>

								<label class="b2">District:</label>
									<input type="text" name="DISTRICT" class="b3" value="<?php echo $row['DISTRICT']; ?>">
								
								<label class="b1" style="margin-left: 60px;">Taluka:</label>
									<input type="text" name="TALUKA" class="b3" value="<?php echo $row['TALUKA']; ?>">
								</div>
<br>
								<div>
								<label class="b1">Pincode:</label>
									<input type="text" name="PINCODE" class="b3" value="<?php echo $row['PINCODE']; ?>"> 
							
								<label class="b1" style="margin-left: 95px;">City:</label>
									<input type="text" name="CITY" class="b3" style="margin-left: 38px;" value="<?php echo $row['CITY']; ?>">
											
								<label class="b1" style="margin-left: 60px;">State:</label>
								<select name="STATE" id="state"  style="border-radius: 8px; border: 2px solid green; margin-left:20px; 	 ">
									<option value="Maharashtra"   <?php if($row['STATE']=='Maharashtra'){echo"selected";}?>>Maharashtra</option>
									</select>
									
								</div>
<br><br>
								<!-- Residential address ended-->
								


								

								<!-- Button Started -->
								<div class="form-group">
									<center><button type="submit" name="submit" class="btn btn-primary submit" style="font-size:25px; border-radius: 8px; border: 2px solid green; margin-left: 4px; ">Submit</button></center>
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
       



$update = mysqli_query($connect,"update admission_form set
photo='".$photo."',
class='".$class."',
GR_NO='".$GR_NO."',
DOA='".$DOA."',
FN='".$FN."',
LN='".$LN."',
DOB='".$DOB."',
GN='".$GN."',
blood_group='".$blood_group."',
POB='".$POB."',
AADHAR_NO='".$AADHAR_NO."',
caste='".$caste."',
FLAN='".$FLAN."',
FATHERNAME='".$FATHERNAME."',
MOTHERNAME='".$MOTHERNAME."',
PHONE='".$PHONE."',
edu_quali='".$edu_quali."',
PROFES='".$PROFES."',
ADDRESS='".$ADDRESS."',
DISTRICT='".$DISTRICT."',
TALUKA='".$TALUKA."',
PINCODE='".$PINCODE."',
CITY='".$CITY."',
STATE='".$STATE."'
where Id='".$_GET['stud_id']."' ") or die
(mysqli_error($connect));

if($update)
{
echo "<script>;";
echo "window.alert('Data update successfully....!');";
echo 'window.location.href = "class2.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo 'window.location.href ="class2_update.php";';
echo "</script>";
}
}
?>




 
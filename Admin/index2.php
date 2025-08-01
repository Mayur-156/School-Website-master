
<!DOCTYPE HTML>
<html>
<head>
<title>Wakharichapada School Admin Panel</title>
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
 <!-- <script type="text/javascript">
	function validateform()
	{
		var x=document.forms["formID"]["GR_NO"].value;
        if (x=="")
        {
        alert("GR. NO. must be filled out..");
        return false;
        }

        var x1=document.forms["formID"]["FN"].value;
        if (x1=="")
        {
        alert("First Name must be filled out..");
        return false;
        }

        var x2=document.forms["formID"]["LN"].value;
        if (x2=="")
        {
        alert("Last Name must be filled out..");
        return false;
        }

        var x3=document.forms["formID"]["DOB"].value;
        if (x3=="")
        {
        alert("Date of Birth must be filled out..");
        return false;
        }

        var x4=document.forms["formID"]["Gender"].value;
        if (x4=="")
        {
        alert("Gender must be filled out..");
        return false;
        }
        
        var x5=document.forms["formID"]["Group"].value;
        if (x5=="")
        {
        alert("Blood Group must be filled out..");
        return false;
        }

        var x6=document.forms["FormID"]["POB"].value;
        if (x6=="")
        {
        alert("Place of Birth must be filled out..");
        return false;
        }

        var x7=document.forms["formID"]["AADHAR_NO"].value;
        if (x7=="")
        {
        alert("Aadhar NO. must be filled out..");
        return false;
        }

        var x8=document.forms["formID"]["cast"].value;
        if (x8=="")
        {
        alert("Aadhar NO. must be filled out..");
        return false;
        }

        var x9=document.forms["formID"]["FLAN"].value;
        if (x9=="")
        {
        alert("First language must be filled out..");
        return false;
        }

        var x10=document.forms["formID"]["FATHERNAME"].value;
        if (x10=="")
        {
        alert("Father Name must be filled out..");
        return false;
        }

        var x11=document.forms["formID"]["MOTHERNAME"].value;
        if (x11=="")
        {
        alert("Mother Name must be filled out..");
        return false;
        }

        var x12=document.forms["formID"]["PHONE"].value;
        if (x12=="")
        {
        alert("phone Number must be filled out..");
        return false;
        }

        var x13=document.forms["formID"]["EMAIL"].value;
        if (x13=="")
        {
        alert("Email must be filled out..");
        return false;
        }

        var x14=document.forms["formID"]["E-deu"].value;
        if (x14=="")
        {
        alert("Mother Name must be filled out..");
        return false;
        }

        var x15=document.forms["FormID"]["PROFES"].value;
        if (x15=="")
        {
        alert("Profession must be filled out..");
        return false;
        }

        var x16=document.forms["formID"]["ADDRESS"].value;
        if (x16=="")
        {
        alert("Address must be filled out..");
        return false;
        }

        var x17=document.forms["FormID"]["DISTRICT"].value;
        if (x17=="")
        {
        alert("District must be filled out..");
        return false;
        }

        var x18=document.forms["formID"]["TALUKA"].value;
        if (x18=="")
        {
        alert("Taluka must be filled out..");
        return false;
        }

        var x19=document.forms["FormID"]["PINCODE"].value;
        if (x19=="")
        {
        alert("Pin Code must be filled out..");
        return false;
        }

        var x20=document.forms["formID"]["CITY"].value;
        if (x20=="")
        {
        alert("City must be filled out..");
        return false;
        }

        var x21=document.forms["formID"]["State"].value;
        if (x21=="")
        {
        alert("Mother Name must be filled out..");
        return false;
        }

	}

</script> -->
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
								<h4 class="title" style="color:green; font-size:30px"><center><strong>Admission Form</strong></center></h4>
							</div>


							<div class="form-body">

							<form name="myform" id="formID" method="post" novalidate="novalidate" enctype="multipart/form-data"  onsubmit="return validateform()">



								<!-- Upload photo start -->
								<div style="border:groove; green; display: inline-block; padding:20px; border-radius:20px;  background-color:whitesmoke;" >

								<label style="margin-right: 15px;  font-size: 25px;">Upload Photo:</label>

								<img id="preivew_img" src="images/no-image-full.jpg" width="70"/>

									 <input type="file" id="image" class="fileinput" name="photo" accept=" .png, .jpg, .jpeg"
									style="border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

							

								</div>


								<!-- Upload photo ends -->
								<br>
								<br>
								<!-- Admission seeking started-->
								<label style="margin-right: 15px;  font-size: 25px;">Admission seeking for :</label>
									<label class="a1" style=" font-size: 25px;">1st</label>
										<input type="radio" name="class" value="1st">
									<label class="a1" style=" font-size: 25px;">2nd</label>
										<input type="radio" name="class" value="2nd">
									<label class="a1" style=" font-size: 25px;">3rd</label>
										<input type="radio" name="class" value="3rd">
									<label class="a1" style=" font-size: 25px;">4th</label>
										<input type="radio" name="class" value="4th">
								<!-- Admission seeking Ended-->

								<!-- Date of Admission started-->
								<label style="margin-left: 50px; font-size: 25px;" >Date of Admission :</label>
										<input type="date" name="DOA" style="border-radius: 8px; border: 2px solid green;">
								<!-- Date of Admission Ended-->
<br>
								<label style="margin-left: 00px; font-size: 25px;">Enter GR. NO. :</label>
									<input type="text" name="GR_NO" style="border-radius: 8px; border: 2px solid green; margin-left: 20px;">

									<br>
									<br>

								<!-- Student details started-->
								<div style="font-size: 30px; margin-top: 15px; "><center><span>Student Details</span></center>
								<hr style="border:  solid green;  border-radius: 5px;">
								</div>

								<div>
								<label style="margin-left: 00px; font-size: 25px;">First Name :</label>
									<input type="text" name="FN" style="border-radius: 8px; border: 2px solid green; margin-left: 20px;">

								<label style="margin-left: 100px; font-size: 25px;">Last Name :</label>
									<input type="text" name="LN" style="border-radius: 8px; border: 2px solid green;">
								</div>

<br>
								<div>
								<label style="margin-left: 00px; font-size: 25px;">Date of Birth:</label>
									<input type="date" name="DOB" style="border-radius: 8px; border: 2px solid green; margin-left: 9px;">

								<label style="margin-left: 115px; font-size: 25px;">Gender :</label>
									<input type="radio" name="GN" value="Male" ><label style=" font-size: 25px;">Male</label>
									<input type="radio" name="GN" value="Female"><label style="font-size:25px;">Female</label>
									<input type="radio" name="GN" value="Other"><label style="font-size: 25px;">Other</label>
								</div>
<br>
								<div>

								<td>
								<label style="margin-left: 0px; font-size: 25px;">Blood Group</label>
							    </td>
								<td>

								<select name="blood_group"   style="border-radius: 8px; border: 2px solid green; margin-left:20px; padding-right: 20px; ">
								<option disabled selected style="font-size:20px; color:black;"><b>Select Blood Group</b></option>
								<option value="A+" style="font-size:20px; color:black;">A positive (A+)</option>
								<option value="A-" style="font-size:20px; color:black;">A negative (A-)</option>
							    <option value="B+" style="font-size:20px; color:black;">B positive (B+)</option>
								<option value="B-" style="font-size:20px; color:black;">B negative (B-)</option>
								<option value="O+" style="font-size:20px; color:black;">O positive (O+)</option>
								<option value="O-" style="font-size:20px; color:black;">O negative (O-)</option>
								<option value="AB+" style="font-size:20px; color:black;">AB positive (AB+)</option>
								<option value="AB-" style="font-size:20px; color:black;">AB Negative (AB-)</option>
			   
								</select>
								</td>

								<label style="margin-left: 100px; font-size: 25px;">Place of birth:</label>
									<input type="text" name="POB" style="border-radius: 8px; border: 2px solid green;">
								</div>
<br>
								<div>
								<label style="margin-left: 00px; font-size: 25px;">Aadhar No. :</label>
									<input type="text" name="AADHAR_NO" style="border-radius: 8px; border: 2px solid green; margin-left:16px">

								<td>
								<label style="margin-left: 100px; font-size: 25px;">Caste</label>
							    </td>
										<td>

										<select name="caste"   style="border-radius: 8px; border: 2px solid green; margin-left:85px; padding-right: 110px; ">
										<option disabled selected style="font-size:20px; color:black;"><b> Select Caste</b></option>
										<option value="obc" style="font-size:20px; color:black;">OBC</option>
										<option value="open" style="font-size:20px; color:black;">OPEN</option>
									    <option value="st" style="font-size:20px; color:black;">ST</option>
										<option value="sc" style="font-size:20px; color:black;">SC</option>
										<option value="nt" style="font-size:20px; color:black;">NT</option>
			   
										</select>
										</td>
								</div>
<br>
								<div>
								<label style="margin-left: 00px; font-size: 25px;">First Language:</label>
									<input type="text" name="FLAN" style="border-radius: 8px; border: 2px solid green; margin-left: 4px;">
								</div>


								<!-- Student details  Ended-->

								<div style="font-size: 30px; margin-top: 15px; "><center><span>Parents Details</span></center>
								<hr style="border:  solid green;  border-radius: 5px;">
								</div>

								<!-- Parents details  Started-->
								<div>
								<label class="b1">Father Name:</label>
									<input type="text" name="FATHERNAME" class="b3">
								<label class="b2" style="margin-left:238px">Mother Name:</label>
									<input type="text" name="MOTHERNAME" class="b3">
								</div>
<br>
								<div>
								<label class="b1">Phone No. :</label>
									<input type="text" name="PHONE" class="b3" style="margin-left: 20px;">
								<label class="b2" style="margin-left: 240px;">Email:</label>
									<input type="text" name="EMAIL" class="b3">
								</div>
<br>
								<div>

								<td>
								<label style="margin-left: 0px; font-size: 25px;">Edu. Qualification :</label>
							    </td>
									<td>

									<select name="edu_quali"   style="border-radius: 8px; border: 2px solid green; margin-left:10px; 	 ">
										<option disabled selected style="font-size:20px; color:black;"><b>Educational Qualification</b></option>
										<option value="10th" style="font-size:20px; color:black;">10th</option>
										<option value="12th" style="font-size:20px; color:black;">12th</option>
										<option value="diploma" style="font-size:20px; color:black;">Diploma</option>
									    <option value="graduate" style="font-size:20px; color:black;">Graduate</option>
										<option value="postgraduate" style="font-size:20px; color:black;">PostGraduate</option>
										<option value="other" style="font-size:20px; color:black;">Other</option>
			  
									</select>
									</td>

								<label class="b2" style="margin-left:165px">Profession:</label>
									<input type="text" name="PROFES" class="b3">
								</div>
								<!-- Parents details  Ended-->

								<!-- Residential address started-->
<br><br>
								<div style="font-size: 30px; margin-top: 15px; "><center><span>Residential Details</span></center>
								<hr style="border:  solid green;  border-radius: 5px;">
								</div>

								<div>
								<label class="b1">Address:</label>
									<textarea class="b3" name="ADDRESS"></textarea>

								<label class="b2">District:</label>
									<input type="text" name="DISTRICT" class="b3">
								
								<label class="b1" style="margin-left: 60px;">Taluka:</label>
									<input type="text" name="TALUKA" class="b3">
								</div>
<br>
								<div>
								<label class="b1">Pincode:</label>
									<input type="text" name="PINCODE" class="b3">
							
								<label class="b1" style="margin-left: 95px;">City:</label>
									<input type="text" name="CITY" class="b3" style="margin-left: 38px;">
											
								<label class="b1" style="margin-left: 60px;">State:</label>
								<select name="STATE" id="state"  style="border-radius: 8px; border: 2px solid green; margin-left:20px; 	 ">
									<option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="West Bengal">West Bengal</option>
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

include 'connect.php';


if(isset($_POST['submit']))
    {

    
    extract($_POST);

        $pname=$_FILES['photo']['name']; 
         $type=$_FILES['photo']['type'];
         $size=$_FILES['photo']['size']; 
         $temp=$_FILES['photo']['tmp_name']; 
         if($pname)
         {
         
         $upload= "../Admin/Student_images/"; 
         $imgExt=strtolower(pathinfo($pname, PATHINFO_EXTENSION)); 
         $valid_ext= array('jpg','png','jpeg' ); 
         $photo= rand(1000,1000000).".".$imgExt; 
         move_uploaded_file($temp,$upload.$photo); 
         }
       
        

   $asd ="insert into admission_form  (class,GR_NO,DOA,FN,LN,DOB,GN,blood_group,POB,AADHAR_NO,caste,FLAN,FATHERNAME,MOTHERNAME,PHONE,edu_quali,PROFES,ADDRESS,DISTRICT,TALUKA,PINCODE,CITY,STATE,photo)
    values('$class','$GR_NO','$DOA','$FN','$LN','$DOB','$GN','$blood_group','$POB','$AADHAR_NO','$caste','$FLAN','$FATHERNAME','$MOTHERNAME','$PHONE','$edu_quali','$PROFES','$ADDRESS','$DISTRICT','$TALUKA','$PINCODE','$CITY','$STATE','$photo')";

    

        $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
       
       


        if($asd )
        {
        echo "<script>;";
        echo "window.alert('Data insert successfully....!');";
        echo 'window.location.href = "index2.php";';
        echo "</script>";
        }
        else
        {
        echo "<script>;";
        echo "window.alert('Data error....!');";
        echo "</script>";
        }
         }



?>

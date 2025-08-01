<!DOCTYPE HTML>
<html>
<head>
<title>Teacher Registration</title>
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
<!-- font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika+Negative&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
<!-- //font -->

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
	hr{
		height:5px;border-width:0;color:gray;background-color:black
	}
	h3{
		font-family: 'Signika Negative', sans-serif;
	}
	label{
		font-size: 22px;
		font-family: 'Signika', sans-serif;
		color: black; 
	}
	table,td,tr,th{
		border: solid 2px black	;
		border-radius: 4px;
	}
	input {
	  outline: 0;
	  border-width: 0 0 2px;
	  border-color: blue
	}
	input:focus {
	  border-color: green
	}
</style>
<script type="text/javascript">
	function validateform()
	{

		var x=document.forms["formID"]["pst_app"].value;
        if (x=="")
        {
        alert("Post must be filled out..");
        return false;
        }

        var x1=document.forms["formID"]["name"].value;
        if (x1=="")
        {
        alert(" Name be filled out..");
        return false;
        }

        var x2=document.forms["formID"]["F_or_H"].value;
        if (x2=="")
        {
        alert("Father OR Husband must be filled out..");
        return false;
        }

        var x3=document.forms["formID"]["ADDRESS"].value;
        if (x3=="")
        {
        alert("Address must be filled out..");
        return false;
        }

        var x4=document.forms["formID"]["Mobile"].value;
        if (x4=="")
        {
        alert("Mobile must be filled out..");
        return false;
        }

        var x5=document.forms["formID"]["Contact_no"].value;
        if (x5=="")
        {
        alert("Contact No must be filled out..");
        return false;
        }

        // var x6=document.forms["formID"]["Date of Birth"].value;
        // if (x6=="")
        // {
        // alert("Post must be filled out..");
        // return false;
        // }

        var x7=document.forms["formID"]["Email"].value;
        if (x7=="")
        {
        alert("Email must be filled out..");
        return false;
        }

        // var x8=document.forms["formID"]["married"].value;
        // if (x8=="")
        // {
        // alert(" must be filled out..");
        // return false;
        // }

        // var x9=document.forms["formID"]["Spouse_Name"].value;
        // if (x9=="")
        // {
        // alert("Spouse Name must be filled out..");
        // return false;
        // }

        // var x10=document.forms["formID"]["Edu_quali"].value;
        // if (x10=="")
        // {
        // alert("Educational qualification  must be filled out..");
        // return false;
        // }

        // var x11=document.forms["formID"]["Spouse_work_address"].value;
        // if (x11=="")
        // {
        // alert("Work address must be filled out..");
        // return false;
        // }

        // var x12=document.forms["formID"]["Spouse_phone"].value;
        // if (x12=="")
        // {
        // alert(" Phone Number must be filled out..");
        // return false;
        // }

      

         var x16=document.forms["formID"]["present_salary"].value;
        if (x16=="")
        {
        alert("present salary date must be filled out..");
        return false;
        }

        

	}



</script>
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
								<h4 class="title" style="color:green; font-size:30px"><center><strong>Teacher Details</strong></center></h4>
							</div>
							<div class="form-body">
							<form name="myform" id="formID" method="post" novalidate="novalidate" enctype="multipart/form-data"  onsubmit="return validateform()">
								<div class="row">
								 
								  <div class="col-xs-6">
								  	<label>Post Applied For:</label>
								  	<input type="text" name="pst_app">
								  </div>

								  <div class="col-xs-6">
								  	<label style="margin-right: 15px;  font-size: 25px;">
								  	Upload Photo:
								  	</label>

									<img id="preivew_img" src="images/no-image-full.jpg" width="70"/>

									 <input type="file" id="image" class="fileinput" name="photo" accept=" .png, .jpg, .jpeg"
									style="border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">
								  </div>

								</div>

								<hr>
								<h3>GENERAL INFORMATION</h3>
								<div class="row">
								  <div class="col-xs-6">
								  	<label>Name:</label>
								  	<input type="text" name="name" required="">
								  </div>
								  <div class="col-xs-6">
								  	<label>Father's/Husband's Name :</label>
								  	<input type="text" name="F_or_H">
								  </div>
								</div>

								<div class="row">
								  <div class="col-xs-6">
								  	<label >Address:</label>
									<textarea  name="ADDRESS"></textarea>
								  </div>
								  <div class="col-xs-6">
								  	
								  </div>
								</div>

								<div class="row">
								  <div class="col-xs-6">
								  	<label >Contact No. (R):</label>
									<input type="text" name="Contact_no">
								  </div>
								  <div class="col-xs-6">
								  	<label>Mobile(P):</label>
								  	<input type="text" name="Mobile">
								  </div>
								</div>


								<div class="row">
								  <div class="col-xs-6">
								  	<label >Date of Birth:</label>
									<input type="date" name="DOB">
								  </div>
								  <div class="col-xs-6">
								  	<label>Email ID:</label>
								  	<input type="email" name="Email">
								  </div>
								</div>

								<hr>
								<h3>Marital Status</h3>

								<div class="row">
								  <div class="col-xs-6">
								  	<label>Single</label>
									<input type="radio" value="Single" name="Marital">
									<label>Married</label>
									<input type="radio"  value="Married"name="Marital">
								  </div>
								  <div class="col-xs-6">
								  	
								  </div>
								</div>


								<div class="row">
								  <div class="col-xs-6">
										<label>Spouse Name:</label>
										<input type="text" name="Spouse_Name">
								  </div>
								  <div class="col-xs-6">
								  		<label>Educational Qualification:</label>
								  		<input type="text" name="Edu_quali">
								  </div>
								</div>


								<div class="row">
								  <div class="col-xs-6">
										<label>Work Address:</label>
										<textarea name="Spouse_work_address"></textarea>
								  </div>
								  <div class="col-xs-6">
								  		<label>Phone:</label>
								  		<input type="text" name="Spouse_phone">
								  </div>
								</div>

								<hr>
								<h3 style="margin-bottom: 25px;">Subject(s) Specialization:</h3>

								<div>
								  <label>1)</label>
								  <input type="text" name="fi_spec" style="width: 50%;">
								  <br><br>
								  <label>2)</label>
								  <input type="text" name="sec_spec" style="width: 50%;">
								  <br><br>
								  <label>3)</label>
								  <input type="text" name="thr_spec" style="width: 50%;"	>
								  
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
									    	<input type="date" name="secondary_YoP">
									    </td>
									    <td>
									    	<input type="text" name="secon_SUC">
									    </td>
									     <td>
									    	<input type="text" name="secon_per">
									    </td>
									  </tr>
									  <tr>
									    <td>Sr.Secondary</td>
									    <td>
									    	<input type="date" name="Sr_secondary_YoP">
									    </td>
									    <td>
									    	<input type="text" name="Sr_secon_SUC">
									    </td>
									    <td>
									    	<input type="text" name="Sr_secon_per">
									    </td>
									  </tr>
									  <tr>
									    <td>Graduation</td>
									    <td>
									    	<input type="date" name="Graduation_YoP">
									    </td>
									    <td>
									    	<input type="text" name="Graduation_college">
									    </td>
									    <td>
									    	<input type="text" name="Graduation_per">
									    </td>
									  </tr>
									  <tr>
									    <td>Post Graduation</td>
									    <td>
									    	<input type="date" name="Post_graduation_YoP">
									    </td>
									    <td>
									    	<input type="text" name="Post_grad_university">
									    </td>
									    <td>
									    	<input type="text" name="Post_grad_per">
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
									    	<input type="date" name="NTT_YoP">
									    </td>
									    <td>
									    	<input type="text" name="NTT_SUC">
									    </td>
									     <td>
									    	<input type="text" name="NTT_per">
									    </td>
									  </tr>
									  <tr>
									    <td>B. Ed</td>
									    <td>
									    	<input type="date" name="BEd_YoP">
									    </td>
									    <td>
									    	<input type="text" name="BEd_SUC">
									    </td>
									    <td>
									    	<input type="text" name="BEd_per">
									    </td>
									  </tr>
									  <tr>
									    <td>M. Ed</td>
									    <td>
									    	<input type="date" name="MED_YoP">
									    </td>
									    <td>
									    	<input type="text" name="MED_college">
									    </td>
									    <td>
									    	<input type="text" name="MED_per">
									    </td>
									  </tr>
									 
									 
									 
								</table>
								<hr>
								<div class="row">
								  <div class="col-xs-6">
								  	<label>Present Salary:</label>
								  	<input type="text" name="present_salary">
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
            
         $upload= "../Admin/teacher_image/"; 
         $imgExt=strtolower(pathinfo($pname, PATHINFO_EXTENSION)); 
         $valid_ext= array('jpg','png','jpeg' ); 
         $photo= rand(1000,1000000).".".$imgExt; 
         move_uploaded_file($temp,$upload.$photo); 
         }
       
        

   $asd ="insert into teacher_details  (pst_app,photo,name,F_or_H,ADDRESS,Contact_no,Mobile,DOB,Email,Marital,Spouse_Name,Edu_quali,Spouse_work_address,Spouse_phone,1st_specili,2nd_specili,3rd_specili,secondary_YoP,secon_SUC,secon_per,Sr_secondary_YoP,Sr_secon_SUC,Sr_secon_per,Graduation_YoP,Graduation_college,Graduation_per,Post_graduation_YoP,Post_grad_university,Post_grad_per,NTT_YoP,NTT_SUC,NTT_per,BEd_YoP,BEd_SUC,BEd_per,MED_YoP,MED_college,MED_per,present_salary)

    values('$pst_app','$photo','$name','$F_or_H','$ADDRESS','$Contact_no','$Mobile','$DOB','$Email','$Marital','$Spouse_Name','$Edu_quali','$Spouse_work_address','$Spouse_phone','$fi_spec','$sec_spec','$thr_spec','$secondary_YoP','$secon_SUC','$secon_per','$Sr_secondary_YoP','$Sr_secon_SUC','$Sr_secon_per','$Graduation_YoP','$Graduation_college','$Graduation_per','$Post_graduation_YoP','$Post_grad_university','$Post_grad_per','$NTT_YoP','$NTT_SUC','$NTT_per','$BEd_YoP','$BEd_SUC','$BEd_per','$MED_YoP','$MED_college','$MED_per','$present_salary')";


        $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
        if($asd)
        {
        echo "<script>;";
        echo "window.alert('Data insert successfully....!');";
        echo 'window.location.href = "addteacher.php";';
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

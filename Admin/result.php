<!DOCTYPE HTML>
<html>
<head>
<title>Result</title>
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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Ubuntu&display=swap" rel="stylesheet">
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

	.tile{
		margin-top: 30px;
		font-family: 'Oswald', sans-serif;
		font-family: 'Ubuntu', sans-serif;
	}
	input{
		border: solid 3px black;
		border-radius: 3px;
	}



</style>

<!-- <script type="text/javascript">
	function validateform()
	{

		var x=document.forms["formID"]["gr_no"].value;
        if (x=="")
        {
        alert("GR. NO. must be filled out..");
        return false;
        }

        var x1=document.forms["formID"]["std"].value;
        if (x=="")
        {
        alert("GR. NO. must be filled out..");
        return false;
        }

        var x2=document.forms["formID"]["Bhasha"].value;
        if (x2=="")
        {
        alert("Bhasha must be filled out..");
        return false;
        }

        var x3=document.forms["formID"]["Hindi"].value;
        if (x3=="")
        {
        alert("Hindi must be filled out..");
        return false;
        }

        var x4=document.forms["formID"]["English"].value;
        if (x4=="")
        {
        alert("English must be filled out..");
        return false;
        }

        var x5=document.forms["formID"]["Maths"].value;
        if (x5=="")
        {
        alert("Math must be filled out..");
        return false;
        }

        var x6=document.forms["formID"]["Science"].value;
        if (x6=="")
        {
        alert("Science must be filled out..");
        return false;
        }

        var x7=document.forms["formID"]["S_S"].value;
        if (x7=="")
        {
        alert("Social Studies must be filled out..");
        return false;
        }

        var x8=document.forms["formID"]["Art"].value;
        if (x8=="")
        {
        alert("Art must be filled out..");
        return false;
        }

        var x9=document.forms["formID"]["Craft"].value;
        if (x9=="")
        {
        alert(" Craft must be filled out..");
        return false;
        }

        var x10=document.forms["formID"]["PT"].value;
        if (x10=="")
        {
        alert("P.T must be filled out..");
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
								<h4 class="title" style="color:green; font-size:30px"><center><strong>RESULT</strong></center></h4>
							</div>
							<div class="form-body">
								 <form name="notice" id="formID" method="post" novalidate="novalidate" enctype="multipart/form-data"  onsubmit="return validateform()" >
								 		<div>
								 			<label>ENTER GR. NO.:</label>
											<input type="text" name="gr_no">
								 		</div>

								 		<div style="margin-top: 30px;">
								 			<label style="margin-right:50px">STD. :</label>
									<select name="std"   style="border-radius: 8px; border: 2px solid black; margin-left:10px; 	 ">
										<option disabled selected style="font-size:20px; color:black;"><b>Select Standard</b></option>
										<option value="1st" style="font-size:20px; color:black;">1st</option>
										<option value="2nd" style="font-size:20px; color:black;">2nd</option>
										<option value="3rd" style="font-size:20px; color:black;">3rd</option>
									    <option value="4th" style="font-size:20px; color:black;">4th</option>
									</select>
								 		</div>
								 		<hr>
										<div class="tile">
											<center><h2>Enter Marks</h2></center>
										</div>
										<br>
										<div class="tile">
											<label>Bhasha :</label>
											<input type="number" name="Bhasha" style="margin-left:30px;">
										</div>
										<div  class="tile">
											<label>Hindi :</label>
											<input type="number" name="Hindi" style="margin-left:43px;">
										</div>
										<div  class="tile">
											<label>English :</label>
											<input type="number" name="English" style="margin-left:30px;">
										</div  class="tile">
										<div class="tile">
											<label>Maths :</label>
											<input type="number" name="Maths" style="margin-left:37px;">
										</div>
										<div  class="tile">
											<label>Science :</label>
											<input type="number" name="Science" style="margin-left:28px;">
										</div >
										<div  class="tile">
											<label>Social Studies :</label>
											<input type="number" name="S_S">
										</div>
										<div  class="tile">
											<label>Art :</label>
											
											
											
											<td>

											<select name="Art"  style="margin-left:58px;">
											<option disabled selected style="font-size:20px; color:black;"><b>Select Grade</b></option>
											<option value="A+" style="font-size:20px; color:black;">A+</option>
											<option value="A" style="font-size:20px; color:black;">A</option>
										    <option value="B+" style="font-size:20px; color:black;">B+</option>
											<option value="B" style="font-size:20px; color:black;">B</option>
											<option value="C+" style="font-size:20px; color:black;">C+</option>
											<option value="C" style="font-size:20px; color:black;">C</option>
											
											</select>
											</td>
										</div>
										<div  class="tile">
											<label>Craft :</label>
<td>

											<select name="Craft"  style="margin-left:58px;">
											<option disabled selected style="font-size:20px; color:black;"><b>Select Grade</b></option>
											<option value="A+" style="font-size:20px; color:black;">A+</option>
											<option value="A" style="font-size:20px; color:black;">A</option>
										    <option value="B+" style="font-size:20px; color:black;">B+</option>
											<option value="B" style="font-size:20px; color:black;">B</option>
											<option value="C+" style="font-size:20px; color:black;">C+</option>
											<option value="C" style="font-size:20px; color:black;">C</option>
											
											</select>
											</td>
										</div>

										<div  class="tile">
											<label>P.T :</label>
											<td>

											<select name="PT"  style="margin-left:58px;">
											<option disabled selected style="font-size:20px; color:black;"><b>Select Grade</b></option>
											<option value="A+" style="font-size:20px; color:black;">A+</option>
											<option value="A" style="font-size:20px; color:black;">A</option>
										    <option value="B+" style="font-size:20px; color:black;">B+</option>
											<option value="B" style="font-size:20px; color:black;">B</option>
											<option value="C+" style="font-size:20px; color:black;">C+</option>
											<option value="C" style="font-size:20px; color:black;">C</option>
											
											</select>
											</td>
										</div>
										<div style="margin-left:500px;" >
											<label>MARKS OBTAINED:</label>
											<input type="number" name="mrk_obt"  style="  margin-top: 20px;">
										</div>
										<div style="margin-left:500px;" >
											<label>TOTAL MARKS:</label>
											<input type="number" name="total_marks"  style=" margin-left: 30px; margin-top: 20px; margin-bottom: 60px;">
										</div>
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

        
       
        

    $asd ="insert into result(gr_no,std,bhasha,Hindi,English,Maths,Science,S_S,Art,Craft,PT,mrk_obt,total_marks) 
               values('$gr_no','$std','$Bhasha','$Hindi','$English','$Maths','$Science','$S_S','$Art','$Craft','$PT','$mrk_obt','$total_marks')";

   

    

        $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
        if($asd)
        {
        echo "<script>;";
        echo "window.alert('Marks Uploaded');";
        echo 'window.location.href = "result.php";';
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
<?php session_start();
  include'connect.php';
 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Result Details</title>
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
<style type="text/css">
	table{
	border: groove 5px green;
	font-family: arial, sans-serif;
	width: 100%;
	text-align: center;
}
td, th {
	  border: 1px solid dimgrey;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: floralwhite;
}
.table-responsive {
    max-height:500px;
}
</style>
</head> 
<body class="cbp-spmenu-push">
	<?php
$view = mysqli_query($connect,"select * from result  order by
id asc") or die(mysqli_error($connect));
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
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4 style="color: black; font-family: cursive ; ">Result Details </h4>
						
						<table class="table table-bordered"> 
							<thead> 
								<tr> 
													
									   			<th>ID</th>
							            <th>GR. NO.</th>
							            <th>STD</th>
							            <th>Bhasha </th>
							            <th>Hindi</th>
							            <th>English</th>
							            <th>Maths</th>
							            <th>Science</th>
							            <th>Social Studies</th>
							            <th>Art</th>
							            <th>Craft</th>
							            <th>P.T.</th>
							            <th>Action</th>
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
						
						<td><?php echo $row['gr_no']; ?></td>
						<td><?php echo $row['std']; ?></td>
						<td><?php echo $row['bhasha']; ?></td>
						<td><?php echo $row['Hindi']; ?></td>
						<td><?php echo $row['English']; ?></td>
						<td><?php echo $row['Maths']; ?></td>
						<td><?php echo $row['Science']; ?></td>
						<td><?php echo $row['S_S']; ?></td>
						<td><?php echo $row['Art']; ?></td>
						<td><?php echo $row['Craft']; ?></td>
						<td><?php echo $row['PT']; ?></td>
					
						<td>
						<a class="text-success" onClick="return confirm('Are you sure you want to update this registration details ?);"
						href="result.update.php?stud_id=<?php echo $Id;?>"
						title="Update registration details"><i class="fa fa-edit"></i></a>

						<a class="text-danger" onClick="return confirm('Are you sure you want to delete this registration details ?);"
						href="result_delete.php?stud_id=<?php echo $Id;?>"
						title="Delete registration details"><i class="fa fa-trash-o"></i></a>
						</td>
						</tr>

						<?php 
						} 
						?>	
								
							</tbody> 
						</table> 
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		<? php include'footer.php' ?>
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
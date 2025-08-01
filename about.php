<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100i,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<!-- //online-fonts -->

	 <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- //font-awesome icons -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Mukta+Malar:400,500,600,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
</head>

<body>
    <!-- banner -->
    <div class="inner-banner" style=" background-image: url('images/cover8.jpg');">
        <!-- header -->
      <?php include 'Header.php'; ?>
        <!-- //header -->
       
    </div>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="Index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
    </ol>
	 <!-- //banner-text -->
	 <section class="banner_bottom1 py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="heading-agileinfo text-center">About  <span>Us</span></h3>
			<div class="inner_sec_info_wthree_agile mt-md-5 pt-3">
				<div class="row help_full">
					<div class="col-lg-6 banner_bottom_grid help">
						<img src="images/School_img14.jpeg" alt=" " class="img-fluid" style="margin-top: 100px;">
					</div>
					<div class="col-lg-6 banner_bottom_left1">
						<h4>School Details</h4>
						<p>Z.P. SCHOOL WAKHARI was established in 1985 and it is managed by the Local body. It is 
                            located in Rural area. It is located in DEVLA block of NASHIK district of Maharashtra. The 
                            school consists of Grades from 1 to 4. The school is Co-educational and it doesn't have an 
                            attached pre-primary section. The school is N/A in nature and is not using school building as 
                            a shift-school. Marathi is the medium of instructions in this school. This school is 
                            approachable by all weather road.</p>
						<p>The school has Government building. It has got 8 classrooms for instructional 
                            purposes. All the classrooms are in good condition. It has 2 other rooms for non-teaching 
                            activities. The school has a separate room for Head master/Teacher. The school has Partial 
                            boundary wall. The school has doesn't have electric connection. The source of Drinking 
                            Water in the school is Tap Water and it is functional. The school has 1 boys toilet and it is 
                            functional. and 2 girls’ toilet and it is functional.</p>
						</div>
				</div>
			</div>
		</div>
	</section>

	<!-- location -->
	<center>
	<div class="container">
	 
	 <h1>Location</h1>
	 <br>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4876.816958176045!2d74.22253820912123!3d20.42119991038585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bde809d0dbc98eb%3A0x17f346613ac3a110!2sZ.P.SCHOOL%20WAKHARI!5e0!3m2!1sen!2sin!4v1647148110373!5m2!1sen!2sin" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
		
	</div>
	</center>
	<br>
	<!-- location -->

	
</div>

	 
	

<!--/newsletter-->
    <?php include 'footer.php'; ?>
	
    <!--//newsletter-->

<!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
    <!-- start-smooth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>
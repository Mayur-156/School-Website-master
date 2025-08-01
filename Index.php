<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>ZP Wakharchapada School</title>
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
	<!-- Testimonials-Css -->
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="screen" property="" />
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
    <!-- online-fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100i,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>
    <!-- banner -->
    <div class="banner"  style=" background-image: url('images/cover10.jpg');">
        <!-- header -->
       <?php include 'Header.php'; ?>
        <!-- //header -->
        <div class="container">
            <!-- banner-text -->
            <div class="banner-text">
                <div class="slider-info">
                   
					<blockquote style="font-size: 35px; color: whitesmoke; text-align: left; margin-left: -20px;"><b>“Education is our passport to the future, for tomorrow belongs to the people who prepare for it today.”<br> <i> – Malcolm X</i></b></blockquote>
				</div>
            </div>
        </div>
    </div>
	 <!-- //banner-text -->
	 <!--banner form-->
	<section class="banner_form py-5">
		<center>
						<h2 class="heading-agileinfo">Welcome To <span> Education</span></h2>
						<p class="vam" style="font-size: 25px;">Education in its general sense is a form of learning in which the <b>knowledge</b>, <b>skills</b> and<b> habit</b> of a group of people are transfered from one generation to other through teaching or research.</p></div>
					</center>
	</section>
	<!--//banner form-->
	  <!-- /services -->
    <section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5 py-3">
               <h3 class="heading-agileinfo text-center">What <span> We do</span></h3>
                <div class="row middle-grids mt-md-5 pt-4">
                    <div class="col-lg-4 about-in-w3ls middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-graduation-cap mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">
                                  Educate Children</h5>
                                <p class="card-text">
                                	<br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in-w3ls middle-grid-info active text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-book mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">Provide facilites</h5>
                                <p class="card-text"> <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 about-in-w3ls middle-grid-info text-center">
                        <div class="card">
                            <div class="card-body">
                                <i class="fas fa-globe mb-2"></i>
                                <h5 class="card-title text-uppercase my-3">organize Events for children	</h5>
                                <p class="card-text">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->
<!-- choose -->
	
	</div>   
</section>
<!-- //choose -->
	 <!-- /advantage -->
    
    <!-- //advantage -->
	
	<!-- stats -->
	<section class="stats py-5">
		<div class="container py-md-5">
			<h3 class="heading-agileinfo text-center">Our  <span>Achievements</span></h3>
			
			<span class="w3-line black"></span>	
			<div class="row inner_w3l_agile_grids-1 pt-md-7 mt-4" style="margin-left: 200px;" >
				<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid">
					<i class="fas fa-trophy mb-2"></i>
					<p class="counter">1985</p>
					<h3>Year of Foundation</h3>
				</div>
				
				<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
					<i class="fas fa-user mb-2"></i>
					<p class="counter">125</p>
					<h3>Certified Staff</h3>
				</div>
				<div class="col-lg-3 col-sm-6 w3layouts_stats_left w3_counter_grid2">
					<i class="fas fa-users mb-2"></i>
					<p class="counter">1500</p>
					<h3>Students</h3>
				</div>
			</div>
		</div>	
	</section>
<!-- //stats -->
<!--/newsletter-->
    <!-- footer-->
    <?php include 'footer.php'; ?>
    <!--/footer-->
	
    <!--//newsletter-->

<!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- carousel(for feedback) -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 2,
						nav: false
					},
					1000: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	
	<!-- //carousel(for feedback) -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

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
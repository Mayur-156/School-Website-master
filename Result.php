<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8"/>
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

<!-- //Style Started  -->
<!-- Font Started-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
<!--font Ended-->
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float:left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px 0px 50px;
  transition: 0.3s;
  font-size: 27px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
<!-- //Style Ended  -->
</head>

<body>
    <!-- banner -->
    <div class="inner-banner" style=" background-image: url('images/cover12.jpg');">
        <!-- header -->
        <?php include 'Header.php'; ?>
        <!-- //header -->
       
    </div>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="Index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Result</li>
    </ol>
	 <!-- //banner-text -->
	

	
	 <section class="banner_bottom1 py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="heading-agileinfo text-center"><span>Result</span></h3>
            <center>
		      <form style="margin:100px" method="post" action="Front_result.php">
                <div style="border:2px black solid; padding: 50px; background: lightblue; font-family: 'Oswald', sans-serif; font-size: 25px;">
                        <label style="margin-right:50px" >Enter GR. No. :- </label>
                            <input type="text" name="Enroll" style="background:whitesmoke; border-radius: 18px; box-shadow:   0px 0px 40px 12px #0ff;"> 
                                <br>
                        <button style="margin-top: 50px; background: #0066A2; color: white; border-style: outset; border-color: #0066A2; height: 50px; width: 100px; font: bold15px arial,sans-serif; text-shadow: none; border-radius: 15px; ">Submit</button>     
                </div>
               
                  
              </form>
            </center>
		
		</div>
	</section>


    <?php include 'footer.php'; ?>
	<div class="copyright py-3">
		<div class="container">
			<div class="row">
				
				
			</div>
		</div>
	</div>
  

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
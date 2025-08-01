<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Contact Us</title>
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
    <script type="text/javascript">
        function validateform() {
            
            var x=document.forms["myForm"]["Name"].value;
            if (x=="")
             {
                alert("Name must be filled out..");
                return false;
             }

              var x1=document.forms["myForm"]["Email"].value;
            if (x1=="")
             {
                alert("Email must be filled out..");
                return false;
             }

              var x2=document.forms["myForm"]["message"].value;
            if (x2=="")
             {
                alert("Message must be filled out..");
                return false;
             }
        }
    </script>

</head>
    
<body>
    <!-- banner -->
    <div class="inner-banner" style=" background-image: url('images/contact.jpg');">
        <!-- header -->
        <?php include 'Header.php'; ?>
        <!-- //header -->
       
    </div>
	 <!-- //banner-text -->
	   <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="Index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>
    <!-- contact -->
    <section class="banner-bottom-w3ls pt-lg-5 pt-md-3 pt-3">
        <div class="inner-sec-wthreelayouts pt-md-5 pt-md-3 pt-3">
			<h2 class="heading-agileinfo text-center  mb-4">Get In <span> Touch</span></h2>
			<div class="container pt-sm-5">
                <div class="address row mb-5">
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-3 address-left text-center">
                                <i class="far fa-map"></i>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Address</h6>
                                <p> Wakhari, Nashik, Maharashtra

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-3 address-left text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Email</h6>
                                <p>
                                    <a href="mailto:zpschoolwakhrichaada@gmail.com">zpschoolwakhrichaada@gmail.com</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-3 address-left text-center">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="col-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                                <p>+91 87677 00643</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4876.816958176045!2d74.22253820912123!3d20.42119991038585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bde809d0dbc98eb%3A0x17f346613ac3a110!2sZ.P.SCHOOL%20WAKHARI!5e0!3m2!1sen!2sin!4v1647148110373!5m2!1sen!2sin" allowfullscreen></iframe>

                    </div>
                    <div class="col-md-6 main_grid_contact" style="background: lightblue;">
                        <div class="form">
                            <h4 class="mb-4 text-left">Send us a message</h4>
                            <form name="contact" id="myForm" method="post" novalidate="novalidate" enctype="multipart/form-data"  onsubmit="return validateform()" >
                                <div class="form-group">
                                    <label class="my-2">Name</label>
                                    <input class="form-control" type="text" name="Name" placeholder=""  >
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="Email" placeholder="" >
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                   
                                     <textarea  required="" name="message" ></textarea>
                                </div>
                                <div class="input-group1">
                                    <!-- <input class="form-control" type="submit" value="Submit" name="submit"> -->
                                      <button  class="form-control" type="submit"  name="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
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



<?php 

include 'Admin/connect.php';



    if(isset($_POST['submit']))
    {

    
    extract($_POST);

        
       
        

    $asd ="insert into contact(name,email,message) 
               values('$Name','$Email','$message')";

   

    

        $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
        if($asd)
        {
        echo "<script>;";
        echo "window.alert('Message Sent..');";
        echo 'window.location.href = "contact.php";';
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
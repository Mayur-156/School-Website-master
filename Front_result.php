<?php session_start();
  include'Admin/connect.php';
 ?>
 <?php
  
// Initialize the session
       
// Store the submitted data sent
// via POST method, stored 
  
// Temporarily in $_POST structure.
$enroll= $_POST['Enroll'];
  

           
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Result</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Subject Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
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

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;

}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

table, th, td {
  border: 1px solid lightcoral;
}
th{
    background-color: lightcoral;
}

</style>
<!-- //Style Ended  -->
</head>

<body>
        <?php
        $view = mysqli_query($connect,"select * from admission_form where GR_No= $enroll order by
        id asc") or die(mysqli_error($connect));
        ?>
         <?php
        $resl = mysqli_query($connect,"select * from result where GR_No= $enroll order by
        id asc") or die(mysqli_error($connect));
        ?>
        
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
	

	<form>
    	 <section class="banner_bottom1 py-md-5" style="border: solid 8px black; ">
    <!-- main border starts  -->
    
        <div class="container" style="border: solid 3px black; border-top:solid 6px black; border-right: solid 6px black; border-left: solid 6px black;;">
            <div class="row">
                <div class="col-xs-6 .col-md-4">
                <img src="images/logo.png" width="150px">
                </div>
                <div class=".col-xs-12 .col-md-8 " style="margin-left:230px; margin-top: 42px;"><h2><b><span>Z P WAKHARICHAPADA  </span></b></h2>
                <h4 style="text-align: center;">Tal.Mokhada Dis.Palghar</h4>
                
                </div>
            </div>
        </div>
        <?php
                              $counter = 0;
                              while ($row = mysqli_fetch_array($view)) {

                              extract($row);
                              ?>
        <div class="container" style="border: solid 3px black; border-left: solid 6px black; border-right: solid 6px black;;" >
            <div class="row" style="margin:10px">
                <div class="col-xs-6 col-md-4">
                    <label><b>Student Name: &nbsp; </b><?php echo strtoupper($row['FN']); ?></label>
                    
                </div>
                <div class="col-xs-6 col-md-4">
                    <label><b>DOB: &nbsp;</b><?php echo $row['DOB']; ?> </label>
                    
                </div>
                <div class="col-xs-6 col-md-4">
                    <label><b>GR. No. : &nbsp;</b> <?php echo $row['GR_NO']; ?></label>
                    
                </div>
            </div>


            <div class="row" style="margin:10px">
                <div class="col-xs-6 col-md-4">
                    <label><b>Father Name: &nbsp;</b><?php echo strtoupper($row['FATHERNAME']); ?> </label>
                </div>
                <div class="col-xs-6 col-md-4">
                    <label><b>Class : &nbsp;</b> <?php echo $row['class']; ?></label>
                </div>
                <div class="col-xs-6 col-md-4">
                      <label><b>Examination: </b>First 2021-22</label>
                </div>

            </div>

            <?php 
                 }

            ?>

                         <?php
                              $counter = 0;
                              while ($row = mysqli_fetch_array($resl)) {

                              extract($row);

                              ?>
                              <?php 

                                    $bhasha= $row['bhasha'];
                               ?>

        </div>
        <div class="container" style="border: solid 3px black; border-bottom: solid 6px black; border-left:solid 6px black; border-right: solid 6px black; ;">
           <table style="margin-right: 15px; margin-top:10px; margin-bottom: 10px; " >
                  <tr>
                    <th>Subject Name</th>
                    <th>Marks</th>

                  </tr>
                  <tr>
                    <td>Bhasha</td>
                    <td><?php echo $row['bhasha']; ?></td>
                    
                  </tr>
                  <tr>
                    <td>Hindi</td>
                    <td><?php echo $row['Hindi']; ?></td>
                    
                  </tr>
                  <tr>
                    <td>English</td>
                    <td><?php echo $row['English']; ?></td>
                    
                  </tr>
                  <tr>
                    <td>Maths</td>
                    <td><?php echo $row['Maths']; ?></td>
                    
                  </tr>
                  <tr>
                    <td>Science</td>
                    <td><?php echo $row['Science']; ?></td>
                    
                  </tr>
                  <tr>
                    <td>Social Studies</td>
                    <td><?php echo $row['S_S']; ?></td>
                    
                  </tr>
                  <tr>
                    <td>Art</td>
                    <td><?php echo $row['Art']; ?></td>
                    
                  </tr>
                  <tr>
                    <td>Craft</td>
                    <td><?php echo $row['Craft']; ?></td>
                    
                  </tr>
                  <tr>
                    <td>P.T.</td>
                    <td><?php echo $row['PT']; ?></td>
                    
                  </tr>
                  <tr>
                      
                  </tr>
                   <?php $marks_obtained=$row['mrk_obt']; ?>
                   <?php $total_marks=$row['total_marks']; ?>
                  
                        <td colspan="2" style="text-align: center; font-style: oblique ;">
                            <b>TOTAL : <?php echo $marks_obtained ?></b>
                        </td>
                  </tr>
                   <tr>
                        <td colspan="2" style="text-align: center; font-style: oblique ;">
                            <b>PERCENTAGE :  <?php echo number_format(($marks_obtained/$total_marks)*100,2, '.', '' )?></b>
                        </td>
                  </tr>
                    <?php 
                        } 
                        ?>
            </table>
        </div>

        
    <!-- main border ends -->
	</section>
</form>


    <?php include 'footer.php'; ?>

  

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
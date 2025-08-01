<?php session_start();
  include'Admin/connect.php';
 ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Notice</title>
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

hr {
    color: black;
    border: solid 2px ;
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
        <li class="breadcrumb-item active">Notice</li>
    </ol>
	 <!-- //banner-text -->
	

	
	 <section class="banner_bottom1 py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="heading-agileinfo text-center"><span>Notice</span></h3>

			<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'School Notice')">School Notice</button>
  <button class="tablinks" onclick="openCity(event, 'Schemes')">Schemes</button>
  <button class="tablinks" onclick="openCity(event, 'Time Table')">Food Chart</button>
</div>

<div id="School Notice" class="tabcontent">
              
                 <!-- <hr style="border:dashed;"> -->
              <?php
            $view = mysqli_query($connect,"select * from notice order by
            id asc") or die(mysqli_error($connect));
            ?>

                
                   <?php
            $counter = 0;
            while ($row = mysqli_fetch_array($view)) {

            extract($row);
            ?>

            

            <div style="border: solid 2px; border-radius: 5px;r ">
                <h2><center>WAKHARICHAPADA SCHOOL</center></h2>
                <br>
                <p  style="margin-left: 15px; font-size:18px "><b><?php echo $row['date']; ?></b></p>
                <br>
                <center><h3>NOTICE</h3></center>
            <center><h2><b><?php echo $row['title']; ?></b></h2></center>
                <br>
                <p style="margin:20px"><?php echo $row['content']; ?></p>
                <br>
                
                </center><p style="margin-left: 15px"><b><?php echo $row['name']; ?></b></p></center>
                
                <p style="margin-left: 15px"><b><?php echo $row['desig']; ?></b></p>
              </div>
                     <hr style="border:dashed ;">

            <?php } ?>
           
            
        
   

</div>

<div id="Schemes" class="tabcontent" >
  <h3>Schemes</h3>
        <hr>
        <div>
        <center><h2>शालेय पोषण आहार योजना</h2></center>
        <p > प्राथमिक शिक्षण संचालनालय

        शालेय पोषण आहार योजना

        • योजनेस सुरवात दिनांक 22 नोव्हेंबर, 1995.

        शालेय पोषण आहार ही केंद्र पुरस्कृत योजना असून राज्यात सदर योजना 22 नोव्हेंबर, 1995 पासून राबविण्यात येत आहे. सुरुवातीला या योजनेअंतर्गत इयत्ता 1 ली ते 5 वी च्या विद्यार्थ्यांना प्रति महा 3 किलो प्रमाणे मोफत तांदूळ देण्यात येत होता. (Take Home Supplement) सन 2001 मध्ये मा. सर्वोच्च न्यायालयाने शालेय पोषण आहार योजने अंतर्गत विद्याच्यांना कोरडा तांदूळ न देता शाळेमध्ये अन्न शिजवून द्यावे असे आदेश दिले व त्यानुसार सन 2002 पासून या योजनेचे स्वरूप बदलून घरी तांदूळ देण्याऐवजी विद्यार्थ्यांना शाळेतच शिजविलेला आहार देण्यात येतो. सन 2008 मध्ये या योजनेचा विस्तार करण्यात आला असून इयत्ता 6 वी ते 8 वी च्या विद्यार्थ्यांना सुध्दा या योजनेचा लाभ देण्यात येतो.
        </p>
           <a href="https://drive.google.com/file/d/1gN_M2EAhFQ0yYJTnk_hg-T6ffpBmJpgO/view?usp=drivesdk"><img src="images/pdf_icon2.png" width="30px" style="margin-left: 35px; "><p><u>Download pdf</u></p></a>
        </div>

     <hr>

        <div>
            <center><h2>मोफत गणवेश योजना</h2></center>
        <p >समग्र शिक्षा अभियानांतर्गत इयत्ता 1 ली ते 8 वी च्या वर्गात शिकणाऱ्या सर्व मुली व अनुसुचित जाती जमाती व दारिद्रय रेषेखालील मुलांना देण्यात येत असलेली मोफत गणवेश योजनेच्या अनुदानात वाढ करण्यात आली आहे. पूर्वी प्रति गणवेश 200 रुपये प्रमाणे चारशे रुपये अनुदान देण्यात येत होते. यंदापासुन यामध्ये वाढ करुन ती प्रति गणवेश 300 रुपये प्रमाणे दोन गणवेशांसाठी 600 रुपये अनुदान विद्यार्थ्यांच्या बँक खात्यामध्ये जमा करण्यात येणार आहे. आता शैक्षणिक वर्ष सुरु झाले आहे. यापूर्वी पहिल्या दिवशी गणवेश दिले जायचे यामुळे अनुदानाबाबत लवकर कार्यवाही करण्याची मागणी होत आहे. केंद्र सरकारमार्फत सर्व शिक्षा अभियान, राष्ट्रीय माध्यमिक शिक्षा अभियान, व शिक्षकांचे शिक्षण अभियान या केंद्र पुरुस्कृत योजनांचे एकत्रिकरण करुन सन 2018-19 पासुन समग्र शिक्षा अभियान या नविन योजनेची सुरवात करण्यात आली आहे. या अंतर्गत इयत्ता 1 ली ते 8 वी च्या वर्गात शिकणाऱ्या सर्व मुली व अनुसुचित जाती जमाती व दारिद्रय रेषेखालील मुलांना शासनाकडून पूर्वी दोन गणवेश व गेल्या वर्षीपासुन दोन गणवेशांचे अनुदान बँक खात्यावर वर्ग करुन दिले जाते. </p>
          <a href="https://samagrashiksha.maharashtra.gov.in/Upload/PDF/Uniform%20Guidelines%202020-21_13112020.pdf"><img src="images/pdf_icon2.png" width="30px" style="margin-left: 35px; "><p><u>Download pdf</u></p></a>
        </div>
    <hr>
        <div>
             <center><h2>मोफत पाठ्ठयापुस्तके वाटप योजना</h2></center>
        <p >ऑनलाइन शाळा सुरू होऊन तब्बल पंधरा दिवस उलटल्यानंतर समग्र शिक्षा अभियानांतर्गत विद्यार्थ्यांना मोफत पाठ्यपुस्तके मिळण्याचा मार्ग मोकळा झाला आहे. शासनाच्या वतीने अभियानांतर्गत मोफत दिल्या जाणाऱ्या पाठ्यपुस्तकांच्या वितरणास शालेय शिक्षण मंत्री वर्षा गायकवाड यांच्या हस्ते गुरुवारी बालभारती येथे सुरवात झाली. पहिल्या टप्प्यात दुर्गम भागातील विद्यार्थ्यांना अभियानांतर्गत मोफत पाठ्यपुस्तकांचे वाटप देणार असल्याचे गायकवाड यांनी यावेळी सांगितले. (commencement of distribution of free textbooks in the presence of the minister of education)</p>
            <a href="https://www.maharashtra.gov.in/pdf/Budget/SchoolEducationSports/PrimaryEducation-2015-2016.pdf"><img src="images/pdf_icon2.png" width="30px" style="margin-left: 35px;  "><p><u>Download pdf</u></p></a>
        </div>
    <hr>
        <div>
             <center><h2>आदिवासी सुवरण महोत्सावी योजना</h2></center>
        <p >या योजनेद्वारे ज्या आदिवासी शेतकऱ्यांचे वार्षिक उत्पन्न रु. ६,४००/- पर्यंत आहे. त्यांना अर्थसहाय्य देण्यात येते. राज्यशासनाने ठाणे, रायगड, यवतमाळ आणि गडचिरोली जिल्यातील आदिम जमातींच्या लाभधारकांना बैलजोडी व बैलगाडी खरेदीने करण्याकरिता ८० टक्के दराने अर्थसहाय्य व उर्वरित २० टक्के रक्कम बिनव्याजी कर्ज म्हणून दिले जाते.</p>
            <a href="https://www.maharashtra.gov.in/Site/Upload/RTI/Marathi/Updated%20Infomation%20act2005(Marathi)-30.08.2012.pdf"><img src="images/pdf_icon2.png" width="30px" style="margin-left: 35px;  "><p><u>Download pdf</u></p></a>
        </div>
    <hr>
        <div>
             <center><h2>अल्पसंख्याक शिष्यवृत्ती </h2></center>
        <p >राज्य शासनामार्फत वेगवेगळ्या विभागामार्फत वेगवेगळ्या योजना, उपक्रम राबविले जातात. या योजनेचा फायदा विद्यार्थी, महिला याबरोबरच सर्वसामान्य जनता यांना होत असतो. अल्पसंख्याक विकास विभागामार्फत अल्पसंख्याक समुहाला समाजाच्या मुख्य प्रवाहात आणण्यासाठी काही योजना राबविण्यात येत आहे. आज आपण अल्पसंख्याक विद्यार्थ्यांकरिता असणाऱ्या शिष्यवृत्ती योजनेची माहिती घेऊ.
        <br>
        अल्पसंख्याक समाजातील मुलामुलींना उच्च शिक्षण देणे, त्यांना रोजगाराच्या संधीदेखील उपलब्ध करुन देण्यासाठी प्रयत्न केले जात आहेत. याचाच एक भाग म्हणून उच्च व्यावसायिक व इयत्ता बारावीनंतर सर्व अभ्यासक्रमांमध्ये शिक्षण घेणाऱ्या राज्यातील अल्पसंख्याक विद्यार्थ्यांकरिता शिष्यवृत्ती योजना राबविण्यात येत आहे.
        </p>
            <a href="https://scholarships.gov.in/fresh/newstdRegfrmInstruction" width="30px" style="margin-left: 35px;  ">
            <img src="images/pdf_icon2.png" width="30px" style="margin-left: 1px;  ">
        <p><u>Check Doc.</u></p></a>
        </div>
    <hr>
        <div>
            <center><h2>सवित्रीबाई फुले दत्तक पालक योजना</h2></center>
        <p >जिल्हा परिषदेच्या शाळांमधील मुलीसाठी राबविण्यात येणारी सावित्रीबाई फुले दत्तक पालक ती योजना गेल्या दोन वर्षांपासून बासनात गुंडाळून ठेवण्यात आल्याची बाब उजेडात आली आहे. दरम्यानच्या काळात एकाही मुलीला लाभ मिळाला नसल्याने यात जिल्हा परिषदेच्या प्राथमिक शिक्षण विभागावी अनास्था लपून राहिली नाही. 
            <br>
            बँकेत ठेवलेल्या ठेवीवर जे काही व्याज मिळते. त्यावर सावित्रीबाई फुले दत्तक पालक शिधती योजना चालविली जाते
            परिषदेच्या शाळांमधील सर्व मुली योजनेच्या लाभार्थी असून दहा महिन्याला एक हजार रूपये पाप्रमाणे लाभ दिला जातो वर्षानुवर्षे
            सुरळीत सुरू असलेली ही योजना सध्या प्राथमिक शिक्षण विभागाने गुंडाळून ठेवल्याचे दिसून येत आहे.
        </p>
            <a href="https://eisouth.in/Notice/werf2422021141236.pdf" width="30px" style="margin-left: 35px;  ">
            <img src="images/pdf_icon2.png" width="30px" style="margin-left: 1px;  ">
        <p><u>Download pdf</u></p></a>
        </div><hr>
        <div>
            <center><h2>मुलींचा उपस्तिथी भत्ता 1लि ते 4 ठी </h2></center>
        <p >प्राथमिक शाळेत जाणाऱ्या मुलींच्या गळतीचे प्रमाण कमी करण्यासाठी व उपस्थितीचे प्रमाण वाढविण्यासाठी इ. 1 ते 4 थी मधील शाळेत जाणा-या आदिवासी उपयोजना क्षेत्रातील सर्व मुली तसेच आदिवासी उपयोजन क्षेत्रा व्यतिरिक्त राज्यातील अन्य भागातील अनुसुचित जमातीच्या मुलींना तसेच अनुसुचित जाती, भटक्या जमाती व विमुक्त जमातीत दारिद्रय रेषेखलील विदयार्थींनींना प्रतिदिन प्रत्येक मुलींमागे 1 /- रुपया या दराने सदर मुलींच्या पालकांना उपस्थिती भत्ता दि. 3 जानेवारी 1992 या क्रांती ज्योती सावित्रीबाई फुले यांच्या जन्मदिनी सुरु करण्यास शासनाने शिक्षण व सेवायोजन विभागाच्या शासन निर्णय दि. 10 जानेवारी 1992 अ-वये अनुमती दिलेली आहे. त्यानुसार शिक्षण विभाग ( प्राथमिक ) जिल्हा परिषद नागपुर अंतर्गत ही योजना राबविण्यात येते
        </p>
            <a href="https://www.maharashtra.gov.in/Site/Upload/Government%20Resolutions/Marathi/201802211025206121.pdf" width="30px" style="margin-left: 35px;  ">
            <img src="images/pdf_icon2.png" width="30px" style="margin-left: 1px;  ">
        <p><u>Download pdf</u></p></a>
        </div>

</div>

<div id="Time Table" class="tabcontent">
  <center><h3 style="margin-top:25px">FOOD CHART</h3></center>
 <img src="images/Poshan_aahar_chart.jpg" alt="Poshan_Aahar_Chart" style="border:solid 3px darkred; border-radius: 8px;">
 <img src="images/food_chart.jpg" alt="food_chart" width="400px " height="280px" style="margin-left:150px; margin-top: 10px;" >
 <br>
 <img src="images/Diet_chart_kids.jpg" alt="Diet_chart_kids" width="500px"  style="border:solid 3px darkred; border-radius: 8px; margin-left:250px; margin-top:60PX;">
</div>

		<script>
		function openCity(evt, notice) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(notice).style.display = "block";
		  evt.currentTarget.className += " active";
		}
		</script>
			
		</div>
	</section>


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

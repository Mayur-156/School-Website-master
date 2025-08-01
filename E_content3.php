<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>E-Content</title>
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
  

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 25px;
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

.pagination {
  display:block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
}

.pagination a.active {
  background-color: #4CAF50;
  color: white;
  border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

</style>
<!-- //Style Ended  -->
</head>

<body>
    <!-- banner -->
    <div class="inner-banner" style=" background-image: url('images/cover13.jpg');">
        <!-- header -->
        <?php include 'Header.php'; ?>
        <!-- //header -->
       
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="Index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">E-content</li>
    </ol>
     <!-- //banner-text -->
    


    
     <section class="banner_bottom1 py-md-5">
        <div class="container py-4 mt-2">
            <h3 class="heading-agileinfo text-center"><span>E-Content</span></h3>


        <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'books')">Books(PDF) </button>
  <button class="tablinks" onclick="openCity(event, 'videos')">Videos</button>
   <!-- Pagination starts -->
    <div class="pagination" style="margin-left: 800px;">
        <h3>Select your class</h3>
      <a href="E_content.php" >1</a>
      <a href="E_content2.php">2</a>
      <a href="E_content3.php"  class="active">3</a>
      <a href="E_content4.php">4</a>
    </div>
    <!-- Pagination ends -->
</div>

<div id="books" class="tabcontent">
  
 <div class="row">

  <div class="col-xs-6 col-md-3">
    <a href="https://drive.google.com/file/d/1S3EeaJJOpPxWgO04B9QO757K9qwCk9QX/view?usp=sharing" class="thumbnail">
      <img src="book_img/book9.png" alt="..." width="250px">
      <h4>Download Book</h4>
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="https://drive.google.com/file/d/1U0CRHTu6cHhr3tw_J7Z4TxxeRip_JK1W/view?usp=sharing" class="thumbnail">
      <img src="book_img/book10.png" alt="..." width="250px" >
      <h4>Download Book</h4>
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="https://drive.google.com/file/d/11K6RcP6Msjg9ijNINyklX5l1iNcLytqt/view?usp=sharing" class="thumbnail">
      <img src="book_img/book11.png" alt="..." width="240px" height="330px" >
      <h4>Download Book</h4>
    </a>
  </div>
  <div class="col-xs-6 col-md-3">
    <a href="https://drive.google.com/file/d/1rq0h2Agx_WLBaTJ5Wrgrv39gpFppn3OZ/view?usp=sharing" class="thumbnail">
      <img src="book_img/book12.png" alt="..." width="250px">
      <h4>Download Book</h4>
    </a>
  </div>
</div>
</div>




<div id="videos" class="tabcontent">

 <center> <h3> Videos For 3rd Std</h3></center>
 <br>
 <h4>Marathi Poems</h4>
 <div class="row" class="scroll">
  <div class="col-xs-6 col-md-3">
      <iframe width="250" height="200" src="https://www.youtube.com/embed/qBq8FyWcapc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
  </div>

  <div class="col-xs-6 col-md-3">
  <iframe width="250" height="200" src="https://www.youtube.com/embed/_gc6a9pGX2g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  </div>

  <div class="col-xs-6 col-md-3">
     <iframe width="250" height="200" src="https://www.youtube.com/embed/Jf3-Zv53TTs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  




</div>

    <hr>

    <h4>Maths </h4>
    <div class="row">
    <div class="col-xs-6 col-md-3">
      <iframe width="250" height="200" src="https://www.youtube.com/embed/obQE4PrwP5o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
    </div>

    <div class="col-xs-6 col-md-3">
      <iframe width="250" height="200" src="https://www.youtube.com/embed/FnxquY1jVaA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="col-xs-6 col-md-3">
       <iframe width="250" height="200" src="https://www.youtube.com/embed/2jz0UuAJJxU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="col-xs-6 col-md-3">
    <iframe width="250" height="200" src="https://www.youtube.com/embed/ZG8HySQNBvE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </iframe>
    </div> 
</div>
<hr>

<h4>English</h4>
<div class="row" class="scroll">
  <div class="col-xs-6 col-md-3">
    <iframe width="250" height="200" src="https://www.youtube.com/embed/L-TLy7psuH0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
  </div>

  <div class="col-xs-6 col-md-3">
   <iframe width="250" height="200" src="https://www.youtube.com/embed/YaL1ckON4ng" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="col-xs-6 col-md-3">
  <iframe width="250" height="200" src="https://www.youtube.com/embed/Y2yE_4_JCZ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="col-xs-6 col-md-3">
   <iframe width="250" height="200" src="https://www.youtube.com/embed/2fFdz3eU-CQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </a>
  </div>
</div>
<hr>
<h4>Science</h4>
 <div class="row" class="scroll">
  <div class="col-xs-6 col-md-3">
     <iframe width="250" height="200" src="https://www.youtube.com/embed/UrmuMDzWQZc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
  </div>

  <div class="col-xs-6 col-md-3">
   <iframe width="250" height="200" src="https://www.youtube.com/embed/Xin8GAW80uA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="col-xs-6 col-md-3">
   <iframe width="250" height="200" src="https://www.youtube.com/embed/h7BAP6DkvRE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <div class="col-xs-6 col-md-3">
  <iframe width="250" height="200" src="https://www.youtube.com/embed/rlYoDvAUWlA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </a>
  </div>
</div>






</div>

<script>
function openCity(evt, e_content) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(e_content).style.display = "block";
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
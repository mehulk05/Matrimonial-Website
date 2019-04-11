<?php
session_start();
$UserName = $_SESSION['id'];
// echo "hello".  $_SESSION['email']; 
//echo  $UserName;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wedding &mdash; Bells</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FREEHTML5.CO
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
   -->

    <!-- Facebook and Twitter integration -->

  <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: serif;
}
h1
    {
        color: azure;
        font-family: cursive
    }
.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
    
    
    
.vertical-menu {
  width: 200px;
}

.vertical-menu input {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
  </head>
  <body>
    
  <div class="fh5co-loader"></div>
  
  <div id="page">

  <nav class="fh5co-nav" role="navigation">

    <div class="container">
            
      <div class="row">
        <div class="col-xs-2">
          <div id="fh5co-logo"><a href="index.html" >Wedding Bells<strong>!</strong></a></div>
        </div>
       <div class="col-xs-10 text-right menu-1">
          <ul>
            
            <li ><a href="about.php">Search</a></li>
         
          <li><a href="contact.html">Contact</a></li>
          
            <li class="active"><a href="profile1.php">Your Profile</a></li><li class="has-dropdown"><a href="#"> <?php echo $UserName ?></a>
                  <ul class="dropdown">
                      <li><a href="../index.html">Log Out</a></li>
                  </ul></li>
            
          </ul>
        </div>
      </div>
         
      
    </div>
  </nav>
        <header id="fh5co-header1" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/wed3.jpg); height:130px;" >
		<div class="overlay"></div>
	</header>   
         

  <div id="fh5co-couple" class="fh5co-section-gray" >
    <div class="container">
  
   <div class = "row">
                 
                <div class="col-sm-11" style="background: crimson;">
                    <center>
                    <?php include "view_ind.php" ?></center>
                </div>
            </div>
            
            
            
        </div>
        </div>
  
<div>
  <footer id="fh5co-footer" role="contentinfo">
    <div class="container">
      <div class="row copyright">
        <div class="col-md-12 text-center">
          <p>
            <small class="block">&copy; Wedding Bells 2018.</small> 
            <small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">craze 2 </a> Github: <a href="http://unsplash.co/" target="_blank">https:/github/suhanichacha/project</a></small>
          </p>
          <p>
            <ul class="fh5co-social-icons">

              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-linkedin"></i></a></li>
              <li><a href="#"><i class="icon-dribbble"></i></a></li>
            </ul>
                    </p>
        </div>
      </div>

    </div>
  </footer>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
  
  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="js/jquery.countTo.js"></script>

  <!-- Stellar -->
  <script src="js/jquery.stellar.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>

  <!-- Main -->
  <script src="js/main.js"></script>

  </body>
</html>


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
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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
   

    .radio-inline{
        color: white;
       
    }
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  width: 300px;
        height: 400px;
  margin: auto;
  text-align: center;
        color: crimson;
}
    h1{
          color: crimson;
        font-size: 20pt;
    }
    h2{
          color: crimson;
        font-size: 20pt;
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
  width: 70%;
    opacity: 0.7;
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
					<div id="fh5co-logo"><a href="index.html">Wedding Bells<strong>!</strong></a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
						
						<li class="active"><a href="about.php">Search</a></li>
					
					<li><a href="contact.php">Contact</a></li>
						<li><a href="profile1.php">Your Profile</a></li>
                           <li class="has-dropdown"><a href="#"> <?php echo $UserName ?></a>
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
                 <div class="col-sm-3">
                
                                <div class="vertical-menu">
                                    <form method="POST" id="signup-form" class="signup-form" action="search1.php">
  <br><br>
<div class="form-group"><input type="text" class="form-input" name="fn" id="fn" placeholder="name"/></div>
                                        <div class="form-group"><input type="text" class="form-input" name="id" id="id" placeholder="Id"/></div>
<div class="form-group"><input type="text" class="form-input" name="sub_com" id="sub_com" placeholder="community"/></div>
  <div class="form-group"><input type="text" class="form-input" name="as" id="as" placeholder="employment type"/></div>
                                        

   <div class="form-group">
        <select class="form-input" id="age" name="age" style="font-family: monospace;
        font-size: 22px; width:202px; height:42px; background-color:white;" >
        <option> <div class="dot"></div> Age</option>
    <option value="1"> <div class="dot"></div> 19-22</option>
        <option value="2"> <div class="dot"> </div>22-26</option>
        <option value="3"> <div class="dot"></div> 26-40</option>
        <option value="4"> <div class="dot"></div> >40 </option>
      </select>
                            </div>
                          
                          
                           
    <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Search "  />
                        </div>
                                    </form>                                                                           
</div>
                </div>
               
              
                <div class="col-sm-9">
       
                    <table id="tb" name ="tb">
                        <tr>
                     <?php include "search_match.php" ?>
                            </tr>
                    </table>
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
						<small class="block">&copy; Wedding Bells! 2018</small> 
						<small class="block">Designed by <a href="contact.html" target="_blank">Suhani</a> Chacha and <a href="contact.html" target="_blank">Mehul</a>  Kothari</small>
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


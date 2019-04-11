<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; Bells!</title>
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
						<li ><a href="index.html">Home</a></li>
						
					
					
						<li ><a href="contact.html">Contact</a></li>
                        <!--<li><a href="../SignUp/signUp.html">Sign Up</a></li> -->
                        <li><a href="sig.php">Sign Up</a></li>
                        <li><a href="lo.php">Log In</a></li>
                         <li><a href="gallery.php">Gallery</a></li>
                          <li  class="active"><a href="add.php">Your Advertisement</a></li>
                        
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/wed3.jpg);">
		<div class="overlay"></div>
		<div class="fh5co-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>My Advertisement</h1>
							<h2> <a>Wedding Bells at Your Service</a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	
<div class="fh5co-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6 animate-box">
					<h3>Request to post Your Advertisement</h3>
					<form action="addupload.php" method="POST" enctype="multipart/form-data">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">First Name</label>
								<input type="text" id="fname" name= "fname" class="form-control" placeholder="Your firstname" /required>
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname" required/>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Contact Number</label>
								<input type="number" id="contact" name="contact" class="form-control" placeholder="Your contact number" required/>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Product</label>
								<input type="text" id="subject" name="subject" class="form-control" placeholder="Your subject of this message" required/>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<label for="image">Image Of Product</label>
								 <input type="file" name="image" id="image" class="form-control" required/>
							</div>
						</div>
						

						<div class="row form-group">
							<div class="col-md-12">
								<label for="description">Description</label>
								<textarea name="description" id="description"  cols="30" rows="10" class="form-control" placeholder="Write us something" required/></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="POST Add" class="btn btn-primary">
						</div>

					</form>		
				</div>
	
			</div>
			
		</div>
	</div>
	

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; Wedding Bells! 2018</small> 
						<small class="block">Designed by <a href="contact.html" target="_blank">Suhani</a> Chacha and <a href="contact.html" target="_blank">Mehul</a>  Kothari</small>
					</p>
					Silver Oak Group of Institutes
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
	<!-- Google Map -->
	

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>


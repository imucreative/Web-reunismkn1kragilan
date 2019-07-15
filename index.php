<?php
	include ("assets/config/conn.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Reuni Akbar SMKN 1 Kragilan</title>
	<link rel='shortcut icon' href='assets/images/logo.png'/>
	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">
    
	
	
	<link rel="Stylesheet" type="text/css" href="assets/css/smoothDivScroll.css" />
	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
    <script src="assets/js/modernizr.custom.js"></script>
</head>
<body>

	<!-- Preloader -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!-- Home start -->

	
	<section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
			<h2>Reuni Akbar 2016</h2>
			<h1>SMK Negeri 1 Kragilan</h1>
			<div class="start"><b>Let's Rebuild Our Network</b></div>
			<div class="start"><a href='#daftarSekarang' class='btn btn-primary'>Daftar!</a></div>
		</div>

        <a href="#undangan">
			<div class="scroll-down">
				<span>
					<i class="fa fa-angle-down fa-2x"></i>
				</span>
			</div>
        </a>
	</section>
	<!-- Home end -->

	<!-- Navigation start -->
	<header class="header">
		<nav class="navbar navbar-custom" role="navigation">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="">SMKN 1 KRAGILAN</a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Home</a></li>
						<li><a href="#undangan">Undangan</a></li>
						<li><a href="#acara">Acara</a></li>
                        <li><a href="#reviewAlumni">Alumni</a></li>
						<li><a href="#testimonials">Pesan & Kesan</a></li>
						<li><a href='#daftarSekarang'><font color='blue'>Daftar!</font></a></li>
						<!--<li><a href="#contact">Contact</a></li>-->
					</ul>
				</div>

			</div><!-- .container -->
		</nav>
	</header>
	<!-- Navigation end -->

    <!-- undangan start -->
	<?php include "pages/undangan.php"; ?>
	<!-- undangan end -->
	
	<!-- acara start -->
	<?php include "pages/acara.php"; ?>
	<!-- acara end -->
    
	<!-- CallToAction start -->
	<?php include "pages/daftar.php"; ?>
	<!-- CallToAction end -->
	
	<!-- reviewAlumni start -->
	<?php include "pages/reviewAlumni.php"; ?>
	<!-- Portfolio end -->

	<!-- Testimonials start -->
	<?php include "pages/pesanKesan.php"; ?>
	<!-- Testimonial end -->

	<!-- Contact start -->
	<?php //include "pages/contact.php"; ?>
	<!-- Contact end -->
	
	
	
	<!--UNTUK MODAL-->
	<?php include "pages/reviewAlumni_detail.php"; ?>
	<?php include "pages/daftar_detail.php"; ?>
	
	
	
	<!-- Footer start -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				
					<ul class="social-links">
						<li><a href="#" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-envelope"></i></a></li>
					</ul>

                    <p class="copyright">
                        © 2016 | Reuni Akbar Alumni SMKN 1 Kragilan | Design By <a target="_blank" href="http://www.imucreative.esy.es">IMU Creative</a>
					</p>

				</div>
			</div><!-- .row -->
		</div><!-- .container -->
	</footer>
	<!-- Footer end -->

	<!-- Scroll to top -->
	<div class="scroll-up">
		<a href="#home"><i class="fa fa-angle-up"></i></a>
	</div>
    <!-- Scroll to top end-->

	<!-- Javascript files -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
	<script src="assets/js/bootstrap-portfilter.min.js"></script>
	<script src="assets/js/jquery.parallax-1.1.3.js"></script>
	<script src="assets/js/imagesloaded.pkgd.js"></script>
	<script src="assets/js/jquery.sticky.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.easypiechart.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.cbpQTRotator.js"></script>
	
	<!-- jQuery UI (Custom Download containing only Widget and Effects Core)
	     You can make your own at: http://jqueryui.com/download -->
	<script src="assets/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	
	<!-- Latest version (3.1.4) of jQuery Mouse Wheel by Brandon Aaron
	     You will find it here: https://github.com/brandonaaron/jquery-mousewheel -->
	<script src="assets/js/jquery.mousewheel.min.js" type="text/javascript"></script>

	<!-- jQuery Kinectic (1.8.2) used for touch scrolling -->
	<!-- https://github.com/davetayls/jquery.kinetic/ -->
	<script src="assets/js/jquery.kinetic.min.js" type="text/javascript"></script>

	<!-- Smooth Div Scroll 1.3 minified-->
	<script src="assets/js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
	
	<script src="assets/js/custom.js"></script>
</body>
</html>

<!-- Start of StatCounter Code for Dreamweaver -->
<script type="text/javascript">
	var sc_project=11601826; 
	var sc_invisible=1; 
	var sc_security="8cdb8e45"; 
	var scJsHost = (("https:" == document.location.protocol) ? "https://secure." : "http://www."); 
	document.write("<sc"+"ript type='text/javascript' src='" + scJsHost+ "statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript>
	<div class="statcounter">
		<a href="http://statcounter.com/" target="_blank">
			<img class="statcounter" src="//c.statcounter.com/11601826/0/8cdb8e45/1/" />
		</a>
	</div>
</noscript>
<!-- End of StatCounter Code for Dreamweaver -->
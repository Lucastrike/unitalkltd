<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>UniTalk</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/et-line-font.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

	<!-- preloader section -->
	<div class="preloader">
		<div class="sk-spinner sk-spinner-circle">
	       <div class="sk-circle1 sk-circle"></div>
	       <div class="sk-circle2 sk-circle"></div>
	       <div class="sk-circle3 sk-circle"></div>
	       <div class="sk-circle4 sk-circle"></div>
	       <div class="sk-circle5 sk-circle"></div>
	       <div class="sk-circle6 sk-circle"></div>
	       <div class="sk-circle7 sk-circle"></div>
	       <div class="sk-circle8 sk-circle"></div>
	       <div class="sk-circle9 sk-circle"></div>
	       <div class="sk-circle10 sk-circle"></div>
	       <div class="sk-circle11 sk-circle"></div>
	       <div class="sk-circle12 sk-circle"></div>
	    </div>
	</div>

<?php include('menu.php'); ?>

<!-- contact section -->
<section id="contact" data-jarallax='{"speed": 0.2}'>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 text-center">
				<div class="section-title">
					<h1 class="heading bold">CONTACT US</h1>
					<hr>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 contact-info">
				<h2 class="heading bold">CONTACT INFO</h2>
				<p>UniTalk Ltd <br>
					Incuba 1 Brewers Hill Road, <br>
					Dunstable,  Bedfordshire, LU6 1AA <br>
					London, United Kingdom</p>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
					<p>info@unitalkltd.com</p>
				</div>
				<div class="col-md-6 col-sm-4">
					<h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONE</h3>
					<p>+44 (0)330 229 0036</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="wow fadeInUp" data-wow-delay="0.6s">
					<div class="col-md-6 col-sm-6">
						<input type="text" class="form-control" placeholder="Name" name="name">
					</div>
					<div class="col-md-6 col-sm-6">
						<input type="email" class="form-control" placeholder="Email" name="email">
					</div>
					<div class="col-md-12 col-sm-12">
						<textarea class="form-control" placeholder="Message" rows="7" name="message"></textarea>
					</div>
					<div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
						<input type="submit" name="submit" class="form-control" value="SEND MESSAGE">
					</div>
				</form>

				<?php
					$to = "info@unitalkltd.com";
					$name = $_POST["name"];
					$subject = "Unitalk contact form";
					$email = $_POST["email"];
					$message = $_POST["message"];

					if (isset($_POST['submit'])) {
					    mail($to, $subject, $name."\nFrom: ".$email, $message);
					}

				?>

			</div>
		</div>
	</div>
</section>

<section id="section-map" class="clearfix">
	<div id="google-map" data-latitude="51.507751" data-longitude="-0.130377"></div>
</section>

<a href="#contact" class="scrollup"><i class="fa fa-chevron-up"></i></a>

<?php include('footer.php'); ?>

<script src="js/jquery.js"></script>
<script src="js/jarallax.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/smoothScroll.js"></script>
<script type="text/javascript">
	$('html').smoothScroll(800);
</script>
<script src="https://maps.google.com/maps/api/js"></script>
<script src="js/maps.js"></script>

</body>
</html>

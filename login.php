<!DOCTYPE html>
<html lang="en">

<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Form Login -->
	<link rel="stylesheet" href="css/form-login.css">
</head>

<body>
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<?php
				include_once './subpage/menu_top.php'
				?>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">Welcome to Sachmoiz.com</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-2"></div>
				<div class="col-lg-6 col-md-8 login-box">
					<div class="col-lg-12 login-key">
						<i class="fa fa-key" aria-hidden="true"></i>
					</div>
					<div class="col-lg-12 login-title">
						ADMIN PANEL
					</div>

					<div class="col-lg-12 login-form">
						<div class="col-lg-12 login-form">
							<form role="form" class="text-start" action="login-handle.php" method="POST">
								<div class="form-group">
									<label class="form-control-label" >USERNAME</label>
									<input type="text" class="form-control" name="username">
								</div>
								<div class="form-group">
									<label class="form-control-label" >PASSWORD</label>
									<input type="password" class="form-control" name="Password">
								</div>

								<div class="col-lg-12 loginbttm">
									<div class="col-lg-6 login-btm login-text">
										<!-- Error Message -->
									</div>
									<div class="col-lg-6 login-btm login-button">
										<button type="submit" class="btn btn-outline-primary">LOGIN</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-3 col-md-2"></div>
				</div>
			</div>





			<div class="colorlib-product">
				<footer id="colorlib-footer" role="contentinfo">
					<?php
					include_once './subpage/footer.php'
					?>
				</footer>
			</div>
		</div>



		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- popper -->
		<script src="js/popper.min.js"></script>
		<!-- bootstrap 4.1 -->
		<script src="js/bootstrap.min.js"></script>
		<!-- jQuery easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Flexslider -->
		<script src="js/jquery.flexslider-min.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/magnific-popup-options.js"></script>
		<!-- Date Picker -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Stellar Parallax -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Main -->
		<script src="js/main.js"></script>
</body>

</html>
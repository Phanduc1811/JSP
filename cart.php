<?php
include './pdo.php';
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

// print_r($_SESSION);
  
// exit;

$c = $_SESSION['cart'];
// echo '<pre>';
// print_r($c);
// unset ($_SESSION['cart']);
// exit;
?>


<!DOCTYPE HTML>
<html>

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

</head>

<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<?php
				include_once './subpage/menu_top.php';
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

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Shopping Cart</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center px-4">
								<span>Remove</span>
							</div>
						</div>
						<?php
						if (count($c) == 0) {
						?>
							<div class="container text-center">
								<div class="checkout">
									<h4 class="title">Giỏ hàng chưa có sản phẩm</h4>
									<p class="cart">Bạn chưa có sản phẩm trong giỏ hàng. <br>Click <a href="index.html"> <span class="font-weight-bold">vào đây</span></a> để mua hàng</p>
								</div>
							</div>
						<?php
						} else {
						?>
							<?php
							$thanhtien = 0;
							foreach ($c as $v) {
								$tong = 0;
							?>
								<div class="product-cart d-flex">
									<div class="one-forth">
										<img src="./admin/image/<?= $v['hinh'] ?>" alt="" style="width: 100px; height: 100px;">
										<div class="display-tc">
											<h3><?= $v['name'] ?></h3>
										</div>
									</div>
									<div class="one-eight text-center">
										<div class="display-tc">
											<span class="price"><?= number_format($v['price']) ?> VNĐ</span>
										</div>
									</div>
									<div class="one-eight text-center">
										<div class="display-tc">
											<input type="text" id="quantity" class="form-control input-number text-center quantity" readonly value='<?= $v['qty'] ?>' min="1" max="100">
										</div>
									</div>
									<div class="one-eight text-center">
										<div class="display-tc">
											<span class="total_price"><?php $tong += $v['price'] * $v['qty'];
																		echo number_format($v['price'] * $v['qty']) . 'VNĐ';
																		$thanhtien += $tong ?></span>
										</div>
									</div>
									<div class="one-eight text-center">
										<div class="display-tc">
											<button type="button" onclick="location.href='cart-handle.php?DH51800367_action=delete&id=<?= $v['id'] ?>'" class="btn btn-danger">
												<span class="fa fa-times">Xoá</span>
											</button>
										</div>
									</div>
								</div>
							<?php
							}
							?>

						<?php
						}
						?>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-8">
									<form action="#">
										<div class="row form-group">
											<div class="col-sm-9">
												<input type="text" class="form-control input-number" placeholder="Your Coupon Number...">
											</div>
											<div class="col-sm-3">
												<input type="submit" value="Apply Coupon" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
								<div class="col-sm-4 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>00.00</span></p>
											<p><span>Delivery:</span> <span>$00.00</span></p>
											<p><span>Discount:</span> <span>00.00</span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span><?= number_format($thanhtien) ?> VNĐ<span></span></p>
										</div>
										<div class="button">
											<button type="button" onclick="location.href='checkout.html'" class="btn btn-success">Thanh Toán</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<?php
			include_once './subpage/footer.php';
			?>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
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
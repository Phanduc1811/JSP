<?php
include './pdo.php';
$key = isset($_GET['DH51800367_kw']) ? $_GET['DH51800367_kw'] : '';
$sql = 'select sach.*, nhaxb.tennxb, loai.tenloai from nhaxb, sach, loai WHERE sach.manxb=nhaxb.manxb AND sach.maloai=loai.maloai and tensach like ?';
$a = ["%$key%"];
// print_r($key);
// exit;
$objStatement = $objPDO->prepare($sql);
$objStatement->execute($a);
//$n = $objStatement->rowCount();
//echo "co $n ket qua";
$datakw = $objStatement->fetchAll(PDO::FETCH_OBJ);
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
											<h3>Hello ma nguon mo</h3>
											<h3>Hello lai ne</h3>
											<h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3>Hello ma nguon mo</h3>
											<h3>hello boiz</h3>
											<h3>hiiiiiiiii</h3>
											<h3>hahahahah</h3>
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
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Result</span></p>
					</div>
				</div>
			</div>
		</div>
		<div id="page">
			<div class="colorlib-product">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
							<h2>Danh Sách Tìm Kiếm</h2>
						</div>
					</div>
					<div class="row row-pb-md">
						<?php
						foreach ($datakw as $dk) {
						?>
							<div class="col-lg-3 mb-4">
								<div class="product-entry border">
									<a href="product-detail.php?masach=<?php echo $dk->masach ?>" class="prod-img">
										<img src="./admin/image/<?php echo $dk->hinh ?>" class="img-fluid" alt="Free html5 bootstrap 4 template" style="width: 800px; height: 300px;">
									</a>
									<div class="desc">
										<h2><a href="product-detail.php?masach=<?php echo $dk->masach ?>">Tên Sách: <?php echo $dk->tensach ?></a></h2>
										<p>Tên Thể Loại: <?php echo $dk->tenloai ?></p>
										<p>Tên NXB: <?php echo $dk->tennxb ?></p>
										<span class="price">Giá: <?php echo $dk->gia ?></span>
									</div>
								</div>
							</div>
						<?php
						}
						?>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
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
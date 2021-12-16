<?php
include './pdo.php';
$m = isset($_GET['masach']) ? $_GET['masach'] : '';
if ($m == '') {
    header('location:index.php');
    exit;
}

$sql = 'select sach.*, nhaxb.tennxb, loai.tenloai from nhaxb, sach, loai WHERE sach.manxb=nhaxb.manxb AND sach.maloai=loai.maloai and masach=?';
$a = [$m];
$objStatement = $objPDO->prepare($sql);
$objStatement->execute($a);
$bookbyid = $objStatement->fetchAll(PDO::FETCH_OBJ);



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
                                            <h3><a href="#">Welcome To Sachmoiz.com</a></h3>
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
                        <p class="bread"><span><a href="index.html">Home</a></span> / <span>Product Details</span></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="colorlib-product">
            <div class="container">
                <div class="row row-pb-lg product-detail-wrap">
                    <?php
                    foreach ($bookbyid as $bi) {
                    ?>

                        <div class="col-sm-8">
                            <img src="./admin/image/<?= $bi->hinh ?>" class="img-fluid" style="width: 500px; height: 500px;">
                        </div>
                        <div class="col-sm-4">
                            <div class="product-desc">
                                <h3>Tên Sách:<?= $bi->tensach ?> </h3>
                                <p>Tên NXB: <?= $bi->tennxb ?></p>
                                <p>Loại: <?= $bi->tenloai ?></p>
                                <p class="price">
                                    <span>Giá: <?= number_format($bi->gia) ?>&nbsp;VNĐ</span>
                                    <span class="rate">
                                        <i class="icon-star-full"></i>
                                        <i class="icon-star-full"></i>
                                        <i class="icon-star-full"></i>
                                        <i class="icon-star-full"></i>
                                        <i class="icon-star-half"></i>
                                        (74 Rating)
                                    </span>
                                </p>
                                <form action="cart-handle.php" method="POST" id="<?= $bi->masach ?>">
                                    <input type="hidden" name="DH51800367_id" value='<?= $bi->masach ?>'>
                                    <input type="hidden" name="DH51800367_name" value='<?= $bi->tensach ?>'>
                                    <input type="hidden" name="DH51800367_manxb" value='<?= $bi->manxb ?>'>
                                    <input type="hidden" name="DH51800367_nxb" value='<?= $bi->tennxb ?>'>
                                    <input type="hidden" name="DH51800367_price" value='<?= $bi->gia ?>'>
                                    <input type="hidden" name="DH51800367_img" value='<?= $bi->hinh ?>'>
                                    <input type="hidden" name="DH51800367_action" value='add'>
                                    <div class="input-group mb-4">


                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                                                <i class="icon-minus2"></i>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="DH51800367_sl" class="form-control input-number" value="1" min="1" max="100" size="20">
                                        <span class="input-group-btn ml-1">
                                            <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                                                <i class="icon-plus2"></i>
                                            </button>
                                        </span>

                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <p class="addtocart"><a href="#" class="btn btn-primary btn-addtocart cart-to" onclick="document.getElementById('<?= $bi->masach ?>').submit();"><i class="icon-shopping-cart"></i> Add to Cart</a></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                        ?>
                        </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-md-12 pills">
                                <div class="bd-example bd-example-tabs">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Description</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Manufacturer</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content" id="pills-tabContent">
                                        <?php
                                        foreach ($bookbyid as $bi) {
                                        ?>
                                            <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
                                                <?= $bi->mota ?>
                                            </div>
                                        <?php
                                        }
                                        ?>


                                        <div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
                                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World
                                                of Grammar.</p>
                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.
                                                Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                        </div>

                                        <div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h3 class="head">23 Reviews</h3>
                                                    <div class="review">
                                                        <div class="user-img" style="background-image: url(images/person1.jpg)"></div>
                                                        <div class="desc">
                                                            <h4>
                                                                <span class="text-left">Jacob Webb</span>
                                                                <span class="text-right">14 March 2018</span>
                                                            </h4>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-half"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                </span>
                                                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                            </p>
                                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <div class="user-img" style="background-image: url(images/person2.jpg)"></div>
                                                        <div class="desc">
                                                            <h4>
                                                                <span class="text-left">Jacob Webb</span>
                                                                <span class="text-right">14 March 2018</span>
                                                            </h4>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-half"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                </span>
                                                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                            </p>
                                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                        </div>
                                                    </div>
                                                    <div class="review">
                                                        <div class="user-img" style="background-image: url(images/person3.jpg)"></div>
                                                        <div class="desc">
                                                            <h4>
                                                                <span class="text-left">Jacob Webb</span>
                                                                <span class="text-right">14 March 2018</span>
                                                            </h4>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-half"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                </span>
                                                                <span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
                                                            </p>
                                                            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="rating-wrap">
                                                        <h3 class="head">Give a Review</h3>
                                                        <div class="wrap">
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    (98%)
                                                                </span>
                                                                <span>20 Reviews</span>
                                                            </p>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    (85%)
                                                                </span>
                                                                <span>10 Reviews</span>
                                                            </p>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    (70%)
                                                                </span>
                                                                <span>5 Reviews</span>
                                                            </p>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    (10%)
                                                                </span>
                                                                <span>0 Reviews</span>
                                                            </p>
                                                            <p class="star">
                                                                <span>
                                                                    <i class="icon-star-full"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    <i class="icon-star-empty"></i>
                                                                    (0%)
                                                                </span>
                                                                <span>0 Reviews</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                include_once './subpage/footer.php' 
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

    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>


</body>

</html>
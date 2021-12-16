<?php
include './pdo.php';
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];

$c = $_SESSION['cart'];
?>

<div class="container">
    <div class="row">
        <div class="col-sm-7 col-md-9">
            <div id="colorlib-logo"><a href="index.html">Sachmoiz.com</a></div>
        </div>
        <div class="col-sm-5 col-md-3">
            <form action="result.html" class="search-wrap">
                <div class="form-group">
                    <input type="search" name="DH51800367_kw" class="form-control search" placeholder="Search">
                    <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 text-left menu-1">
            <ul>
                <li class="active"><a href="index.html">Trang Chủ</a></li>
                <li class="has-dropdown">
                    <a href="#">Danh Mục</a>
                    <ul class="dropdown">
                        <li><a href="product-detail.html">Danh Mục Sách</a></li>
                        <li><a href="author-detail.html">Danh Mục NXB</a></li>
                        <li><a href="type-detail.php">Danh Mục Loại</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Giỏ Hàng</a>
                    <ul class="dropdown">
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="order-complete.html">Order Complete</a></li>
                    </ul>
                </li>
                <li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [<?php echo count($c)?>]</a></li>
                <li class="cart"><a href="login.php"><i class="icon-log-in"></i>&nbsp;Login</a></li>
                
            </ul>
        </div>
    </div>
</div>
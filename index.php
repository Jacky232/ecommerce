<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
		<!-- Google Font -->
		
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">

		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="asset/css/elegant-icons.css">
		<link rel="stylesheet" href="asset/css/jquery-ui.min.css">
		<link rel="stylesheet" href="asset/css/nice-select.css">
		<link rel="stylesheet" href="asset/css/owl.carousel.min.css">
		<link rel="stylesheet" href="asset/css/slicknav.min.css">
		<link rel="stylesheet" href="asset/css/style.css">
		<script src="main.js"></script>
		<script src="asset/js/jquery-ui.min.js"></script>
		<script src="asset/js/jquery.nice-select.min.js"></script>
		<script src="asset/js/jquery.slicknav.js"></script>
		<script src="asset/js/main.js"></script>
		<script src="asset/js/mixitup.min.js"></script>
		<script src="asset/js/owl.carousel.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		
		<style></style>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>


<!-- Header Section Begin -->
<header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> pharma24bd@gmail.com</li>
                                <li>Free Shipping for all Order of 1500Tk</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/Pharma24bd-106956051857339/"><i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <div>English</div>
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Bangla</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
							<li style="list-style:none;"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Login/Register</a>
								<ul class="dropdown-menu" style="width: 100%;">
									<div style="width: 100%;">
										<div class="panel panel-primary">
											<div class="panel-heading" style="text-align:center;font-size: 22px;background: #7fad39;">Login</div>
											<div class="panel-heading" style="background: #7fad39;">
												<form onsubmit="return false" id="login">
													<label for="email">Email</label>
													<input type="email" class="form-control" name="email" id="email" required/>
													<label for="email">Password</label>
													<input type="password" class="form-control" name="password" id="password" required/>
													<p><br/></p>
													<input type="submit" class="btn btn-warning" value="Login" style="margin:0px auto;">
													<a href="customer_registration.php?register=1" style="color:white; text-decoration:none;text-align:center;">Create Account Now</a>
												</form>
											</div>
										</div>
									</div>
								</ul>
							</li>
                            </div>
                            <!-- <div class="header__top__right__auth">
                                <a href="singup/signup.html"><i class="fa fa-user"></i> Register</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="asset/img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu" style="padding: 37px 22px;">
                        <ul>
                            <li style="margin-right: 27px;" class="active"><a href="index.php">Home</a></li>
                            <li style="margin-right: 27px;"><a href="./Medicines.html">Medicine</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="">Local Medicine</a></li>
                                    <li><a href="">Foreign Medicine</a></li>
                                </ul>
                            </li>
                            <li style="margin-right: 27px;"><a href="prescription.php">Upload prescription</a>
                            </li>
                            <li style="margin-right: 27px;"><a href="indexpost.php">Blog</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
						<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span><i class="badge fa fa-shopping-bag" style="background: transparent;">0</i></a>
							<div class="dropdown-menu" style="width:400px;left: -66px;">
								<div class="panel panel-success">
									<div class="panel-heading">
										<div class="row">
											<div class="col-md-3">Sl.No</div>
											<div class="col-md-3">Product Image</div>
											<div class="col-md-3">Product Name</div>
											<div class="col-md-3">Price in <?php echo CURRENCY; ?></div>
										</div>
									</div>
									<div class="panel-body">
										<div id="cart_product">
										<!--<div class="row">
											<div class="col-md-3">Sl.No</div>
											<div class="col-md-3">Product Image</div>
											<div class="col-md-3">Product Name</div>
											<div class="col-md-3">Price in $.</div>
										</div>-->
										</div>
									</div>
									<div class="panel-footer"></div>
								</div>
							</div>
						</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
<!-- Header Section End -->

<!-- Hero Section Begin -->
<section class="hero" style="
    padding-bottom: 34px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div id="get_category">
						</div>
						<!-- <div id="get_brand">
						</div> -->
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+8801627628663 <br>+8801580317040</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="asset/img/hero/medicine-poster.jpg">
                        <div class="hero__text">
                            <span>Branded Medicine</span>
                            <h2>Medicines are <br />100% Original</h2>
                            <p style="color: maroon;font-weight: bold;">Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->


	<!-- Featured Section Begin -->
    <section class="featured spad" style="padding-top: 5px!important;
	padding-bottom: 40px!important;">
        <div class="container">
			<div class="row">
						<div class="col-md-12 col-xs-12" id="product_msg">
						</div>
			</div>
            <div class="row">
				<div id="get_product">
					<!--Here we get product jquery Ajax Request-->
				</div>
			<!-- <div class="col-lg-3">
                <div class="product__discount__item">
                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="https://cdn1.arogga.com/eyJidWNrZXQiOiJhcm9nZ2EiLCJrZXkiOiJtZWRpY2luZVwvMjdcLzI3NjA4LURpYXBlci1OZW9DYXJlLVMtMy02a2ctMzJQY3MtU21hbGwtMy10by02a2ctZW8xbC5qcGciLCJlZGl0cyI6eyJyZXNpemUiOnsid2lkdGgiOjIwMCwiaGVpZ2h0IjoyMDAsImZpdCI6Im91dHNpZGUifX19">

                        <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                             	<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__discount__item__text">
                        <span>NeoCare Belt System Baby Diaper S Small (3-6kg)</span>
                        <h5><a href="#">Diaper</a></h5>
						<div class="product__item__price">730.00 Tk<span></div>
                        <div class="product__item__price">730.00 Tk<span></div>
                    </div>
            	</div>
            	</div> -->
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

<!-- Footer Section Begin -->
<footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Sheltech Bithika,Mirpur 1,Dhaka 1216</li>
                            <li>Phone: +8801627628663 <br>
                                +8801580317040</li>
                            <li>Email:asraful.s.i.196@gmail.com <br>
                                amiahsanhabib96@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright" style="text-align: center;">
                        <div class="footer__copyright__text">
                            <p style="margin-left: 400px;">
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved by
                                Pharma24bd
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
</body>
</html>

















































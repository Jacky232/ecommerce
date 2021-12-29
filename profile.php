<?php
require "config/constants.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Ecommerce</title>
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
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body>



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
							<li style="list-style:none;"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo "Hi, ".$_SESSION["name"]; ?></a>
								<ul class="dropdown-menu" style="position: absolute;left:410px;">
									<li><a href="cart.php" style="text-decoration:none; color:black;"><span class="glyphicon glyphicon-shopping-cart"> Cart</a></li>
									<li class="divider"></li>
									<li><a href="customer_order.php" style="text-decoration:none; color:black;">Orders</a></li>
									<li class="divider"></li>
									
									<li><a href="logout.php" style="text-decoration:none; color:black;">Logout</a></li>
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


	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<div id="get_product" style="padding-top: 10px;">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>
</body>
</html>

















































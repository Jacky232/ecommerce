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
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
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


            </div>
        </div>








	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in <?php echo CURRENCY; ?></b></div>
						</div>
						<div id="cart_checkout"></div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>


</body>	
</html>
















		
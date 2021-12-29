<?php


require "db.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Blog</title>
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







<div>
    <div class="container m-auto mt-3 row">
        <div class="col-8">

        <?php
        $post_id=$_GET['id'];
        $postQuery="SELECT*FROM posts WHERE id=$post_id";
        $runPQ=mysqli_query($con,$postQuery);
        $post=mysqli_fetch_assoc($runPQ);
          ?>
            <div class="card mb-3">
                <div class="card-body">
                  <h3 class="card-title"><?=$post['title']?></h3>
                  <h6><?=date('F jS, Y',strtotime($post['created_at']))?></h6>

                  <!-- <span class="badge bg-danger">Web Development</span> -->
                  <div class="border-bottom mt-3"></div>
                  <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" class="img-fluid mb-2 mt-2" alt="Responsive image">
                  <p class="card-text"><?=$post['content']?></p>
                  <a href="#" class="btn btn-primary">Share this post</a>
                  <a href="#" class="btn btn-primary">Comment on this</a>

                </div>
              </div>
        
              <div>
                  <h4>Related Posts</h4>
                <div class="card mb-3" style="max-width: 700px;">
                    <div class="row g-0">
                      <div class="col-md-5" style="background-image: url('https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg');background-size: cover">
                        <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>  
                  <div class="card mb-3" style="max-width: 700px;">
                    <div class="row g-0">
                      <div class="col-md-5" style="background-image: url('https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg');background-size: cover">
                        <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>  
                  <div class="card mb-3" style="max-width: 700px;">
                    <div class="row g-0">
                      <div class="col-md-5" style="background-image: url('https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg');background-size: cover">
                        <!-- <img src="https://images.moneycontrol.com/static-mcnews/2020/04/stock-in-the-news-770x433.jpg" alt="..."> -->
                      </div>
                      <div class="col-md-7">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                    </div>
                  </div>  
              </div>
        
    </div>
    <div class="col-4">
        <div class="card mb-3">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card mb-3">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card mb-3">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          
    </div>
    </div>
      
    

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
</body>
</html>
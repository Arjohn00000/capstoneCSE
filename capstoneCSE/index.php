<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Landing Page</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style/landing.css">
	<link rel="stylesheet" href="./css/style/global.css">
	<link rel="stylesheet" href="./css/style/responsive.css">
    <link rel="icon" type="image/x-icon" href="images/CSE.png">

</head>

<body>
	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-lg fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><img src="images/CSE.png" class="logo" alt=""></a>
			<button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
				class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-uppercase">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#products">Products</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">Services</a>
					</li>

				</ul>
			</div>
		</div>
	</nav>
	<!-- Navbar End -->

	<!-- Carousel Start -->
	<div class="slider">
		<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
			<div class="carousel-indicators">
				<button aria-label="Slide 1" class="active" data-bs-slide-to="0"
					data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2"
					data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button
					aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators"
					type="button"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img alt="..." class="d-block w-100" src="images/bangus.jpg">
					<div class="carousel-caption">
						<h5>CHARLYN'S SEAFOOD ESSENTIALS</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
							excepturi quas vero.</p>
						<!-- <button data-bs-toggle="modal" data-bs-target="#register" class="btn btn-outline-light mt-3 mx-2">Get Started</button>
						<button data-bs-toggle="modal" data-bs-target="#login" class="btn btn-outline-info  mt-3 mx-2 px-4">Sign In</button> -->

						<button  class="btn btn-outline-light mt-3 mx-2"><a class="text-decoration-none" href="pages/credentials/register.php">Get Started</a></button>
						<button  class="btn btn-outline-info  mt-3 mx-2 px-4"><a class="text-decoration-none" href="pages/credentials/login.php">Sign In</a></button>
					</div>
				</div>
				<div class="carousel-item">
					<img alt="..." class="d-block w-100" src="images/Danggit.jpg">
					<div class="carousel-caption">
						<h5>CHARLYN'S SEAFOOD ESSENTIALS</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
							excepturi quas vero.</p>
						<!-- <button data-bs-toggle="modal" data-bs-target="#register" class="btn btn-outline-light mt-3 mx-2">Get Started</button>
						<button data-bs-toggle="modal" data-bs-target="#login" class="btn btn-outline-info  mt-3 mx-2 px-4">Sign In</button> -->

						<button  class="btn btn-outline-light mt-3 mx-2"><a class="text-decoration-none" href="pages/credentials/register.php">Get Started</a></button>
						<button  class="btn btn-outline-info  mt-3 mx-2 px-4"><a class="text-decoration-none" href="pages/credentials/login.php">Sign In</a></button>
					</div>
				</div>
				<div class="carousel-item">
					<img alt="..." class="d-block w-100" src="images/Danggit.jpg">
					<div class="carousel-caption">
						<h5>CHARLYN'S SEAFOOD ESSENTIALS</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt
							excepturi quas vero.
						</p>
						<!-- <button data-bs-toggle="modal" data-bs-target="#register" class="btn btn-outline-light mt-3 mx-2">Get Started</button>
						<button data-bs-toggle="modal" data-bs-target="#login" class="btn btn-outline-info  mt-3 mx-2 px-4">Sign In</button> -->


						<button  class="btn btn-outline-light mt-3 mx-2"><a class="text-decoration-none" href="pages/credentials/register.php">Get Started</a></button>
						<button  class="btn btn-outline-info  mt-3 mx-2 px-4"><a class="text-decoration-none" href="pages/credentials/login.php">Sign In</a></button>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
				type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
					class="visually-hidden">Previous</span></button>
			<button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators"
				type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span
					class="visually-hidden">Next</span></button>
		</div>
	</div>
	<!-- Carousel End -->

	<!-- Modal Start -->
	<!-- <section>
			<div class="modal mt-4" id="login">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							<div class="form-area bg-white rounded-4">
								<h1 class="text-center">Login</h1>
								<form>
									<div class="mb-2 mt-4">
										<label for="username" class="form-label">Username</label>
										<input type="text" class="form-control" id="username" aria-describedby="emailHelp">
									</div>
									<div class="mb-2 mt-4">
										<label for="email" class="form-label">Email</label>
										<input type="email" class="form-control" id="email" aria-describedby="emailHelp">
									</div>
									<div class="mb-2">
										<label for="password" class="form-label">Pasword</label>
										<input type="password" class="form-control" id="password">
									</div>
									<button type="submit" class="btn mt-3" id="btnlogIn">LOGIN</button>
									<p>Don't have an account?<a class="login text-decoration-none mx-2" id="btn-create">Signup</a></p>
								</form>
							</div>
						</div>
					  </div>
				</div>
			</div>
	</section>
 -->
	<!-- <section>
		<div class="modal mt-4" id="register">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content mt-4">
					<div class="modal-body">
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<div class="form-area bg-white rounded-4">
							<h1 class="text-center">Register</h1>
							<form>
								<div class="mb-2 mt-4">
									<label for="username" class="form-label">Username</label>
									<input type="text" class="form-control" id="uname">
								</div>
								<div class="mb-2">
									<label for="email" class="form-label">Email</label>
									<input type="email" class="form-control" id="myEmail" aria-describedby="emailHelp">
								</div>
								<div class="mb-2">
									<label for="password" class="form-label">Password</label>
									<input type="password" class="form-control" id="pass">
								</div>
								<div class="mb-2">
									<label for="cpassword" class="form-label">Confirm Password</label>
									<input type="password" class="form-control" id="cpass">
								</div>
								<button type="submit" class="btn mt-3" id="btn-reg">REGISTER</button>
								<p>Already have an account?<a class="login text-decoration-none mx-2" id="btn-read">Sign In</a></p>
							</form>
						</div>
					</div>
				  </div>
			</div>
		</div>
	</section> -->
	<!-- Modal End -->

	<!-- Header Start -->
	<section class="about section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>Welcome to our Seafood Website</h2>
						<p class="text-start">where we offer a wide selection of fresh and high-quality seafood
							products, which means a variety of options in one place.
							This is designed to make it easy for you to browse through our extensive range of seafood
							products and make your purchase with just a few clicks. <br> <br>
							Thank you for choosing our seafood website as your go-to destination for all your seafood
							needs.
						</p>
						<button data-bs-toggle="modal" data-bs-target="#login" class="btn btn-success">Order Now</button>
					</div>
				</div>
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img"><img alt="" class="img-fluid" src="images/CSE.png"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Header End -->

	<!-- Product Start -->
	<section class="products section-padding" id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h1 class="fw-bold">Our Products</h1>
						<p>Lorem ipsum dolor sit amet, consectetur<br>
							adipisicing elit. Non, quo.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4 mb-2">
					<div class="card text-center pb-2">
						<div class="card-body">
							<h3 class="card-title">Danggit</h3>
							<div class="img-area mb-4 text-center"><img class="fish" alt="" src="images/Danggit.jpg">
							</div>
							<p class="price text-decoration-none"><i class="fa-sharp fa-solid fa-peso-sign"></i>300/kg
							</p>
							<div>
								<a class="btn btn-success btn-sm mt-3 mx-2" href="#">Order</a>
								<a class="btn btn-warning btn-sm mt-3 mx-2" href="#">Reserve</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4 mb-2">
					<div class="card text-center pb-2">
						<div class="card-body">
							<h3 class="card-title">Bangus</h3>
							<div class="img-area mb-4 text-center"><img class="fish" alt="" src="images/bangus.jpg">
							</div>
							<p class="price text-decoration-none"><i class="fa-sharp fa-solid fa-peso-sign"></i>350/kg
							</p>
							<div>
								<a class="btn btn-success btn-sm mt-3 mx-2" href="#">Order</a>
								<a class="btn btn-warning btn-sm mt-3 mx-2" href="#">Reserve</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4 mb-2">
					<div class="card text-center pb-2">
						<div class="card-body">
							<h3 class="card-title">Tulingan</h3>
							<div class="img-area mb-4 text-center"><img class="fish" alt="" src="images/tulingan.jpg">
							</div>
							<p class="price text-decoration-none"><i class="fa-sharp fa-solid fa-peso-sign"></i>200/kg
							</p>
							<div>
								<a class="btn btn-success btn-sm mt-3 mx-2" href="#">Order</a>
								<a class="btn btn-warning btn-sm mt-3 mx-2" href="#">Reserve</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4 mb-2">
					<div class="card text-center pb-2">
						<div class="card-body">
							<h3 class="card-title">Lapu-Lapu</h3>
							<div class="img-area mb-4 text-center"><img class="fish" alt="" src="images/lapu.jpg"></div>
							<p class="price text-decoration-none"><i class="fa-sharp fa-solid fa-peso-sign"></i>250/kg
							</p>
							<div>
								<a class="btn btn-success btn-sm mt-3 mx-2" href="#">Order</a>
								<a class="btn btn-warning btn-sm mt-3 mx-2" href="#">Reserve</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4 mb-2">
					<div class="card text-center pb-2">
						<div class="card-body">
							<h3 class="card-title">Tamarong</h3>
							<div class="img-area mb-4 text-center"><img class="fish" alt="" src="images/tamarong.jpg">
							</div>
							<p class="price text-decoration-none"><i class="fa-sharp fa-solid fa-peso-sign"></i>300/kg
							</p>
							<div>
								<a class="btn btn-success btn-sm mt-3 mx-2" href="#">Order</a>
								<a class="btn btn-warning btn-sm mt-3 mx-2" href="#">Reserve</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4 mb-2">
					<div class="card text-center pb-2">
						<div class="card-body">
							<h3 class="card-title">Tamban</h3>
							<div class="img-area mb-4 text-center"><img class="fish" alt="" src="images/tamban.jpg">
							</div>
							<p class="price text-decoration-none"><i class="fa-sharp fa-solid fa-peso-sign"></i>200/kg
							</p>
							<div>
								<a class="btn btn-success btn-sm mt-3 mx-2" href="#">Order</a>
								<a class="btn btn-warning btn-sm mt-3 mx-2" href="#">Reserve</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Products End -->

	<!-- About Us Start -->
	<section class="services section-padding" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h1 class="fw-bold">About Us</h1>
						<p>Lorem ipsum dolor sit amet, consectetur<br>
							adipisicing elit. Non, quo.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card pb-2">
						<div class="card-body">
							<div class="img-area mb-2 text-center"><img alt="" class="img-fluid w-25"
									src="images/C.png"></div>
							<hr>
							<p class="lead">We aim to offer a hassle-free shopping experience with our user-friendly
								website and reliable delivery service.
								Thank you for choosing us as your seafood provider.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card pb-2">
						<div class="card-body">
							<div class="img-area mb-2 text-center"><img alt="" class="img-fluid w-25"
									src="images/S.png"></div>
							<hr>
							<p class="lead">We offer a safe online transactions in every seafood product purchase.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card pb-2">
						<div class="card-body">
							<div class="img-area mb-2 text-center"><img alt="" class="img-fluid w-25"
									src="images/E.png"></div>
							<hr>
							<p class="lead">We offer a wide selection of seafood products and we value every customer's
								needs.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Us End -->

	<!-- Services Start -->
	<section class="services section-padding" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h1 class="fw-bold">Services</h1>
						<p>Lorem ipsum dolor sit amet, consectetur<br>
							adipisicing elit. Non, quo.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card pb-2">
						<div class="card-body">
							<div class="img-area mb-2 text-center"><img alt="" class="img-fluid w-25"
									src="images/motor.png"></div>
							<h2 class="card-title text-center mb-2">Free Delivery</h2>
							<hr>
							<p class="lead">We provide free delivery service for a minimum purchase of (2kg), within the
								Cordova area only. However, for customers located outside Cordova,
								a delivery fee will be charged based on your location.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card pb-2">
						<div class="card-body">
							<div class="img-area mb-2 text-center"><img alt="" class="img-fluid w-25"
									src="images/pickup.png"></div>
							<h2 class="card-title text-center mb-2">Pick-up</h2>
							<hr>
							<p class="lead">We also offer a convenient pick-up option for customers who prefer to
								collect their orders themselves. Simply place your order online or over the phone, and
								we will have it ready for you to pick up at your desired time and location.</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card pb-2">
						<div class="card-body">
							<div class="img-area mb-2 text-center"><img alt="" class="img-fluid w-25"
									src="images/scaling.png"></div>
							<h2 class="card-title text-center mb-2">Fre Fish Scaling</h2>
							<hr>
							<p class="lead">Enjoy hassle-free seafood preparation with our free scaling service for all
								fish purchases.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services End -->

	<!-- Footer Start -->
	<footer>
		<div class="container ">
			<div class="row">
				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="single-box">
						<img src="images/CSE.png" class="logo w-50" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="single-box">
						<h2>MENU</h2>
						<ul class="list-unstyled">
							<li><a href="#">Home</a></li>
							<li><a href="#">Products</a></li>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Services</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="single-box">
						<h2>We Accept:</h2>
						<ul class="list-unstyled">
							<li><a href="#">Gcash</a></li>
							<li><a href="#">Paymaya</a></li>
							<li><a href="#">Cash on Delivery</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 mt-5">
					<div class="single-box">
						<h2>Follow us:</h2>
						<p class="socials">
							<a href="https://www.facebook.com/carlngujo032"><i
									class="fa fa-brands fa-facebook fa-lg"></i></a>
							<a href=""><i class="fa fa-brands fa-twitter fa-lg"></i></a>
							<a href=""><i class="fa fa-brands fa-instagram fa-lg"></i></a>
						</p>
					</div>
				</div>
				<hr>
				<p class="text-center mt-2">Copyright © 2022 . Charlyn's Seafood Essentials. All Rights Reserved</p>
			</div>
		</div>
	</footer>
	<!-- Footer End -->
	<!-- <script src="./plugins/privacy/jquery.js"></script>
	<script src="./plugins/privacy/register.js"></script>
	<script src="./plugins/privacy/login.js"></script> -->
	<!-- Script -->
	<script src="./plugins/bundle/collapse.js" ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>
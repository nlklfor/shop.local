<?php
	session_start();
	require_once 'admin/includes/connect.php' ;
	$variables = mysqli_query($connect , "SELECT * FROM `variables`");
	$vars = [];
	while ($var = mysqli_fetch_assoc($variables)){
		$vars[$var['title']] = $var['value'];
	}
	
    

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>.Shop</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;400;500;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/swiper-bundle.min.css" />
	<link rel="stylesheet" href="css/style.css">
</head>
<!-- class="show-goods" -->

<body id="body">
	
	<header class="container header px-4 px-md-0">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-2 col-6">
				<a href="index.php" class="logo-link">
					<img width="128" src="img/shop-seeklogo.svg" alt="logo: OnlineShop" class="logo-image">
				</a>
			</div>
			<div class="col-lg-6 d-none d-lg-block">
				<nav>
					<ul class="navigation d-flex justify-content-around">
						<li class="navigation-item">
							<a href="#" class="navigation-link" data-field="gender">Womens</a>
						</li>
						<li class="navigation-item">
							<a href="#" class="navigation-link" data-field="gender">Mens</a>
						</li>
						<li class="navigation-item">
							<a href="#" class="navigation-link" data-field="category">Clothing</a>
						</li>
						<li class="navigation-item">
							<a href="#" class="navigation-link" data-field="category">Accessories</a>
						</li>
						<li class="navigation-item">
							<a href="#" class="navigation-link" data-field="category">Shoes</a>
						</li>
						<li class="navigation-item">
							<a href="#" class="navigation-link">All</a>
						</li>

					</ul>
				</nav>
			</div>
			<div class="col-lg-2 d-none d-lg-block">
				<div class="form-control search-block">
					<input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username"
						aria-describedby="button-addon2">
					<button class="btn btn-outline-secondary" type="button" id="button-addon2">
						<img src="img/search.png" alt="search">
					</button>
				</div>
			</div>
			<div class="col-lg-2 col-6 d-flex justify-content-end">
				<?php 
                    if($_SESSION['is_logged'] === true){
                        echo '
                        <button class="button button-cart">
                        <img class="button-icon" src="img/cart.svg" alt="icon: cart">
                        <span class="button-text">Cart</span>
                        <span class="button-text cart-count"></span>
                        </button>
                        ';
                    }
                ?>
			</div>
			<?php 

                if($_SESSION['is_logged'] === true){
                    echo '
                        <a href="./admin/core/logout.php">LogOut</a>
                    ';
                }
                else{
                    echo '
                        <a href="log.php"> <button class="login-button">LogIn</button> </a> 
                    ';
                }

            ?>
		</div>
		<!-- /.row -->
	</header>
	<section class="slider swiper-container">
		<div class="swiper-wrapper">
			<section class="slide slide-1 swiper-slide">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-10 offset-lg-1">
							<span class="label">Bestseller</span>
							<h2 class="slide-title">
								<?php
									echo $vars['first-title'];
								?>
							</h2>
							<p class="slide-description"><?php
								echo $vars['sub-title_main'];
							?></p>
							<button class="button add-to-cart" data-id="003">
								<span class="button-price">$219</span>
								<span class="button-text">Shop now</span>
							</button>
						</div>
						<!-- /.col-4 offset-lg-1 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</section>
			<section class="slide slide-1 swiper-slide">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-10 offset-lg-1">
							<span class="label">New</span>
							<h2 class="slide-title">Text T-Shirt</h2>
							<p class="slide-description">Women’s pearl basic knit sweater with a round neck. Available
								in several colours. Free shipping to stores.</p>
							<button class="button add-to-cart" data-id="004">
								<span class="button-price">$119</span>
								<span class="button-text">Shop now</span>
							</button>
						</div>
						<!-- /.col-4 offset-lg-1 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</section>
			<section class="slide slide-1 swiper-slide">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-10 offset-lg-1">
							<span class="label">Bestseller</span>
							<h2 class="slide-title">Sweater Choker Neck</h2>
							<p class="slide-description">Women’s pearl basic knit sweater with a round neck. Available
								in several colours. Free shipping to stores.</p>
							<button class="button add-to-cart" data-id="005">
								<span class="button-price">$319</span>
								<span class="button-text">Shop now</span>
							</button>
						</div>
						<!-- /.col-4 offset-lg-1 -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.container -->
			</section>
		</div>
		<!-- /.swiper-wrapper -->
		<div class="slider-nav">
			<div class="container">
				<div class="row justify-content-between">
					<!-- /.col-1 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container -->
		</div>
		<!-- /.slider-nav -->
	</section>
	<!-- /.slider -->
	<section class="special-offers container pt-5 pb-4">
		<div class="row mb-4">
			<div class="col-xl-6">
				<div class="card card-1 mb-4">
					<h3 class="card-title">
								<?php
									echo $vars['first-card__title'];
								?>
					</h3>
					<p class="card-text">
								<?php
									echo $vars['first-card__subtitle'];
								?>
					</p>
					<button class="button">
						<span class="button-text">View all</span>
						<img src="img/arrow.svg" alt="icon: arrow" class="button-icon">
					</button>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col-6 -->
			<div class="col-xl-6">
				<div class="card card-2 mb-4">
					<h3 class="card-title text-light">
								<?php
									echo $vars['second-card__title'];
								?>
					</h3>
					<p class="card-text text-light">
								<?php
									echo $vars['second-card__subtitle'];
								?>
					</p>
					<button class="button">
						<span class="button-text">View all</span>
						<img src="img/arrow.svg" alt="icon: arrow" class="button-icon">
					</button>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col-6 -->
			<div class="col-xl-9 col-lg-6 mb-4">
				<div class="card card-3">
					<span class="label">Bestseller</span>
					<h3 class="card-title large">
								<?php
									echo $vars['third-card__title'];
								?>
					</h3>
					<p class="card-text large">
								<?php
									echo $vars['third-card__subtitle'];
								?>
					</p>
					<button class="button add-to-cart" data-id="002">
						<span class="button-price">$59</span>
						<span class="button-text">Shop now</span>
					</button>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col-9 -->
			<div class="col-xl-3 col-lg-6">
				<div class="card card-4">
					<h3 class="card-title text-light mw-160">
								<?php
									echo $vars['fourth-card__title'];
								?>
					</h3>
					<p class="card-text text-light">
								<?php
									echo $vars['fourth-card__subtitle'];
								?>
					</p>
					<button class="button add-to-cart button-four" data-id="009">
						<span class="button-price">$19</span>
						<span class="button-text">Shop now</span>
					</button>
				</div>
				<!-- /.card -->
			</div>
			<!-- /.col-3 -->
		</div>
		<!-- /.row -->
		<div class="row align-items-center mb-4">
			<div class="col-9">
				<h2 class="section-title">New Arrival</h2>
			</div>
			<!-- /.col-9 -->
			<div class="col-3 d-flex justify-content-end">
				<a href="#" class="more">View All</a>
			</div>
			<!-- /.col-3 -->
		</div>
		<!-- /.row -->
		<div class="short-goods row">
			<div class="col-lg-3 col-sm-6">
				<div class="goods-card">
					<span class="label">New</span>
					<!-- /.label --><img src="img/image-119.jpg" alt="image: Hoodie" class="goods-image">
					<h3 class="goods-title">Embroidered Hoodie</h3>
					<!-- /.goods-title -->
					<p class="goods-description">Yellow/Lilac/Fuchsia/Orange</p>
					<!-- /.goods-description -->
					<!-- /.goods-price -->
					<button class="button goods-card-btn add-to-cart" data-id="012">
						<span class="button-price">$89</span>
					</button>
				</div>
				<!-- /.goods-card -->
			</div>
			<!-- /.col-3 -->
			<div class="col-lg-3 col-sm-6">
				<div class="goods-card">
					<span class="label">New</span>
					<!-- /.label --><img src="img/image-120.jpg" alt="image: Faded Beach Trousers" class="goods-image">
					<h3 class="goods-title">Faded Beach Trousers</h3>
					<!-- /.goods-title -->
					<p class="goods-description">Navy/Ochre/Black/Khaki</p>
					<!-- /.goods-description -->
					<button class="button goods-card-btn add-to-cart" data-id="011">
						<span class="button-price">$139</span>
					</button>
					<!-- /.goods-price -->
				</div>
				<!-- /.goods-card -->
			</div>
			<!-- /.col-3 -->
			<div class="col-lg-3 col-sm-6">
				<div class="goods-card">
					<span class="label">New</span>
					<!-- /.label --><img src="img/image-121.jpg" alt="image: Text T-Shirt" class="goods-image">
					<h3 class="goods-title">Text T-Shirt</h3>
					<!-- /.goods-title -->
					<p class="goods-description">White</p>
					<!-- /.goods-description -->
					<button class="button goods-card-btn add-to-cart" data-id="010">
						<span class="button-price">$59</span>
					</button>
					<!-- /.goods-price -->
				</div>
				<!-- /.goods-card -->
			</div>
			<!-- /.col-3 -->
			<div class="col-lg-3 col-sm-6">
				<div class="goods-card">
					<span class="label">New</span>
					<!-- /.label --><img src="img/image-122.jpg" alt="image: Striped Long Sleeve Shirt"
						class="goods-image">
					<h3 class="goods-title">Striped Long Sleeve Shirt</h3>
					<!-- /.goods-title -->
					<p class="goods-description">Red/Sky Blue</p>
					<!-- /.goods-description -->
					<button class="button goods-card-btn add-to-cart" data-id="001">
						<span class="button-price">$119</span>
					</button>
					<!-- /.goods-price -->
				</div>
				<!-- /.goods-card -->
			</div>
			<!-- /.col-3 -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.container -->
	<section class="long-goods">
		<div class="container">
			<div class="row align-items-center mb-4">
				<div class="col-12">
					<h2 class="section-title">Category</h2>
				</div>
				<!-- /.col-12 -->
			</div>
			<div class="row long-goods-list">
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-119.jpg" alt="image: Hoodie" class="goods-image">
						<h3 class="goods-title">Embroidered Hoodie</h3>
						<!-- /.goods-title -->
						<p class="goods-description">Yellow/Lilac/Fuchsia/Orange</p>
						<!-- /.goods-description -->
						<!-- /.goods-price -->
						<button class="button goods-card-btn add-to-cart" data-id="007">
							<span class="button-price">$89</span>
						</button>
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-120.jpg" alt="image: Faded Beach Trousers"
							class="goods-image">
						<h3 class="goods-title">Faded Beach Trousers</h3>
						<!-- /.goods-title -->
						<p class="goods-description">Navy/Ochre/Black/Khaki</p>
						<!-- /.goods-description -->
						<button class="button goods-card-btn add-to-cart" data-id="007">
							<span class="button-price">$139</span>
						</button>
						<!-- /.goods-price -->
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-121.jpg" alt="image: Text T-Shirt" class="goods-image">
						<h3 class="goods-title">Text T-Shirt</h3>
						<!-- /.goods-title -->
						<p class="goods-description">White</p>
						<!-- /.goods-description -->
						<button class="button goods-card-btn add-to-cart" data-id="007">
							<span class="button-price">$59</span>
						</button>
						<!-- /.goods-price -->
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-122.jpg" alt="image: Striped Long Sleeve Shirt"
							class="goods-image">
						<h3 class="goods-title">Striped Long Sleeve Shirt</h3>
						<!-- /.goods-title -->
						<p class="goods-description">Red/Sky Blue</p>
						<!-- /.goods-description -->
						<button class="button goods-card-btn add-to-cart" data-id="001">
							<span class="button-price">$119</span>
						</button>
						<!-- /.goods-price -->
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-119.jpg" alt="image: Hoodie" class="goods-image">
						<h3 class="goods-title">Embroidered Hoodie</h3>
						<!-- /.goods-title -->
						<p class="goods-description">Yellow/Lilac/Fuchsia/Orange</p>
						<!-- /.goods-description -->
						<!-- /.goods-price -->
						<button class="button goods-card-btn add-to-cart" data-id="007">
							<span class="button-price">$89</span>
						</button>
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-120.jpg" alt="image: Faded Beach Trousers"
							class="goods-image">
						<h3 class="goods-title">Faded Beach Trousers</h3>
						<!-- /.goods-title -->
						<p class="goods-description">Navy/Ochre/Black/Khaki</p>
						<!-- /.goods-description -->
						<button class="button goods-card-btn add-to-cart" data-id="007">
							<span class="button-price">$139</span>
						</button>
						<!-- /.goods-price -->
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-121.jpg" alt="image: Text T-Shirt" class="goods-image">
						<h3 class="goods-title">Text T-Shirt</h3>
						<!-- /.goods-title -->
						<p class="goods-description">White</p>
						<!-- /.goods-description -->
						<button class="button goods-card-btn add-to-cart" data-id="007">
							<span class="button-price">$59</span>
						</button>
						<!-- /.goods-price -->
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-122.jpg" alt="image: Striped Long Sleeve Shirt"
							class="goods-image">
						<h3 class="goods-title">Striped Long Sleeve Shirt</h3>
						<!-- /.goods-title -->
						<p class="goods-description">Red/Sky Blue</p>
						<!-- /.goods-description -->
						<button class="button goods-card-btn add-to-cart" data-id="001">
							<span class="button-price">$119</span>
						</button>
						<!-- /.goods-price -->
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-119.jpg" alt="image: Hoodie" class="goods-image">
						<h3 class="goods-title">Embroidered Hoodie</h3>
						<!-- /.goods-title -->
						<p class="goods-description">Yellow/Lilac/Fuchsia/Orange</p>
						<!-- /.goods-description -->
						<!-- /.goods-price -->
						<button class="button goods-card-btn add-to-cart" data-id="007">
							<span class="button-price">$89</span>
						</button>
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-120.jpg" alt="image: Faded Beach Trousers"
							class="goods-image">
						<h3 class="goods-title">Faded Beach Trousers</h3>
						<!-- /.goods-title -->
						<p class="goods-description">Navy/Ochre/Black/Khaki</p>
						<!-- /.goods-description -->
						<button class="button goods-card-btn add-to-cart" data-id="007">
							<span class="button-price">$139</span>
						</button>
						<!-- /.goods-price -->
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-121.jpg" alt="image: Text T-Shirt" class="goods-image">
						<h3 class="goods-title">Text T-Shirt</h3>
						<!-- /.goods-title -->
						<p class="goods-description">White</p>
						<!-- /.goods-description -->
						<button class="button goods-card-btn add-to-cart" data-id="007">
							<span class="button-price">$59</span>
						</button>
						<!-- /.goods-price -->
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
				<div class="col-lg-3 col-sm-6">
					<div class="goods-card">
						<span class="label">New</span>
						<!-- /.label --><img src="img/image-122.jpg" alt="image: Striped Long Sleeve Shirt"
							class="goods-image">
						<h3 class="goods-title">Striped Long Sleeve Shirt</h3>
						<!-- /.goods-title -->
						<p class="goods-description">Red/Sky Blue</p>
						<!-- /.goods-description -->
						<button class="button goods-card-btn add-to-cart" data-id="001">
							<span class="button-price">$119</span>
						</button>
						<!-- /.goods-price -->
					</div>
					<!-- /.goods-card -->
				</div>
				<!-- /.col-3 -->
			</div>
		</div>

	</section>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xl-7 mb-4 mb-xl-0">
					<nav>
						<ul class="footer-menu d-sm-flex">
							<li class="footer-menu-item"><a href="#" class="footer-menu-link">Shop</a></li>
							<li class="footer-menu-item"><a href="#" class="footer-menu-link">About Us</a></li>
							<li class="footer-menu-item"><a href="#" class="footer-menu-link">Careers</a></li>
							<li class="footer-menu-item"><a href="#" class="footer-menu-link">FAQ </a></li>
							<li class="footer-menu-item"><a href="#" class="footer-menu-link">Blog</a></li>
							<li class="footer-menu-item"><a href="#" class="footer-menu-link">Contacts</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.col-7 -->
				<div class="col-lg-3 d-flex align-items-center">
					<span class="footer-text">Follow Us</span>
					<span class="footer-social d-inline-flex align-items-center">
						<a href="#" class="social-link">
							<img src="img/Facebook.svg" alt="Facebook">
						</a>
						<a href="#" class="social-link">
							<img src="img/Twitter.svg" alt="Twitter">
						</a>
						<a href="#" class="social-link">
							<img src="img/Instagram.svg" alt="Instagram">
						</a>
					</span>
				</div>
				<!-- /.col-3 -->
				<div class="col-xl-2 col-lg-3 d-flex justify-content-lg-end mt-4 mt-lg-0">
					<span class="footer-text">© 2019 Universal UI Kit</span>
				</div>
				<!-- /.col-2 -->
			</div>
			<!-- /.row -->
			<hr class="footer-line mt-4 mb-4">
			<div class="row justify-content-between">
				<div class="col-lg-4 col-sm-9">
					<img class="payment-logo" src="img/visa.png" alt="visa logo">
					<img class="payment-logo" src="img/master-card.png" alt="master card logo">

				</div>
				<!-- /.col-4 -->
				<div class="col-lg-2 col-sm-1 d-flex justify-content-end">
					<a href="#body" class="scroll-link top-link d-flex align-items-center">
						<span class="top-link-text">Top</span>
						<img src="img/top.svg" alt="icon: arrow top">
					</a>
				</div>
				<!-- /.col-2 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->
	</footer>
	<div class="overlay" id="modal-cart">
		<div class="modal">
			<header class="modal-header">
				<h2 class="modal-title">Cart</h2>
				<button class="modal-close">x</button>
			</header>
			<table class="cart-table">
				<colgroup>
					<col class="col-goods">
					<col class="col-price">
					<col class="col-minus">
					<col class="col-qty">
					<col class="col-plus">
					<col class="col-total-price">
					<col class="col-delete">
				</colgroup>
				<thead>
					<tr>
						<th>Good(s)</th>
						<th>Price</th>
						<th colspan="3">Qty.</th>
						<th colspan="2">Total</th>
					</tr>
				</thead>
				<tbody class="cart-table__goods">
				</tbody>
				<tfoot>
					<tr>
						
						
					</tr>

					</tfoot>
			</table>
			<form class="modal-form" action="">
				<input class="modal-input" type="text" placeholder="Имя" name="nameCustomer">
				<input class="modal-input" type="text" placeholder="Телефон" name="phoneCustomer">
				<a href="./pay.html">
					<button class="button cart-buy" type="submit">
					<span class="button-text">Checkout</span>
					</button>
				</a>
				
			</form>
		</div>
	</div>
		
	<script src="js/search.js"></script>
	<script src="js/cart.js"></script>
	<script src="js/getGoods.js"></script>
	
</body>
</html>
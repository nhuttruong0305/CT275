<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="../view/css/style.css" type="text/css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<header class="container mt-4">
		<div class="row align-items-center">
			<div class="col-md-3 my-3"><img style="width: 100%;" src="../view/img/LUXENUS FURNITURE.png" alt=""></div>
			<div class="col-md-5 my-3">
				<form id="form_search" action="" method="get" class="d-flex justify-content-center align-items-center">
					<input class="d-inline-block" type="text" id="input_product" placeholder="Nhập từ khóa tìm kiếm ...">
					<button id="search_btn" type="submit" class="btn"><i class="fas fa-search"></i></button>
				</form>
			</div>
			<div id="account_cart" class="col-md-4 d-flex my-3 justify-content-center">
				<a class="mx-3" href="../controller/index.php?action=register">ĐĂNG KÝ</a>|
				<a class="mx-3" href="../controller/index.php?action=login">ĐĂNG NHẬP</a>|
				<a class="mx-3" href="" id="cart">
					<i class="fas fa-dolly" style="color: rgb(247,148,29);"></i>
					<span id="count_product">2</span>
				</a>
			</div>
		</div>
		<div class="row mt-4">			
			<nav class="navbar navbar-expand-lg navbar-light col-md-8">
				<button id="btn_toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item active mx-2">
							<a class="nav-link font-weight-bold" href="#">TRANG CHỦ <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item dropdown mx-2">
							<a id="product_portfolio" class="nav-link dropdown-toggle font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
								SẢN PHẨM
							</a>
							<div class="dropdown-menu" id="dropdown_container">
								<a class="dropdown-item d-flex justify-content-between align-items-center" href="#" style="border-top: 1px solid rgb(247,148,29);" id="parent_product">
										Sofa <i class="fas fa-caret-right"></i>
									<ul id="child_product">
										<li>Sofa giường</li>
										<li>Sofa chiếu</li>
										<li>Sofa</li>
									</ul>
								</a>
								<a class="dropdown-item" href="#">Ghế</a>
								<a class="dropdown-item" href="#">Trang trí</a>
								<a class="dropdown-item" href="#">Kệ sách</a>
								<a class="dropdown-item" href="#">Bàn</a>
								<a class="dropdown-item" href="#">Tủ quần áo</a>
							</div>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link font-weight-bold" href="../controller/index.php?action=about">GIỚI THIỆU</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link font-weight-bold" href="../controller/index.php?action=news">TIN TỨC</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link font-weight-bold" href="../controller/index.php?action=contact">LIÊN HỆ</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="col-md-4 d-flex align-items-center justify-content-end" id="top_right">
				<span><i class="fas fa-headphones fa-lg" style="color: orange;"></i><span class="font-weight-bold" id="hotline">Hotline: <span id="phone_number">1900 6789</span></span></span>
			</div>
		</div>
	</header>

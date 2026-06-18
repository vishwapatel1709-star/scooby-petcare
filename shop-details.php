<?php
include("includes/config.php");
$id = $_GET["id"];
$ret = mysqli_query($con, "select * from products where id='$id'");
$row = mysqli_fetch_all($ret, MYSQLI_ASSOC);
// var_dump($row);
// exit;
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/shop-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jan 2024 09:23:42 GMT -->
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Scooby - Petcare & Pet Shop HTML Template</title>
<link rel="icon" href="assets/images/sm-logo.svg" type="image/gif" sizes="20x20">

<link rel="stylesheet" href="assets/css/all.css">
<link rel="stylesheet" href="assets/css/animate.css">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/bootstrap-icons.css">

<link rel="stylesheet" href="assets/css/jquery-ui.css">
<link rel="stylesheet" href="assets/css/aos.css">

<link rel="stylesheet" href="assets/css/swiper-bundle.css">

<link rel="stylesheet" href="assets/css/nice-select.css">

<link rel="stylesheet" href="assets/css/magnific-popup.css">

<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

<link rel="stylesheet" href="assets/css/odometer.css">

<link rel="stylesheet" href="assets/css/datepicker.min.css">

<link rel="stylesheet" href="assets/css/uiicss.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>



<header class="header-area style-1">
<div class="container-fluid d-flex justify-content-between align-items-center">
<div class="header-logo">
<a href="index-2.php"><img alt="image" class="img-fluid" src="assets/images/header1-logo.svg"></a>
</div>
<div class="main-menu">
<div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
<div class="mobile-logo-wrap">
<a href="index-2.php"><img alt="image" src="assets/images/header1-logo.svg"></a>
</div>
<div class="menu-close-btn">
<i class="bi bi-x-lg text-white"></i>
</div>
</div>
<ul class="menu-list">
<li class="menu-item-has-children">
<a href="#" class="drop-down">Home</a><i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">

<li><a href="index3.php">Home</a></li>
</ul>
</li>
<li><a href="about.php">About</a></li>

<li class="menu-item-has-children">
<a href="#" class="drop-down">Pages</a><i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li><a href="3col-gallery.php">Gallery</a></li>
<li><a href="error.php">Error</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="sign-up.php">Sign Up</a></li>
</ul>
</li>
<li class="menu-item-has-children active">
<a href="#">Shop</a><i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li><a href="shop.php">Shop</a></li>
<li class="active"><a href="shop-details.php">Shop Details</a></li>
<li><a href="cart.php">Cart</a></li>
<li><a href="check-out.php">Check Out</a></li>
</ul>
</li>
<li class="menu-item-has-children">
<a href="#">Blog</a><i class="bi bi-plus dropdown-icon"></i>
<ul class="sub-menu">
<li><a href="blog-grid.php">Blog Grid</a></li>

<li><a href="blog-standard.php">Blog Standard</a></li>
<li><a href="blog-details.php">Blog Details</a></li>
</ul>
</li>
<li><a href="contact.php">Contact</a></li>
</ul>
<div class="for-mobile-menu d-lg-none d-block">
<div class="hotline mb-5">
<div class="hotline-info">
<span>Click To Call</span>
<h6><a href="tel:+1(541)754-3010">+1 (541) 754-3010</a></h6>
</div>
</div>
<ul class="social-link mb-5">
<li><a href>
<svg width="14" height="13" viewBox="0 0 14 13" xmlns="http://www.w3.org/2000/svg">
<path d="M12.4147 1.51371C11.0037 0.302997 8.92573 0.534835 7.61736 1.87434L7.12993 2.38954L6.61684 1.87434C5.33413 0.534835 3.23047 0.302997 1.81948 1.51371C0.203258 2.90473 0.126295 5.37767 1.56294 6.87174L6.53988 12.0237C6.84773 12.3586 7.38647 12.3586 7.69433 12.0237L12.6713 6.87174C14.1079 5.37767 14.0309 2.90473 12.4147 1.51371Z" />
</svg>
</a></li>
<li><a href>
<svg width="16" height="13" viewBox="0 0 16 13" xmlns="http://www.w3.org/2000/svg">
<path d="M15.6365 5.46266C15.6365 5.12721 15.3541 4.84336 15.0202 4.84336H13.274L10.5262 1.07601C10.2694 0.688956 9.75576 0.611544 9.39624 0.895386C9.01104 1.15342 8.934 1.6695 9.21648 2.03075L11.2452 4.84336H5.21036L7.2391 2.03075C7.52158 1.6695 7.44454 1.15342 7.05934 0.895386C6.69982 0.611544 6.18621 0.688956 5.92941 1.07601L3.18163 4.84336H1.46105C1.10153 4.84336 0.844727 5.12721 0.844727 5.46266V5.87552C0.844727 6.23677 1.10153 6.49481 1.46105 6.49481H1.66649L2.33418 11.2169C2.41122 11.8362 2.92482 12.2749 3.54115 12.2749H12.9144C13.5308 12.2749 14.0444 11.8362 14.1214 11.2169L14.8148 6.49481H15.0202C15.3541 6.49481 15.6365 6.23677 15.6365 5.87552V5.46266ZM8.85696 10.0041C8.85696 10.3654 8.57447 10.6234 8.24063 10.6234C7.88111 10.6234 7.6243 10.3654 7.6243 10.0041V7.1141C7.6243 6.77865 7.88111 6.49481 8.24063 6.49481C8.57447 6.49481 8.85696 6.77865 8.85696 7.1141V10.0041ZM11.7331 10.0041C11.7331 10.3654 11.4507 10.6234 11.1168 10.6234C10.7573 10.6234 10.5005 10.3654 10.5005 10.0041V7.1141C10.5005 6.77865 10.7573 6.49481 11.1168 6.49481C11.4507 6.49481 11.7331 6.77865 11.7331 7.1141V10.0041ZM5.98077 10.0041C5.98077 10.3654 5.69829 10.6234 5.36445 10.6234C5.00492 10.6234 4.74812 10.3654 4.74812 10.0041V7.1141C4.74812 6.77865 5.00492 6.49481 5.36445 6.49481C5.69829 6.49481 5.98077 6.77865 5.98077 7.1141V10.0041Z" />
</svg>
</a></li>
<li><a href>
<svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1585_341)">
<path d="M6.98716 0.938832C6.28609 1.04711 5.65949 1.38227 5.169 1.90563C4.62972 2.48055 4.3498 3.14571 4.31128 3.94235C4.25735 5.0561 4.80177 6.12086 5.74167 6.73703C6.20391 7.04125 6.64818 7.19594 7.18747 7.23977C8.18643 7.31711 9.03901 7.00258 9.72724 6.29875C10.2742 5.74188 10.5516 5.13344 10.6183 4.35743C10.7108 3.32102 10.3205 2.3568 9.54234 1.68133C9.03901 1.24821 8.57676 1.03164 7.93733 0.938832C7.62916 0.895004 7.26964 0.892426 6.98716 0.938832Z" />
<path d="M4.65531 7.29655C3.49456 7.4203 2.68821 8.25561 2.31327 9.7303C2.06418 10.7126 1.99998 11.8933 2.15919 12.5405C2.29016 13.0587 2.71902 13.5846 3.21465 13.8373C3.43807 13.9507 3.75907 14.0435 4.02871 14.0744C4.18793 14.0951 5.40004 14.1002 7.71896 14.0951L11.1729 14.0873L11.3912 14.0255C12.2027 13.8037 12.7574 13.2572 12.9603 12.4889C13.0656 12.0893 13.0527 11.1354 12.9295 10.3826C12.6598 8.70678 11.9767 7.70131 10.8956 7.38678C10.6491 7.31459 10.2074 7.26045 10.0764 7.28623C9.95057 7.30944 9.77594 7.40225 9.38047 7.65749C8.95931 7.93077 8.90025 7.9617 8.58438 8.0803C8.21972 8.21694 7.91926 8.27624 7.56745 8.27624C7.20792 8.27624 6.93058 8.22467 6.56592 8.09577C6.2218 7.97202 6.20639 7.96428 5.66711 7.62139C5.38463 7.44092 5.17405 7.32491 5.09187 7.3017C4.94806 7.26561 4.94806 7.26561 4.65531 7.29655Z" />
</g>
</svg>
</a></li>
</ul>
<form class="mobile-menu-form">
<div class="input-with-btn d-flex flex-column">
<input type="text" placeholder="Search here...">
<button class="primary-btn1" type="submit">Search</button>
</div>
</form>
</div>
</div>
<div class="nav-right d-flex jsutify-content-end align-items-center">
<ul>
<li class="search-btn"><a>
<svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
<path d="M13.8914 12.3212L11.3164 9.74312C11.1877 9.63999 11.0332 9.56265 10.8787 9.56265H10.4667C11.1619 8.6603 11.5997 7.52593 11.5997 6.26265C11.5997 3.32358 9.1792 0.900146 6.2437 0.900146C3.28245 0.900146 0.887695 3.32358 0.887695 6.26265C0.887695 9.22749 3.28245 11.6251 6.2437 11.6251C7.4797 11.6251 8.6127 11.2126 9.5397 10.4908V10.9291C9.5397 11.0837 9.5912 11.2384 9.71995 11.3673L12.2692 13.9197C12.5267 14.1775 12.9129 14.1775 13.1447 13.9197L13.8657 13.1978C14.1232 12.9658 14.1232 12.5791 13.8914 12.3212ZM6.2437 9.56265C4.41545 9.56265 2.9477 8.09312 2.9477 6.26265C2.9477 4.45796 4.41545 2.96265 6.2437 2.96265C8.0462 2.96265 9.5397 4.45796 9.5397 6.26265C9.5397 8.09312 8.0462 9.56265 6.2437 9.56265Z" />
</svg>
</a>
<form class="nav__search-form">
<input type="text" placeholder="Search Products" id="search" autocomplete="off">
<button type="submit">
<svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
<path d="M13.8914 12.3212L11.3164 9.74312C11.1877 9.63999 11.0332 9.56265 10.8787 9.56265H10.4667C11.1619 8.6603 11.5997 7.52593 11.5997 6.26265C11.5997 3.32358 9.1792 0.900146 6.2437 0.900146C3.28245 0.900146 0.887695 3.32358 0.887695 6.26265C0.887695 9.22749 3.28245 11.6251 6.2437 11.6251C7.4797 11.6251 8.6127 11.2126 9.5397 10.4908V10.9291C9.5397 11.0837 9.5912 11.2384 9.71995 11.3673L12.2692 13.9197C12.5267 14.1775 12.9129 14.1775 13.1447 13.9197L13.8657 13.1978C14.1232 12.9658 14.1232 12.5791 13.8914 12.3212ZM6.2437 9.56265C4.41545 9.56265 2.9477 8.09312 2.9477 6.26265C2.9477 4.45796 4.41545 2.96265 6.2437 2.96265C8.0462 2.96265 9.5397 4.45796 9.5397 6.26265C9.5397 8.09312 8.0462 9.56265 6.2437 9.56265Z" />
</svg>
</button>
</form>
</li>

<li><a href="cart.php">
<svg width="16" height="13" viewBox="0 0 16 13" xmlns="http://www.w3.org/2000/svg">
<path d="M15.6365 5.46266C15.6365 5.12721 15.3541 4.84336 15.0202 4.84336H13.274L10.5262 1.07601C10.2694 0.688956 9.75576 0.611544 9.39624 0.895386C9.01104 1.15342 8.934 1.6695 9.21648 2.03075L11.2452 4.84336H5.21036L7.2391 2.03075C7.52158 1.6695 7.44454 1.15342 7.05934 0.895386C6.69982 0.611544 6.18621 0.688956 5.92941 1.07601L3.18163 4.84336H1.46105C1.10153 4.84336 0.844727 5.12721 0.844727 5.46266V5.87552C0.844727 6.23677 1.10153 6.49481 1.46105 6.49481H1.66649L2.33418 11.2169C2.41122 11.8362 2.92482 12.2749 3.54115 12.2749H12.9144C13.5308 12.2749 14.0444 11.8362 14.1214 11.2169L14.8148 6.49481H15.0202C15.3541 6.49481 15.6365 6.23677 15.6365 5.87552V5.46266ZM8.85696 10.0041C8.85696 10.3654 8.57447 10.6234 8.24063 10.6234C7.88111 10.6234 7.6243 10.3654 7.6243 10.0041V7.1141C7.6243 6.77865 7.88111 6.49481 8.24063 6.49481C8.57447 6.49481 8.85696 6.77865 8.85696 7.1141V10.0041ZM11.7331 10.0041C11.7331 10.3654 11.4507 10.6234 11.1168 10.6234C10.7573 10.6234 10.5005 10.3654 10.5005 10.0041V7.1141C10.5005 6.77865 10.7573 6.49481 11.1168 6.49481C11.4507 6.49481 11.7331 6.77865 11.7331 7.1141V10.0041ZM5.98077 10.0041C5.98077 10.3654 5.69829 10.6234 5.36445 10.6234C5.00492 10.6234 4.74812 10.3654 4.74812 10.0041V7.1141C4.74812 6.77865 5.00492 6.49481 5.36445 6.49481C5.69829 6.49481 5.98077 6.77865 5.98077 7.1141V10.0041Z" />
</svg>
</a></li>
<li><a href="login.php">
<svg width="15" height="15" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_1585_341)">
<path d="M6.98716 0.938832C6.28609 1.04711 5.65949 1.38227 5.169 1.90563C4.62972 2.48055 4.3498 3.14571 4.31128 3.94235C4.25735 5.0561 4.80177 6.12086 5.74167 6.73703C6.20391 7.04125 6.64818 7.19594 7.18747 7.23977C8.18643 7.31711 9.03901 7.00258 9.72724 6.29875C10.2742 5.74188 10.5516 5.13344 10.6183 4.35743C10.7108 3.32102 10.3205 2.3568 9.54234 1.68133C9.03901 1.24821 8.57676 1.03164 7.93733 0.938832C7.62916 0.895004 7.26964 0.892426 6.98716 0.938832Z" />
<path d="M4.65531 7.29655C3.49456 7.4203 2.68821 8.25561 2.31327 9.7303C2.06418 10.7126 1.99998 11.8933 2.15919 12.5405C2.29016 13.0587 2.71902 13.5846 3.21465 13.8373C3.43807 13.9507 3.75907 14.0435 4.02871 14.0744C4.18793 14.0951 5.40004 14.1002 7.71896 14.0951L11.1729 14.0873L11.3912 14.0255C12.2027 13.8037 12.7574 13.2572 12.9603 12.4889C13.0656 12.0893 13.0527 11.1354 12.9295 10.3826C12.6598 8.70678 11.9767 7.70131 10.8956 7.38678C10.6491 7.31459 10.2074 7.26045 10.0764 7.28623C9.95057 7.30944 9.77594 7.40225 9.38047 7.65749C8.95931 7.93077 8.90025 7.9617 8.58438 8.0803C8.21972 8.21694 7.91926 8.27624 7.56745 8.27624C7.20792 8.27624 6.93058 8.22467 6.56592 8.09577C6.2218 7.97202 6.20639 7.96428 5.66711 7.62139C5.38463 7.44092 5.17405 7.32491 5.09187 7.3017C4.94806 7.26561 4.94806 7.26561 4.65531 7.29655Z" />
</g>
</svg>
</a></li>
</ul>
<div class="sidebar-button mobile-menu-btn ">
<i class="bi bi-list"></i>
</div>
</div>
</div>
</header>


<div class="inner-page-banner">
<div class="breadcrumb-vec-btm">
<img class="img-fluid" src="assets/images/bg/inner-banner-btm-vec.png" alt>
</div>
<div class="container">
<div class="row justify-content-center align-items-center text-center">
<div class="col-lg-6 align-items-center">
<div class="banner-content">
<h1>Shop Details</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index-2.php">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Shop Details</li>
</ol>
</nav>
</div>
</div>
<div class="col-lg-6">
<div class="banner-img d-lg-block d-none">
<div class="banner-img-bg">
<img class="img-fluid" src="assets/images/bg/inner-banner-vec.png" alt>
</div>
<img class="img-fluid" src="assets/images/bg/inner-banner-img.png" alt>
</div>
</div>
</div>
</div>
</div>


<div class="shop-details-page pt-120 mb-120">
<div class="container">
<div class="row g-lg-4 gy-5 mb-120">
<div class="col-lg-7">
<div class="tab-content tab-content1" id="v-pills-tabContent">
<div class="tab-pane fade active show" id="v-pills-img1" role="tabpanel" aria-labelledby="v-pills-img1-tab">
<img class="img-fluid" src=<?php echo IMAGEURL.$row[0]['productImage1']?> alt>
</div>
<div class="tab-pane fade" id="v-pills-img2" role="tabpanel" aria-labelledby="v-pills-img2-tab">
<img class="img-fluid" src="assets/images/bg/shop-big-02.png" alt>
</div>
<div class="tab-pane fade" id="v-pills-img3" role="tabpanel" aria-labelledby="v-pills-img3-tab">
<img class="img-fluid" src="assets/images/bg/shop-big-03.png" alt>
</div>
<div class="tab-pane fade" id="v-pills-img4" role="tabpanel" aria-labelledby="v-pills-img4-tab">
<img class="img-fluid" src="assets/images/bg/shop-big-04.png" alt>
</div>
<div class="tab-pane fade" id="v-pills-img5" role="tabpanel" aria-labelledby="v-pills-img5-tab">
<img class="img-fluid" src="assets/images/bg/shop-big-05.png" alt>
</div>
</div>
<div class="nav nav1 nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
<button class="nav-link active" id="v-pills-img1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img1" type="button" role="tab" aria-controls="v-pills-img1" aria-selected="true">
<img src="assets/images/bg/shop-sm-01.png" alt>
</button>
<button class="nav-link" id="v-pills-img2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img2" type="button" role="tab" aria-controls="v-pills-img2" aria-selected="false">
<img src="assets/images/bg/shop-sm-02.png" alt>
</button>
<button class="nav-link" id="v-pills-img3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img3" type="button" role="tab" aria-controls="v-pills-img3" aria-selected="false">
<img src="assets/images/bg/shop-sm-03.png" alt>
</button>
<button class="nav-link" id="v-pills-img4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img4" type="button" role="tab" aria-controls="v-pills-img4" aria-selected="false">
<img src="assets/images/bg/shop-sm-04.png" alt>
</button>
<button class="nav-link" id="v-pills-img5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-img5" type="button" role="tab" aria-controls="v-pills-img5" aria-selected="false">
<img src="assets/images/bg/shop-sm-05.png" alt>
</button>
</div>
</div>
<div class="col-lg-5">
<div class="shop-details-content">
<h3><?php echo $row[0]['productName']?></h3>
<ul class="shopuct-review2 d-flex flex-row align-items-center mb-25">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><a href="#" class="review-no">(1 customer review)</a></li>
</ul>
<div class="model-number">
<span>SKU:9852410</span>
</div>
<div class="price-tag">
<h4>₹<?php echo $row[0]['productPrice']?><del>₹<?php echo $row[0]['productPriceBeforeDiscount']?></del></h4>
</div>
<p>Unrivaled in quality and crafted with a legacy of care, our offerings embody the pinnacle of pet perfection. </p>
<div class="shop-quantity d-flex align-items-center justify-content-start mb-20">
<div class="quantity d-flex align-items-center">
<div class="quantity-nav nice-number d-flex align-items-center">
<input type="number" value="1" min="1">
</div>
</div>
<!-- <a href="cart.php?id=`$id`" class="primary-btn3">Add to cart</a> -->
<a href="cart.php?id=<?php echo $id; ?>" class="primary-btn3">Add to cart</a>

</div>
<div class="buy-now-btn">
<a href="cart.php">Buy Now</a>
</div>
<div class="compare-wishlist-area">
<ul>
<li><a href="#"><span><img src="assets/images/icon/compare.svg" alt></span> Compare</a></li>
<li><a href="#"><span><img src="assets/images/icon/Icon-favorites2.svg" alt></span> Add to wishlist</a></li>
</ul>
</div>

</div>
</div>
</div>
<div class="row mb-120">
<div class="col-lg-12">
<div class="nav nav2 nav  nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
<button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="false">Description</button>
<button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true">Excessive Info</button>
<button class="nav-link" id="v-pills-common-tab" data-bs-toggle="pill" data-bs-target="#v-pills-common" type="button" role="tab" aria-controls="v-pills-common" aria-selected="true">Review</button>
</div>
<div class="tab-content tab-content2" id="v-pills-tabContent2">
<div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
<div class="description">
<p class="para-2 mb-3">This is a type of food that is specifically formulated and intended for consumption by pets. It is usually sold in the form of dry kibble or wet cans, and is designed to meet the nutritional needs of a variety of different types of pets, including dogs, cats, and small animals like guinea pigs and rabbits.</p>
<p class="para-2 mb-3">This food may help from a variety of different ingredients, including meat, grains, vegetables, and fortified vitamins and minerals. Some pet food is formulated for specific life stages, such as puppy or senior, and may contain higher levels of certain nutrients to support the needs of pets at those stages of life.</p>
<p class="para-2 mb-0">At the end, also formulated for pets with special dietary needs, such as those with food allergies or sensitivities.</p>
</div>
</div>
<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
<div class="addithonal-information">
<table class="table total-table2">
<tbody>
<tr>
<td>Protein</td>
<td>25%, to build and repair tissues, produce enzymes, and maintain healthy organs.</td>
</tr>
<tr>
<td>Fats</td>
<td>0.5%, They also help keep the skin and coat healthy.</td>
</tr>
<tr>
<td>Carbohydrates</td>
<td>10%, provide energy and help pets maintain healthy weight and keep good the digestive system.</td>
</tr>
<tr>
<td>Minerals</td>
<td>20%,Help building strong bones, maintaining healthy muscles, and regulating the body's fluid balance.</td>
</tr>
<tr>
<td>Vitamins</td>
<td>15.5%, Essential for a variety of functions in the body, including the immune system, metabolism, and growth.</td>
</tr>
<tr>
<td>Animale</td>
<td> For Dog, Cat.</td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="tab-pane fade" id="v-pills-common" role="tabpanel" aria-labelledby="v-pills-common-tab">
<div class="reviews-area">
<div class="row g-lg-4 gy-5">
<div class="col-lg-8">
<div class="number-of-review">
<h3>Review (02) :</h3>
</div>
<div class="review-list-area">
<ul class="review-list">
<li>
<div class="single-review d-flex justify-content-between flex-md-nowrap flex-wrap">
<div class="review-image">
<img src="assets/images/bg/review-img-1.png" alt="image">
</div>
<div class="review-content">
<div class="c-header d-flex align-items-center">
<div class="review-meta">
<h5 class="mb-0"><a href="#">Rocky Mike ,</a></h5>
<div class="c-date">06 july,2022</div>
</div>
<div class="replay-btn">
<a href="#"><i class="bi bi-reply"></i>Reply</a>
</div>
</div>
<ul class="product-review">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<div class="c-body">
<p>Our pets adore the premium quality and taste of Pedigree products, and as pet parents, we appreciate the brand's commitment to nutrition and well-being. Thanks to Pedigree, our pets thrive with happiness and health. </p>
</div>
</div>
</div>
</li>
<li>
<div class="single-review d-flex justify-content-between flex-md-nowrap flex-wrap">
<div class="review-image">
<img src="assets/images/bg/review-img-3.png" alt="image">
</div>
<div class="review-content">
<div class="c-header d-flex align-items-center">
<div class="review-meta">
<h5 class="mb-0"><a href="#">Rony Jhon ,</a></h5>
<div class="c-date">07 july,2022</div>
</div>
<div class="replay-btn">
<a href="#"><i class="bi bi-reply"></i>Reply</a>
</div>
</div>
<ul class="product-review">
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<div class="c-body">
<p>"Pedigree has been a staple in our pet care routine, and we couldn't be happier. The consistent quality and nutritional value of their products have kept our furry family members healthy and happy. Trusted by generations, Pedigree remains our go-to brand for ensuring our pets receive the best care they deserve." </p>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
<div class="col-lg-4">
<div class="review-form">
<div class="number-of-review">
<h3>Leave A Reply</h3>
</div>
<form method="POST">
<div class="row">
<div class="col-lg-12">
<div class="form-inner mb-20">
<input type="text" placeholder="Name" required>
</div>
</div>
<div class="col-lg-12">
<div class="form-inner mb-20">
<input type="email" placeholder="Email*" pattern="(^[^\s@]+@[^\s@]+\.[^\s@]+$)" required>
</div>
</div>
<div class="col-lg-12">
<div class="form-inner mb-10">
<textarea placeholder="Message..."  maxlength="200" required></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="form-inner2 mb-30">
<div class="review-rate-area">
<p>Your Rating</p>
<div class="rate">
<input type="radio" id="star5" name="rate" value="5">
<label for="star5" title="text">5 stars</label>
<input type="radio" id="star4" name="rate" value="4">
<label for="star4" title="text">4 stars</label>
<input type="radio" id="star3" name="rate" value="3">
<label for="star3" title="text">3 stars</label>
<input type="radio" id="star2" name="rate" value="2">
<label for="star2" title="text">2 stars</label>
<input type="radio" id="star1" name="rate" value="1">
<label for="star1" title="text">1 star</label>
</div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="form-inner two">
<button class="primary-btn3 btn-lg" type="submit">Post Comment</button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12 d-flex flex-wrap align-items-center justify-content-md-between justify-content-start gap-2 mb-60">
<div class="inner-section-title">
<h2>Other Products</h2>
</div>
<div class="swiper-btn-wrap d-flex align-items-center">
<div class="slider-btn prev-btn-12">
<i class="bi bi-arrow-left"></i>
</div>
<div class="slider-btn next-btn-12">
<i class="bi bi-arrow-right"></i>
</div>
</div>
</div>
</div>
<div class="row">
<div class="swiper essential-items-slider">
<div class="swiper-wrapper">
<div class="swiper-slide">
<div class="collection-card">
<div class="offer-card">
<span>Offer</span>
</div>
<div class="collection-img">
<img class="img-gluid" src="assets/images/bg/category/h3-collection-01.png" alt>
<div class="view-dt-btn">
<div class="plus-icon">
<i class="bi bi-plus"></i>
</div>
<a href="shop-details.php">View Details</a>
</div>
<ul class="cart-icon-list">
<li><a href="cart.php"><img src="assets/images/icon/Icon-cart3.svg" alt></a></li>
<li><a href="#"><img src="assets/images/icon/Icon-favorites3.svg" alt></a></li>
</ul>
</div>
<div class="collection-content text-center">
<h4><a href="shop-details.php">Whiskas Cat Food Core Tuna</a></h4>
<div class="price">
<h6>Rs.25.00</h6>
<del>Rs.30.00</del>
</div>
<div class="review">
<ul>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<span>(50)</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="collection-card">
<div class="collection-img">
<img class="img-gluid" src="assets/images/bg/category/h3-collection-02.png" alt>
<div class="view-dt-btn">
<div class="plus-icon">
<i class="bi bi-plus"></i>
</div>
<a href="shop-details.php">View Details</a>
</div>
<ul class="cart-icon-list">
<li><a href="cart.php"><img src="assets/images/icon/Icon-cart3.svg" alt></a></li>
<li><a href="#"><img src="assets/images/icon/Icon-favorites3.svg" alt></a></li>
</ul>
</div>
<div class="collection-content text-center">
<h4><a href="shop-details.php">Friskies Kitten Discoveries.</a></h4>
<div class="price">
<h6>₹390.00</h6>
<del>₹290.00</del>
</div>
<div class="review">
<ul>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<span>(50)</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="collection-card">
<div class="offer-card sale">
<span>Hot Sale</span>
</div>
<div class="collection-img">
<img class="img-gluid" src="assets/images/bg/category/h3-collection-03.png" alt>
<div class="view-dt-btn">
<div class="plus-icon">
<i class="bi bi-plus"></i>
</div>
<a href="shop-details.php">View Details</a>
</div>
<ul class="cart-icon-list">
<li><a href="cart.php"><img src="assets/images/icon/Icon-cart3.svg" alt></a></li>
<li><a href="#"><img src="assets/images/icon/Icon-favorites3.svg" alt></a></li>
</ul>
</div>
<div class="collection-content text-center">
<h4><a href="shop-details.php">Joules Cat Cotton House.</a></h4>
<div class="price">
<h6>₹150.00</h6>
<del>₹200.00</del>
</div>
<div class="review">
<ul>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<span>(50)</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="collection-card">
<div class="collection-img">
<img class="img-gluid" src="assets/images/bg/category/h3-collection-04.png" alt>
<div class="view-dt-btn">
<div class="plus-icon">
<i class="bi bi-plus"></i>
</div>
<a href="shop-details.php">View Details</a>
</div>
<ul class="cart-icon-list">
<li><a href="cart.php"><img src="assets/images/icon/Icon-cart3.svg" alt></a></li>
<li><a href="#"><img src="assets/images/icon/Icon-favorites3.svg" alt></a></li>
</ul>
</div>
<div class="collection-content text-center">
<h4><a href="shop-details.php">Natural Dog Fresh Food.</a></h4>
<div class="price">
<h6>₹180.00</h6>
<del>₹300.00</del>
</div>
<div class="review">
<ul>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<span>(50)</span>
</div>
</div>
</div>
</div>
<div class="swiper-slide">
<div class="collection-card">
<div class="offer-card sold-out">
<span>Sold Out</span>
</div>
<div class="collection-img">
<img class="img-gluid" src="assets/images/bg/category/h3-collection-07.png" alt>
<div class="view-dt-btn">
<div class="plus-icon">
<i class="bi bi-plus"></i>
</div>
<a href="shop-details.php">View Details</a>
</div>
<ul class="cart-icon-list">
<li><a href="cart.php"><img src="assets/images/icon/Icon-cart3.svg" alt></a></li>
<li><a href="#"><img src="assets/images/icon/Icon-favorites3.svg" alt></a></li>
</ul>
</div>
<div class="collection-content text-center">
<h4><a href="shop-details.php">Rooibos Pet Food Supple</a></h4>
<div class="price">
<h6>₹750.00</h6>
<del>₹800.00</del>
</div>
<div class="review">
<ul>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
<li><i class="bi bi-star-fill"></i></li>
</ul>
<span>(50)</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>




<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jquery.timepicker.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/jquery.nice-select.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/morphext.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.marquee.min.js"></script>
<script src="assets/js/viewport.jquery.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/jquery.nice-number.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from demo.egenslab.com/html/scooby/preview/shop-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jan 2024 09:23:45 GMT -->
</html>
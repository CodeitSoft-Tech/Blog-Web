<?php
ob_start();
session_start();
include("admin/inc/config.php");
include("admin/inc/functions.php");
include("admin/inc/CSRF_Protect.php");
$csrf = new CSRF_Protect();

require 'assets/mail/PHPMailer.php';
require 'assets/mail/Exception.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();

$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';

// Getting all language variables into array as global variable
$i=1;
$statement = $pdo->prepare("SELECT * FROM tbl_language");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	define('LANG_VALUE_'.$i,$row['lang_value']);
	$i++;
}

$statement = $pdo->prepare("SELECT * FROM tbl_settings WHERE id=1");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row)
{
	$logo = $row['logo'];
	$favicon = $row['favicon'];
	$contact_email = $row['contact_email'];
	$contact_phone = $row['contact_phone'];
	$meta_title_home = $row['meta_title_home'];
    $meta_keyword_home = $row['meta_keyword_home'];
    $meta_description_home = $row['meta_description_home'];
    $before_head = $row['before_head'];
    $after_body = $row['after_body'];
    $theme_color = $row['color'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>

	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/uploads/<?php echo $favicon; ?>">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="assets/css/jquery.bxslider.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/rating.css">
	<link rel="stylesheet" href="assets/css/spacing.css">
	<link rel="stylesheet" href="assets/css/bootstrap-touch-slider.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/tree-menu.css">
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<?php include("includes/meta_tags.php"); ?>
	
	<?php if($cur_page == 'blog-single.php'): ?>
		<meta property="og:title" content="<?php echo $og_title; ?>">
		<meta property="og:type" content="website">
		<meta property="og:url" content="<?php echo BASE_URL.$og_slug; ?>">
		<meta property="og:description" content="<?php echo $og_description; ?>">
		<meta property="og:image" content="assets/uploads/<?php echo $og_photo; ?>">
	<?php endif; ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

	<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5993ef01e2587a001253a261&product=inline-share-buttons"></script>
	
	<style>
		
		.top .right ul li a:hover,
        .nav,
        .menu-container,
        .slide-text > a.btn-primary,
        .welcome p.button a,
        .product .owl-controls .owl-prev:hover, 
        .product .owl-controls .owl-next:hover,
        .product .text p a,
        .home-blog .text p.button a,
        .home-newsletter,
        .footer-main h3:after,
        .scrollup i,
        .cform input[type="submit"],
        .blog p.button a,
        div.pagination a,
        #left ul.nav>li.cat-level-1.parent>a,
        .product .btn-cart1 input[type="submit"],
        .review-form .btn-default {
			background: #<?php echo $theme_color; ?>!important;
		}
        
        #left ul.nav>li.cat-level-1.parent>a>.sign, 
        #left ul.nav>li.cat-level-1 li.parent>a>.sign {
            background-color: #<?php echo $theme_color; ?>!important;
        }
        
        .top .left ul li,
        .top .left ul li i,
        .top .right ul li a,
        .header .right ul li,
        .header .right ul li a,
        .welcome p.button a:hover,
        .product .text h4,
        .cform address span,
        .blog h3 a:hover,
        .blog .text ul.status li a,
        .blog .text ul.status li,
        .widget ul li a:hover,
        .breadcrumb ul li,
        .breadcrumb ul li a,
        .product .p-title h2 {
			color: #<?php echo $theme_color; ?>!important;
		}
        
        .scrollup i,
        div.pagination a,
        #left ul.nav>li.cat-level-1.parent>a {
            border-color: #<?php echo $theme_color; ?>!important;
        }
        
        .widget h4 {
            border-bottom-color: #<?php echo $theme_color; ?>!important;
        }
        
        
        .top .right ul li a:hover,
        #left ul.nav>li.cat-level-1 .lbl1 {
            color: #fff!important;
        }
        .welcome p.button a:hover {
            background: #fff!important;
        }
        .slide-text > a:hover, .slide-text > a:active {
            background-color: #333333!important;
        }
        .product .text p a:hover,
        .home-blog .text p.button a:hover,
        .blog p.button a:hover {
            background: #333!important;
        }
        
        div.pagination span.current {
            border-color: #777!important;
            background: #777!important;
        }
        
        div.pagination a:hover, 
        div.pagination a:active {
            border-color: #777!important;
            background: #777!important;
        }
        
        .product .nav {
            background: transparent!important;
        }
        
    </style>
	
	
	

<?php echo $before_head; ?>

</head>
<body>

<?php echo $after_body; ?>
<!--
<div id="preloader">
	<div id="status"></div>
</div> -->


<div class="top">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="left">
					<ul>
						<li><i class="fa fa-phone"></i> <?php echo $contact_phone; ?></li>
						<li><i class="fa fa-envelope-o"></i> <?php echo $contact_email; ?></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
				<div class="right">
					<ul>
						<?php

						    $statement = $pdo->prepare("SELECT * FROM tbl_social");
						    $statement->execute();
						    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
						    
						    foreach ($result as $row) 
						    {
						?>
							  <?php if($row['social_url'] != ''): ?>
							   <li><a href="<?php echo $row['social_url']; ?>"><i class="<?php echo $row['social_icon']; ?>"></i></a></li>
							   <?php endif; ?>
							   <?php
						    }
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="header">
	<div class="container">
		<div class="row inner">
			<div class="col-md-4 logo">
				<a href="index.php"><img src="assets/uploads/<?php echo $logo; ?>" alt="logo image"></a>
			</div>
			
			
			<div class="col-md-5 right">
				<!--
				<ul>
					
					<?php

					if(isset($_SESSION['customer'])) 
					{
						?>
						<li><i class="fa fa-user"></i> <?php echo LANG_VALUE_13; ?> <?php echo $_SESSION['customer']['cust_name']; ?></li>
						<li><a href="dashboard.php"><i class="fa fa-home"></i> <?php echo LANG_VALUE_89; ?></a></li>
						<?php
					}

					else 
					{
						?>
						<li><a href="login.php"><i class="fa fa-sign-in"></i> <?php echo LANG_VALUE_9; ?></a></li>
						<li><a href="registration.php"><i class="fa fa-user-plus"></i> <?php echo LANG_VALUE_15; ?></a></li>
						<?php	
					}

					?>
				</ul>-->
			</div> 
			<div class="col-md-3 search-area">
				<form class="navbar-form navbar-left" role="search" action="search-result.php" method="get">
					<?php $csrf->echoInputField(); ?>
					<div class="form-group">
						<input type="text" class="form-control search-top" placeholder="<?php echo LANG_VALUE_2; ?>" name="search_text">
					</div>
					<button type="submit" class="btn btn-default"><?php echo LANG_VALUE_3; ?></button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="nav">
	<div class="container">
		<div class="row">
			<div class="col-md-12 pl_0 pr_0">
				<div class="menu-container">
					<div class="menu">
						<ul>
							<li><a href="index.php" style="background-color: #000;">News</a></li>
							<li><a href="politics.php">Politics</a></li>
							<li><a href="business.php">Business</a></li>
							<li><a href="entertainment.php">Entertainment</a></li>
							<li><a href="tech.php">Technology</a></li>
							<li><a href="health.php">Health</a></li>
							<li><a href="sports.php">Sports</a></li>
							<li><a href="lifestyle.php">Lifestyle</a></li>
							<li><a href="#">Other Categories</a>
								<ul>
									<li><a href="culture.php">Culture</a></li>
									<li><a href="facts.php">Facts & Opinions</a></li>
									<li><a href="history.php">History</a></li>
									<li><a href="romance.php">Romance & Relationship</a></li>
									<!--<li><a href="photo-gallery.php">Image Gallery</a></li>
									<li><a href="video-gallery.php">Videos</a></li>-->
								</ul>
							</li>
							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
ob_start();
session_start();
include("inc/config.php");
include("inc/functions.php");
include("inc/CSRF_Protect.php");
$csrf = new CSRF_Protect();
$error_message = '';
$success_message = '';
$error_message1 = '';
$success_message1 = '';

// Check if the user is logged in or not
if(!isset($_SESSION['user'])) {
	header('location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/datepicker3.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<link rel="stylesheet" href="css/AdminLTE.min.css">
	<link rel="stylesheet" href="css/_all-skins.min.css">
	<link rel="stylesheet" href="css/on-off-switch.css"/>
	<link rel="stylesheet" href="css/summernote.css">
	<link rel="stylesheet" href="style.css">

</head>

<body class="hold-transition fixed skin-blue sidebar-mini">

	<div class="wrapper">

		<header class="main-header">

			<a href="index.php" class="logo">
				<span class="logo-lg">My Blog</span>
			</a>

			<nav class="navbar navbar-static-top">
				
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="../assets/uploads/<?php echo $_SESSION['user']['photo']; ?>" class="user-image" alt="User Image">
								<span class="hidden-xs"><?php echo $_SESSION['user']['full_name']; ?></span>
							</a>
							<ul class="dropdown-menu">
								<li class="user-footer">
									<div>
										<a href="profile-edit.php" class="btn btn-default btn-flat">Edit Profile</a>
									</div>
									<div>
										<a href="logout.php" class="btn btn-default btn-flat">Log out</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>
		</header>

  		<?php $cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1); ?>

  		<aside class="main-sidebar">
    		<section class="sidebar">
      
      			<ul class="sidebar-menu">

			        <li class="treeview <?php if($cur_page == 'index.php') {echo 'active';} ?>">
			          <a href="index.php">
			            <i class="fa fa-hand-o-right"></i> <span>Dashboard</span>
			          </a>
			        </li>

					
			        <li class="treeview <?php if( ($cur_page == 'settings.php') ) {echo 'active';} ?>">
			          <a href="settings.php">
			            <i class="fa fa-hand-o-right"></i> <span>Settings</span>
			          </a>
			        </li>

			     <!--   <li class="treeview <?php if( ($cur_page == 'slider.php') ) {echo 'active';} ?>">
			          <a href="slider.php">
			            <i class="fa fa-hand-o-right"></i> <span>Slider</span>
			          </a>
			        </li> 

			        <li class="treeview <?php if( ($cur_page == 'service.php') ) {echo 'active';} ?>">
			          <a href="service.php">
			            <i class="fa fa-hand-o-right"></i> <span>Service</span>
			          </a>
			        </li> 

			        <li class="treeview <?php if( ($cur_page == 'testimonial.php') ) {echo 'active';} ?>">
			          <a href="testimonial.php">
			            <i class="fa fa-hand-o-right"></i> <span>Testimonial</span>
			          </a>
			        </li>

			        <li class="treeview <?php if( ($cur_page == 'faq.php') ) {echo 'active';} ?>">
			          <a href="faq.php">
			            <i class="fa fa-hand-o-right"></i> <span>FAQ</span>
			          </a>
			        </li> -->

			        <li class="treeview <?php if( ($cur_page == 'photo.php') || ($cur_page == 'video.php') ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Gallery</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="photo.php"><i class="fa fa-circle-o"></i> Photo Gallery</a></li>
							<li><a href="video.php"><i class="fa fa-circle-o"></i> Video Gallery</a></li>
						</ul>
					</li>

					<li class="treeview <?php if( ($cur_page == 'post.php') ||($cur_page == 'post-add.php') ||($cur_page == 'post-edit.php') || ($cur_page == 'category.php') || ($cur_page == 'category-add.php') || ($cur_page == 'category-edit.php') ) {echo 'active';} ?>">
						<a href="#">
							<i class="fa fa-hand-o-right"></i>
							<span>Blog Posts</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="category.php"><i class="fa fa-circle-o"></i> Category</a></li>
							<li><a href="post.php"><i class="fa fa-circle-o"></i> Posts</a></li>
						</ul>
					</li>

			        <li class="treeview <?php if( ($cur_page == 'language.php') ) {echo 'active';} ?>">
			          <a href="language.php">
			            <i class="fa fa-hand-o-right"></i> <span>Language Settings</span>
			          </a>
			        </li>
					
			        <li class="treeview <?php if( ($cur_page == 'page.php') ) {echo 'active';} ?>">
			          <a href="page.php">
			            <i class="fa fa-hand-o-right"></i> <span>Page</span>
			          </a>
			        </li>

			        <li class="treeview <?php if( ($cur_page == 'social-media.php') ) {echo 'active';} ?>">
			          <a href="social-media.php">
			            <i class="fa fa-hand-o-right"></i> <span>Social Media</span>
			          </a>
			        </li>

			        <li class="treeview <?php if( ($cur_page == 'subscriber.php')||($cur_page == 'subscriber.php') ) {echo 'active';} ?>">
			          <a href="subscriber.php">
			            <i class="fa fa-hand-o-right"></i> <span>Subscriber</span>
			          </a>
			        </li>


			        

			        


      			</ul>
    		</section>
  		</aside>

  		<div class="content-wrapper">
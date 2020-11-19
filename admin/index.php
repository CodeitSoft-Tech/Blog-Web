<?php require_once('header.php'); ?>

<section class="content-header">
	<h1>Dashboard</h1>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_category");
$statement->execute();
$total_category = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post");
$statement->execute();
$total_post = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id = '1'");
$statement->execute();
$total_political_post = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id = '2'");
$statement->execute();
$total_business_post = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id = '3'");
$statement->execute();
$total_entertainment_post = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id = '4'");
$statement->execute();
$total_tech_post = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id = '5'");
$statement->execute();
$total_health_post = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id = '6'");
$statement->execute();
$total_sports_post = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id = '7'");
$statement->execute();
$total_lifestyle_post = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id = '8'");
$statement->execute();
$total_culture_post = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id = '9'");
$statement->execute();
$total_facts_post = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id = '10'");
$statement->execute();
$total_history_post = $statement->rowCount();

$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE category_id = '11'");
$statement->execute();
$total_romance_post = $statement->rowCount();

?>

<section class="content">
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Total Categories</span>
					<span class="info-box-number"><?php echo $total_category; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Total Post</span>
					<span class="info-box-number"><?php echo $total_post; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Post On Politics</span>
					<span class="info-box-number"><?php echo $total_political_post; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Post On Business</span>
					<span class="info-box-number"><?php echo $total_business_post; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Post On Entertainment</span>
					<span class="info-box-number"><?php echo $total_entertainment_post; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Post On Technology</span>
					<span class="info-box-number"><?php echo $total_tech_post; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Post On Health</span>
					<span class="info-box-number"><?php echo $total_health_post; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Post On Sports</span>
					<span class="info-box-number"><?php echo $total_sports_post; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Post On Lifestyle</span>
					<span class="info-box-number"><?php echo $total_lifestyle_post; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Post On Culture</span>
					<span class="info-box-number"><?php echo $total_culture_post; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Post On Facts & Opinion</span>
					<span class="info-box-number"><?php echo $total_facts_post; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Post On History</span>
					<span class="info-box-number"><?php echo $total_history_post; ?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-xs-12">
			<div class="info-box">
				<span class="info-box-icon bg-green"><i class="fa fa-hand-o-right"></i></span>
				<div class="info-box-content">
					<span class="info-box-text">Post On Romance & Relationship </span>
					<span class="info-box-number"><?php echo $total_romance_post; ?></span>
				</div>
			</div>
		</div>
		
	</div>
</section>

<?php require_once('footer.php'); ?>
<?php

	$statement = $pdo->prepare("SELECT * FROM tbl_page WHERE id=1");
	$statement->execute();
	$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
	foreach ($result as $row) {
		$politics_page_meta_title = $row['politics_page_meta_title'];
		$politics_page_meta_keyword = $row['politics_page_meta_keyword'];
		$politics_page_meta_description = $row['politics_page_meta_description'];
		$business_page_meta_title = $row['business_page_meta_title'];
		$business_page_meta_keyword = $row['business_page_meta_keyword'];
		$business_page_meta_description = $row['business_page_meta_description'];
		$enter_page_meta_title = $row['enter_page_meta_title'];
		$enter_page_meta_keyword = $row['enter_page_meta_keyword'];
		$enter_page_meta_description = $row['enter_page_meta_description'];
		$tech_page_meta_title = $row['tech_page_meta_title'];
		$tech_page_meta_keyword = $row['tech_page_meta_keyword'];
		$tech_page_meta_description = $row['tech_page_meta_description'];
		$health_page_meta_title = $row['health_page_meta_title'];
		$health_page_meta_keyword = $row['health_page_meta_keyword'];
		$health_page_meta_description = $row['health_page_meta_description'];
		$sports_page_meta_title = $row['sports_page_meta_title'];
		$sports_page_meta_keyword = $row['sports_page_meta_keyword'];
		$sports_meta_description = $row['sports_page_meta_description'];
		$lifestyle_page_meta_title = $row['lifestyle_page_meta_title'];
		$lifestyle_page_meta_keyword = $row['lifestyle_page_meta_keyword'];
		$lifestyle_meta_description = $row['lifestyle_page_meta_description'];
		$culture_page_meta_title = $row['culture_page_meta_title'];
		$culture_page_meta_keyword = $row['culture_page_meta_keyword'];
		$culture_meta_description = $row['culture_page_meta_description'];
		$factop_page_meta_title = $row['factop_page_meta_title'];
		$factop_page_meta_keyword = $row['factop_page_meta_keyword'];
		$factop_meta_description = $row['factop_page_meta_description'];
		$history_page_meta_title = $row['history_page_meta_title'];
		$history_page_meta_keyword = $row['history_page_meta_keyword'];
		$history_meta_description = $row['history_page_meta_description'];
		$romrel_page_meta_title = $row['romrel_page_meta_title'];
		$romrel_page_meta_keyword = $row['romrel_page_meta_keyword'];
		$romrel_meta_description = $row['romrel_page_meta_description'];
		$contact_page_meta_title = $row['contact_page_meta_title'];
		$contact_page_meta_keyword = $row['contact_page_meta_keyword'];
		$contact_meta_description = $row['contact_page_meta_description'];
	}

	$cur_page = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	
	if($cur_page == 'index.php' || $cur_page == 'login.php' || $cur_page == 'registration.php' || $cur_page == 'forget-password.php' || $cur_page == 'reset-password.php') {
		?>
		<title><?php echo $meta_title_home; ?></title>
		<meta name="keywords" content="<?php echo $meta_keyword_home; ?>">
		<meta name="description" content="<?php echo $meta_description_home; ?>">
		<?php
	}

	if($cur_page == 'politics.php') {
		?>
		<title><?php echo $politics_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $politics_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $politics_page_meta_description; ?>">
		<?php
	}
	if($cur_page == 'business.php') {
		?>
		<title><?php echo $business_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $business_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $business_page_meta_description; ?>">
		<?php
	}
	if($cur_page == 'entertainment.php') {
		?>
		<title><?php echo $enter_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $enter_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $enter_page_meta_description; ?>">
		<?php
	}
	if($cur_page == 'tech.php') {
		?>
		<title><?php echo $tech_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $tech_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $tech_page_meta_description; ?>">
		<?php
	}
	if($cur_page == 'health.php') {
		?>
		<title><?php echo $health_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $health_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $health_page_meta_description; ?>">
		<?php
	}
	if($cur_page == 'sports.php') {
		?>
		<title><?php echo $sports_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $sports_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $sports_page_meta_description; ?>">
		<?php
	}
	if($cur_page == 'lifestyle.php') {
		?>
		<title><?php echo $lifestyle_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $lifestyle_page_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $lifestyle_page_meta_description; ?>">
		<?php
	}
	if($cur_page == 'culture.php') {
		?>
		<title><?php echo $culture_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $culture_page_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $culture_page_meta_description; ?>">
		<?php
	}
	if($cur_page == 'facts.php') {
		?>
		<title><?php echo $factop_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $factop_page_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $factop_page_meta_description; ?>">
		<?php
	}
	if($cur_page == 'history.php') {
		?>
		<title><?php echo $history_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $history_page_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $history_page_meta_description; ?>">
		<?php
	}
	if($cur_page == 'romance.php') {
		?>
		<title><?php echo $romrel_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $romrel_page_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $romrel_page_meta_description; ?>">
		<?php
	}

	if($cur_page == 'contact.php') {
		?>
		<title><?php echo $contact_page_meta_title; ?></title>
		<meta name="keywords" content="<?php echo $contact_page_page_meta_keyword; ?>">
		<meta name="description" content="<?php echo $contact_page_meta_description; ?>">
		<?php
	}

	if($cur_page == 'blog-single.php')
	{
		$statement = $pdo->prepare("SELECT * FROM tbl_post WHERE post_slug=?");
		$statement->execute(array($_REQUEST['slug']));
		$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
		foreach ($result as $row) 
		{
		    $og_photo = $row['photo'];
		    $og_title = $row['post_title'];
		    $og_slug = $row['post_slug'];
			$og_description = substr(strip_tags($row['post_content']),0,200).'...';
			echo '<meta name="description" content="'.$row['meta_description'].'">';
			echo '<meta name="keywords" content="'.$row['meta_keyword'].'">';
			echo '<title>'.$row['meta_title'].'</title>';
		}
	}
	
	?>
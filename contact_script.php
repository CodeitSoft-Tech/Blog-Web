<?php

	//include("admin/inc/config.php");

	if(isset($_POST['form_contact']))
	{
		$recipient = "afrikaloverz@gmail.com";
		$subject = $_POST['subject'];
		$sender = $_POST["name"];
		$senderEmail = $_POST['email'];
		$message = $_POST['message'];

		$mailBody = "Name: $sender\nEmail:$senderEmail\n\n$message";

		$thankYou = mail($recipient, $subject, $mailBody, "From:$sender <$senderEmail>");

		if($thankYou)
		{
			echo "<script>alert('Successfully added new brand!');</script>";
		    echo "<script>document.location='brand.php'</script>";  
		}  
	}


?>
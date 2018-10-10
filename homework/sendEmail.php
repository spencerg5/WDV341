<?php

require 'Emailer.php';

$businessEmail = new Emailer(); //instantiation a new instance of a class

$businessEmail->setMessageLine("Hello Jeff");  //loaded a value into the object

$businessEmail->setSenderAddress("contact@spencergauch.com");

$businessEmail->setSendToAddress("spencer.gauch5@gmail.com");

$businessEmail->setSubjectLine("Test Email");

$validEmail = $businessEmail->sendPHPEmail();
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

	<h2>WDV 341 Emailer Class Assignment</h2>
	
	<p>Your email message is: <?php echo $businessEmail->getMessageLine(); ?></p>
	<p>This email is from: <?php echo $businessEmail->getSenderAddress()?></p>
	<p>This email is going to: <?php echo $businessEmail->getSendToAddress()?></p>
	<p>This subject line is: <?php echo $businessEmail->getSubjectLine()?></p>
	
	<?php
		if($validEmail) {
	?>
		<p>Thank you for your email. </p>
	<?php
		}
		else 
		{
	?>
		
		<p>Sorry it didn't work.</p>
	<?php
		}
		?>
	
</body>
</html>
<?php

require 'Emailer.php';

$businessEmail = new Emailer(); //instantiation a new instance of a class

$businessEmail->setMessageLine("Hello World");  //loaded a value into the object

$businessEmail->setSenderAddress("spencer.gauch5@gmail.com");

$businessEmail->setSendToAddress("testing@gmail.com");

$businessEmail->setSubjectLine("Test Email");
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	
	<p>Your email message is:<?php echo $businessEmail->getMessageLine(); ?></p>
	<p>This email is from: <?php echo $businessEmail->getSenderAddress()?></p>
	<p>This email is going to: <?php echo $businessEmail->getSendToAddress()?></p>
	<p>This subject line is: <?php echo $businessEmail->getSubjectLine()?></p>
	
</body>
</html>
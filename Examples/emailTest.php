<!doctype html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	
	
<?php	
	$emailResult="";	
		
	function sendEmail() {
	
	$emailResult;
	


$to = "spencer.gauch5@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$from = "From: contact@spencergauch.com" . "\r\n" .
"CC: contact@spencergauch.com";

$emailResult = mail($to,$subject,$txt,$from);

	}
		
	sendEmail();
	
?>	
<h1>Email Test</h1>
<h2>Email Result<?php echo $emailResult; ?></h2>
	
</body>
</html>
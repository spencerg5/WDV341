<?php

$yourName = "Spencer Gauch";

$number1 = "2";

$number2 = "3";

$total = 0;

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Basics</title>
</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>PHP Basics - Code Examples</h2>
	
	<?php echo "<h1>$yourName</h1>"; ?>
	
	<h2> <?php echo $yourName ?> </h2>
	
	<?php 
	
		function sum($number1, $number2) {
	$total = $number1 + $number2;
	return $total;
}
		
	echo $total;
	
	?>
</body>
</html>
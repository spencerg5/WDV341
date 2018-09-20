<?php

	require 'connectPDO.php';

	$event_name = $_POST['event_name']; 		//pull the value of the field
		
	$event_description = $_POST['event_description'];	
	
	$event_date = $_POST['event_date'];



	$sql = "INSERT INTO wdv341_events (event_name, event_description, event_date) VALUES (:eventName, :eventDescription, :eventDate)";

	try {
	
	$stmt = $conn->prepare($sql);		//prepare the SQL statement

	$stmt->bindParam(':eventName', "$event_name"); //Bind placeholder to a value
	$stmt->bindParam('eventDescription', "$event_description");
	$stmt->bindParam('eventDate', "$event_date");

	$stmt->execute();

	}

	catch(PDOException $e) 
	{
		die();
	}



?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Event Form</title>
</head>

<body>
	<div id = "container">
		<h1>WDV 341 Intro PHP</h1>

			<form name="form1" method="post" action="insertEvent.php">

				<p>
					<label>Event Name: 
						<input type="text" name="event_name" id="event_name" />
					</label>
				</p>

				<p>
					<label>Event Description: 
						<input type="text" name="event_description" id="event_description" size="100" />
					</label>
				</p>

				<p>
					<label>Event Date: 
						<input type="date" name="event_date" id="event_date" />
					</label>
				</p>

					<p>
						<input type="submit" name="button" id="button" value="Submit" />
						<input type="reset" name="button2" id="button2" value="Reset" />
					</p>

			</form>
	</div>
</body>
</html>
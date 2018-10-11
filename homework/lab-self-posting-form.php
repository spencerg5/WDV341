<?php

	//BEGIN FORM VALIDATION
  $name_errMsg = "";

  $email_errMsg = "";

  $lab_email = "";

  $lab_name = "";
  
  $valid_form = false;
  	
  
  if( isset($_POST['form_submit']) )
  {
    

    $lab_name = $_POST['lab_name'];
		$lab_email = $_POST['lab_email'];


      $valid_form = true;

  }
	
	//validate name - Cannot be empty
	if( empty($lab_name)) {
		$name_errMsg = "Please enter a name";
		$valid_form = false;
	}

	//validate email using PHP filter
	if( !filter_var($lab_email, FILTER_VALIDATE_EMAIL)) {
		$email_errMsg = "Please enter a valid email";
		$valid_form = false;	
  }
  
  
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>WDV341 Intro PHP</title>

<script type="text/javascript">     //honeypot javascript
	function validateMyForm() {
		// The field is empty, submit the form.
		if(!document.getElementById("honeypot").value) { 
			return true;
		} 
		 // the field has a value it's a spam bot
		else {
			return false;
		}
	}
</script>

</head>

<body>
<h1>WDV341 Intro PHP</h1>
<h2>Unit-7 and Unit-8 Form Validations and Self Posting Forms.</h2>
<h3>In Class Lab - Self Posting Form</h3>
<p><strong>Instructions:</strong></p>
<ol>
  <li>Modify this page as needed to convert it into a PHP self posting form.</li>
  <li>Use the validations provided on the page for the server side validation. You do NOT need to code any validations.</li>
  <li>Modify the page as needed to display any input errors.</li>
  <li>Include some form of form protection.</li>
  <li>You do NOT need to do any database work with this form. </li>
</ol>
<p>When complete:</p>
<ol>
  <li>Post a copy on your host account.</li>
  <li>Push a copy to your repo.</li>
  <li>Submit the assignment on Blackboard. Include a link to your page and to your repo.</li>
</ol>

<?php
          if($valid_form)
          {
          ?>
              <h1>Form was successful</h1>
              <h2>Thank you for submitting your information</h2>
        <?php
          }
          else
          {
        ?>    

<form name="form1" method="post" action="lab-self-posting-form.php" onsubmit="return validateMyForm();">
  <p>
    <label for="lab_name">Name:</label>
    <input type="text" name="lab_name" id="lab_name" value="<?php echo $lab_name; ?>">
    <span id="errorName"><?php echo $name_errMsg; ?></span>
  </p>
  <p>
    <label for="lab_email">Email:</label>
    <input type="text" name="lab_email" id="lab_email" value="<?php echo $lab_email; ?>">
    <span id="errorEmail"><?php echo $email_errMsg; ?></span>
  </p>
  <p>
    <input type="submit" name="form_submit" id="form_submut" value="Submit">
    <input type="reset" name="reset" id="button" value="Reset">
  </p>

  <div style="display:none;">
   <label>Keep this field blank</label>
   <input type="text" name="honeypot" id="honeypot" />
</div>
</form>

<?php
          }
?>

<p>&nbsp;</p>
</body>
</html>

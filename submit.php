<!doctype html>
<html lang="en-US">
<head>
<!--
Todo:
	Build database to receive data
	Insert in database
	Change title on error.
	Valid data checks
	data exists checks	
-->
<title>WYC Registraton Submitted</title>
</head>
<body>
<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$attendeeCount = count($firstName);
?>
<p>Count: <?php echo $attendeeCount ?></p>
<?php
	for ($i = 0; $i < $attendeeCount; $i++)
	{
?>
<p><?php echo $firstName[$i] ?></p>
<?php
	}
?>
</body>
</html>

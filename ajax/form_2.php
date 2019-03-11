<?php
//florian tjeertes md1b
	$firstName = $_GET['firstName'];
  $lastName = $_GET['lastName'];
	$age = $_GET['age'];
	$email = $_GET['email'];
	echo "<h3>Response Demo Form</h3><h4> ";
	echo "You submitted the following information<br><ul>";
	echo "<li>Name LastName: <strong> $firstName $lastName</strong></li>";
	echo "<li>Age: <strong> $age</strong></li>";
	echo "<li>email $email</li>";
	echo "</li></ul></h4>";
?>

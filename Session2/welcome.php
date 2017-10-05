<?php
	$name = $_POST['name'];
	$class = $_POST['class'];
	$birthday = $_POST['birthday'];
	$email = $_POST['email'];
	$born = 2017 - $birthday;
	
	if(isset($_POST['submit'])) {
		if(empty($name)) {
			echo "<strong>Must input your name!</strong>";
			
			echo "<br>";
		} else {
			echo "Your Name: $name";
			echo "<br>";
		}
		if(empty($class)) {
			echo "<strong>Must input your class!</strong>";
			echo "<br>";
		} else {
			echo "Your Class: $class";
			echo "<br>";
		}
		if ($born < 18) {
			echo "Age Invalid!";
			echo "<br>";
		} else {
			echo "Age: $born";
			echo "<br>";
		}
		if (empty($email)) {
			echo "Email is required";
		} else {
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  echo "<strong>Invalid email format</strong>"; 
			}
			else {
				echo "Email: $email";
				echo "<br>";
			}
		}

	}
?>
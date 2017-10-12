<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Example1</title>
	<!--CSS for class error vs class info-->
	<style type="text/css">
			.error {
				color: red;
				margin-left: 1cm;
			}
			.info {
				color:green;
			}
	</style>
</head>
<body>
	<?php
		/*Khai bao bien rong*/
		$errorname = "";
		$errorclass ="";
		$errorbirthday = "";
		$erroremail = "";
		$name = $class = $birthday = $email = "";
		/*Goi database*/
		include('connectShop_db.php');
		/*Xu ly
		$_SERVER['REQUEST_METHOD'] : Returns the request method used to access the page (such as POST)*/
		if($_SERVER['REQUEST_METHOD'] == "POST") {
			$name = $_POST['name'];
			$class = $_POST['class'];
			$birthday = $_POST['birthday'];
			$email = $_POST['email'];
			$errors = array(); /*khoi tao bien errors bang mang*/
			if(empty($_POST['name'])) {
				$errorname = "* required field.";
				$errors[] = 'name';
				
			} else if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			  	$errorname = "Only letters and white space allowed";
			  	$errors[] = 'name';
			  	
			}
			else {
				$name = $_POST['name'];
			}
			if(empty($_POST['class'])) {
				$errorclass = "* required field.";
				$errors[] = 'class';
				
			} else {
				$class = $_POST['class'];
			}
			if(empty($_POST['birthday'])) {
				$errorbirthday = "* required field.";
				$errors[] = 'birthday';
			} else if ( (date("Y") - $_POST['birthday']) < 18 ) {
				$errorbirthday = "Age Invalid!";
				$errors[] = 'birthday';
				
			} else {
				$birthday = date("Y") - $_POST['birthday'];
			}
			if (empty($email)) {
				$erroremail = "* required field.";
				$errors[] = 'email';
			} else {
				// check if e-mail address is well-formed
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				  $erroremail = "Invalid email format!";
				  $errors[] = 'email';
				}
				else {
					$email = $_POST['email'];
				}
			}
			if(empty($errors)) { /*Neu bien errors khong co loi*/
				$query = "INSERT INTO users (name, class, age, email) 
					  VALUES (' {$name} ',' {$class} ',' {$birthday} ' ,'{$email}')";
				$results = mysqli_query($conn,$query) or die ("Query {$query} \n <br> errors:" . mysqli_error($conn));
				if(mysqli_affected_rows($conn) == 1) {
					echo "<p class='info'>THEM MOI THANH CONG!</p>";
				} else {
					echo "<p class='info'>THEM MOI KHONG THANH CONG!</p>";
				}
			} else {
				echo "<p class='error'>Ban chua nhap day du thong tin!</p>";
			}

			
		}
	?>
	<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
		<input type="text" name="name" placeholder="Input your name"><span class="error"><?php echo $errorname ?></span> 
		<br><br>
		<input type="text" name="class" placeholder="Input your class"><span class="error"><?php echo $errorclass ?></span>
		<br><br>
		<input type="text" name="birthday" placeholder="Input your birthday"><span class="error"><?php echo $errorbirthday ?></span>
		<br><br>
		<input type="text" name="email" placeholder="Input your email address"><span class="error"><?php echo $erroremail ?></span>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
		if(isset($_POST['submit'])) {
			if(empty($errors)) {
				echo "<br>";
			echo "Name: " . $name;
			echo "<br>";
			echo "Class: " . $class;
			echo "<br>";
			echo "Birthday: " . $birthday;
			echo "<br>";
			echo "Email: " . $email;
			echo "<br>";
			}
			
		}
	?>
</body>
</html>
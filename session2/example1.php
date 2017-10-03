<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Example1</title>
</head>
<body>
	<?php
		$number = 12;
		// Cau 1
		echo "1)Các giá trị chia hết cho 3: ";
		echo "<br>";
		for($i = 1; $i <= $number; $i++) {
			if($i % 3 == 0) {
				echo "$i";
				echo "<br>";
			}
		}
		// Cau 2
		echo "2)N > 10: ";
		echo "<br>";
		while($number > 10) {
			echo "N = $number";
			break;
		}
		echo "<br>";
		// Cau 3
		echo "3)In ra N va kiem tra N > 15? : ";
		do{
			echo "N = $number";
		}while($number > 15);
		echo "<br>";

	?>
</body>
</html>
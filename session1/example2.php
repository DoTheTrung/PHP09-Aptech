<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Example2</title>
</head>
<body>
	<?php
	/* Example about Strings in PHP by The Trung*/
		$name = "Do The Trung";
		echo("Name: ");
		echo $name;
		echo("<br>");
		echo("The character of the name: ");
		echo strlen($name);
		echo("<br>");
		echo("Number of letters of the name: ");
		echo str_word_count($name);
		echo("<br>");
		echo("Location of 'u' in the name: ");
		echo strpos($name,"u");
		echo("<br>");
		echo("Replace the middle name with 'PHP09': ");
		echo str_replace("The", "PHP09", $name);
		echo("<br>");
		echo("Reverse name: ");
		echo strrev($name);
	?>
</body>
</html>
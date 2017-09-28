<?php
/*This is my code
 Create by TrungOrton
*/
	$numberOne = 8;
	$numberTwo = 5;
/* This is Addition
*/
	echo "Addition: ";
	echo "$numberOne + $numberTwo = " ;
	echo $numberOne + $numberTwo;
	echo "<br>";
/* This is Subtraction
*/
	echo "Subtraction: ";
	echo "$numberOne - $numberTwo = " ;
	echo $numberOne - $numberTwo;
	echo "<br>";
/* This is Multiplication
*/
	echo "Multiplication: ";
	echo "$numberOne * $numberTwo = " ;
	echo $numberOne * $numberTwo;
	echo "<br>";
/* This is Division
*/
	echo "Division: ";
	echo "$numberOne / $numberTwo = " ;
	echo $numberOne / $numberTwo;

	if($numberOne == $numberTwo){
		echo "$numberOne == $numberTwo";
	}
	else if($numberOne > $numberTwo){
		echo "<br>";
		echo "$numberOne > $numberTwo";
	}
	else if($numberOne < $numberTwo){
		echo "<br>";
		echo "$numberOne < $numberTwo";
	}
	else if($numberOne >= $numberTwo){
		echo "<br>";
		echo "$numberOne >= $numberTwo";
	}
	else if($numberOne <= $numberTwo){
		echo "<br>";
		echo "$numberOne <= $numberTwo";
	}
	else if($numberOne === $numberTwo){
		echo "<br>";
		echo "$numberOne === $numberTwo";
	}
	else if($numberOne != $numberTwo){
		echo "<br>";
		echo "$numberOne != $numberTwo";
	}
	else if($numberOne !== $numberTwo){
		echo "<br>";
		echo "$numberOne !== $numberTwo";
	}

?>
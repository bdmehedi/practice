<?php

if (!empty($_POST['year'])) {
	$year = $_POST['year'];

	if (($year % 400 == 0) || ($year % 100 != 0 && $year % 4 == 0)) {
		echo "The year is a Leap year . <br><br>";
	}else{
		echo "The year is not a Leap year. <br> <br>";
	}
}else{

	echo "Number must not be empty. <br>";
}
<?php
for ($n = 1; $n <=9; $n++){
	echo "$n, ";
}
for ($n = 11; $n < 100; $n += 11){

	echo "$n";
	if ($n != 99) {
		echo ", ";
	}else{
		echo ".";
	}
}
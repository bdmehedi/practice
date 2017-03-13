<?php 

spl_autoload_register(function($name){
	
	require_once "class/{$name}.php";
});


$birds = new pegion(true, 2);

$birds->layEggs('yes');

if ($birds->canFly()) {
	
	echo "<br> This penguin {$birds->legCount()}.";
}

?>
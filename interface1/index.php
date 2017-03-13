<?php



spl_autoload_register(function($name){

	require_once "{$name}.php";
});


$cat = new Cat();

echo $cat->talk("I have a Cat");
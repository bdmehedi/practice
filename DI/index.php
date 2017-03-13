<?php

spl_autoload_register(function($name){

	require_once "{$name}.php";
});


$door = new Door(new Lock);

$door->close(false);
$door->open();
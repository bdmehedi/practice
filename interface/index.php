<?php


spl_autoload_register(function($name){

	require_once "{$name}.php";
});


$Collection = new Collection;

$Collection->add('foo');
$Collection->add('bar');


$Collection->goru = "cow";

echo "<pre>";
//print_r($Collection->all());

echo $Collection->get(1);

echo "<br>";

$Collection->Monirul; echo('<br>');

//echo $Collection->goru;


$Collection->fun('Name', 'Roll', 'Mobile');

echo "<br>";

$Collection->name = 'Monirul';


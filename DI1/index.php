<?php

spl_autoload_register(function ($name){

    require_once "{$name}.php";
});


$chest = new Chest(new Lock());

$chest->close();
$chest->open();


<?php



spl_autoload_register(function ($name){

    require_once "{$name}.php";
});


$user = new User(new Database());

$user->create(['username' => 'Moniruol']);
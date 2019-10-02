<?php

//required vendor file including Eloquent
require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    "driver" => "mysql",
    "host" =>"127.0.0.1",
    "database" => "eloquent-in-php",
    "username" => "root",
    "password" => "password"
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
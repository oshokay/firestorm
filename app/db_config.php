<?php
 use Illuminate\Database\Capsule\Manager as Capsule ;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '',
    'username' => '',
    'password' => '',
    'database'=> '',
    ''

]);

$capsule->bootEloquent();
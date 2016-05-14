<?php
 use Illuminate\Database\Capsule\Manager as Capsule ;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'database'=> 'xenon bank',
    ''

]);

$capsule->bootEloquent();
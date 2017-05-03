<?php

include 'autoload.php';

use Patterns\Creational\Factory\AbstractDatabaseConnection;
use Patterns\Creational\Application;

$properties = [
    'adapter' => 'Oracle',
    'username' => 'userx',
    'password' => 'passwx',
    'dbname' => 'dbx',
    'host' => 'localhost',
    'port' => '42'
];

$connection = AbstractDatabaseConnection::factory($properties);

$connection->update('sucker');

// $connection = Application::run();
//
// $connection->insert('fucker');

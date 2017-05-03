<?php

namespace Patterns\Creational;

use Patterns\Creational\Factory\AbstractDatabaseConnection as AbstractDatabaseConnection;
use Patterns\Creational\Factory\PgsqlDatabaseConnection as PgsqlDatabaseConnection;
use Patterns\Creational\Factory\OracleDatabaseConnection as OracleDatabaseConnection;

class Application
{

    public static function run()
    {

        try {

            $config = parse_ini_file(__DIR__ . DIRECTORY_SEPARATOR . 'dbconf.ini');
            $connection = AbstractDatabaseConnection::factory($config);
        } catch (Exception $e) {
            echo $e->getTraceAsString();
        }
        
        return $connection;
    }
}

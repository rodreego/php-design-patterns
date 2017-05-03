<?php

namespace Patterns\Creational\Factory;

interface IDatabaseConnection
{
  public function __construct($username = null, $password = null, $dbname = null, $host = null, $port = null);

  public function insert($model);

  public function update($model);

  public function delete($model);

  public function select($criteria);
}

<?php
include 'autoload.php';

use Patterns\Structural\Adapter\AbstractEntity;
use Patterns\Structural\Adapter\PersistenceManager;
use Patterns\Structural\Adapter\DocumentEntity;
use Patterns\Structural\Adapter\RelationalEntity;

$adapter = new PersistenceManager();
$entity = new DocumentEntity();
$entity->setStorageStructure('document');

$adapter->save($entity);

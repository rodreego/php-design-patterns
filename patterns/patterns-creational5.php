<?php

require_once 'autoload.php';

use Patterns\Creational\Singleton\ContextoDeSeguranca as ContextoDeSeguranca;

$cds1 = ContextoDeSeguranca::getInstance();
$cds2 = ContextoDeSeguranca::getInstance();

if($cds1 === $cds2){
	printf('$cds1 tem o mesmo objeto de $cds2');
}else{
	printf('$cds1 NÃO tem o mesmo objeto de $cds2');
}
echo '<pre>';
var_dump(array($cds1,$cds2));

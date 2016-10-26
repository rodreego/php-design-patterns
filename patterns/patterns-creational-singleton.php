<?php

require_once 'autoload.php';

use Patterns\Creational\Singleton\Singleton as Singleton;

$state = Singleton::getInstance();

printf('<pre>O estado atual é: %s</pre>', $state->getState());

// ALTERANDO O ESTADO
$state->setState('Finalized');
printf('<pre>Agora o estado atual é: %s</pre>', $state->getState());

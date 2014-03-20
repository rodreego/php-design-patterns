<?php

require_once 'autoload.php';

use patterns\creational\singleton\JogadorDeXadrez as JogadorDeXadrez;

$jogador1 = JogadorDeXadrez::getJogador1();
$jogador2 = JogadorDeXadrez::getJogador2();

if($jogador1 === $jogador2):
	printf('$jogador 1 tem o mesmo objeto do $jogador2');
else:
	printf('$jogador 1 NÃO tem o mesmo objeto do $jogador2');
endif;

print '<pre>';
var_dump(array($jogador1,$jogador2));
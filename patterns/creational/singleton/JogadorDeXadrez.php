<?php

namespace patterns\creational\singleton;

class JogadorDeXadrez{

	private static $jogadores = array(null, null);

	private function __construct(){}

	public function __callStatic($method, array $args){
		$prefix = 'getJogador';
		if(substr($method, 0, strlen($prefix)) === $prefix){
			$key = (int) str_replace($prefix, '', $method);
			return self::$jogadores[$key - 1];
		}
	}
}
<?php

namespace patterns\creational\singleton;

class Singleton
{

	private static $singleton = null;
	public $state;
	/**
	* Classes que tenham o construtor privado não podem gerar objetos.
	* No entanto, aqui faz sentido, uma vez que se trata de uma classe Singleton
	*/
	private function __construct()
	{
		$this->setState('Initial');
	}

	public static function getInstance()
	{
		if (self::$singleton == null) {
			self::$singleton = new Singleton();
		}
		return self::$singleton;
	}

	public function getState()
	{
		return $this->state;
	}

	public function setState($state)
	{
		$this->state = $state;
	}
}

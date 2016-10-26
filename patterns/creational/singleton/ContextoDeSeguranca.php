<?php

namespace Patterns\Creational\Singleton;

class ContextoDeSeguranca
{

	private static $contextoDeSeguranca = null;

	private function __construct()
	{

	}

	public static function getInstance()
	{
		if (self::$contextoDeSeguranca === null) {
			self::$contextoDeSeguranca = new ContextoDeSeguranca();
		}
		return self::$contextoDeSeguranca;
	}
}

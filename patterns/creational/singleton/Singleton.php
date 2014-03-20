<?php

namespace patterns\creational\singleton;

class Singleton{

	private static $singleton = null;
	public $state;

	private function __construct(){
		$this->setState('Initial');
	}

	public static function getInstance(){
		if(self::$singleton == null){
			self::$singleton = new Singleton();
		}
		return self::$singleton;
	}

	public function getState(){
		return $this->state;
	}

	public function setState($state){
		$this->state = $state;
	}	
}

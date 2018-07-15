<?php 
	// Singleton Pattern
	class StaticChain {
		private static $_instance;
		public static function getInstance() {
			if(!self::$_instance instanceof StaticChain) {
				self::$_instance = new StaticChain();
			}
			return self::$_instance;
		}

		public function __construct() {
			echo "Class Construct! <br>";
		}

		public function __destruct() {
			echo "Class Destruct! <br>";
		}

		public function eat() {
			echo "EAT! <br>";
			return $this;
		}

		public function sleep() {
			echo "Sleep! <br>";
		}
	}
	StaticChain::getInstance()->eat();
	StaticChain::getInstance()->eat()->sleep();
	StaticChain::getInstance()->eat();
	StaticChain::getInstance()->eat();
	StaticChain::getInstance()->eat();
	StaticChain::getInstance()->eat();
	StaticChain::getInstance()->eat();
	StaticChain::getInstance()->eat();
	StaticChain::getInstance()->eat();
	StaticChain::getInstance()->eat();
 ?>
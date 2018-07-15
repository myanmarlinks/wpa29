<?php 
class DyChain {
	public function eat() {
		echo "EAT!" . "<br>";
		return $this;
	}
	public function sleep() {
		echo "SLEEP!" . "<br>";
		return $this;
	}
	public function code() {
		echo "CODE!" . "<br>";
		return $this;
	}
	public function repeat() {
		echo "REPEAT!" . "<br>";
		return $this;
	}
}
$dyChain = new DyChain();

$dyChain->eat()->sleep()->code()->repeat();
$dyChain->code()->eat()->sleep()->repeat();
$dyChain->eat();
$dyChain->eat()->sleep();









 ?>
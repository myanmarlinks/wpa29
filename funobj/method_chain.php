<?php 

class Calculator {
	private $total;
	public function plus($num) {
		$this->total += $num;
		return $this;
	}
	public function minus($num) {
		$this->total -= $num;
	}
 }

 $cal = new Calculator();
 echo $cal->plus(65)->minus(10);

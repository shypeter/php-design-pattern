<?php
class Adder {
	public function add($a, $b) {
		return $a + $b;
	}
}

class Subtractor {
	public function subtract($a, $b) {
		return $a - $b;
	}
}

class Multiplier {
	public function multiply($a, $b){
		return $a * $b;
	}
}

class Divider {
	public function divide($a, $b) {
		if($b === 0) {
			throw new Exception("Division by zero!");
		}
		return $a / $b;
	}
}

class CaculatorFacade {
	private $_adder;
	private $_subtractor;
	private $_multiplier;
	private $_divider;
	
	public function __construct() {
		$this->_adder = new Adder();
		$this->_subtractor = new Subtractor();
		$this->_multiplier = new Multiplier();
		$this->_divider = new Divider();
	}
	
	public function caculate($expression) {
		list($a, $operator, $b) = explode(" ", $expression);
		
		switch($operator) {
			case "+":
				return $this->_adder->add($a, $b);
			break;
			case "-":
				return $this->_subtractor->subtract($a, $b);
			break;
			case "*":
				return $this->_multiplier->multiply($a, $b);
			break;
			case "/":
				return $this->_divider->divide($a, $b);
			break;
		}
	}
}

$caculator = new CaculatorFacade();
echo $caculator->caculate("34 * 33");
<?php
//prototype 裡的子物件
class SubObject{
	static $instances = 0;
	public $instance;
	public function __construct(){
		$this->instance = ++self::$instances;
	}
	public function __clone(){
		$this->instance = ++self::$instances;
	}
}

class Prototype{
	public $object1;
	public $object2;
	function __clone(){
		$this->object1 = clone $this->object1;
	}
}

$obj = new Prototype();
$obj->object1 = new SubObject();
$obj->object2 = new SubObject();

$obj2 = clone $obj;

var_dump($obj2);

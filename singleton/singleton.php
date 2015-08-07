<?php
class Preferences
{
	private $props = array();
	private static $instance;

	public static function getInstance(){
		if( empty( self::$instance )){
			self::$instance = new Preferences();
		}
		return self::$instance;
	}

	public function setProperty($key, $val){
		$this->props[$key] = $val;
	}
	
	public function getProperty($key){
		return $this->props[$key];
	}
}

$pref = Preferences::getInstance();
$pref->setProperty("name", "Peter");
unset($pref);

$pref2 = Preferences::getInstance();
echo $pref2->getProperty("name");

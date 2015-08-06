<?php
	function __autoload($class_name) {
	    include $class_name . '.php';
	}
	
	$cbc = new CreateBuildCenter();
	$solider = $cbc->outputUnit('solider');
	$workder = $cbc->outputUnit('worker');
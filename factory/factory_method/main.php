<?php
	include_once "./factory.php";
	
	$cc = new CommandCenter();
	$cc = $cc->outputUnit();
	$cc->playSlogan();
	
	$b = new Barrack();
	$b = $b->outputUnit();
	$b->playSlogan();
	
	$a = new Airport();
	$a = $a->outputUnit();
	$a->playSlogan();
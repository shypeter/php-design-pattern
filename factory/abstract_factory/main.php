<?php
	include_once "./factory.php";
	$b = new Barrack();
	$bt = $b->outputTeranUnit();
	$bz = $b->outputZergUnit();
	$bt->playSlogan();
	$bz->shout();
	
	$c = new CommandCenter();
	$ct = $c->outputTeranUnit();
	$cz = $c->outputZergUnit();
	$ct->playSlogan();
	$cz->shout();
	
	$a = new Airport();
	$at = $a->outputTeranUnit();
	$az = $a->outputZergUnit();
	$at->playSlogan();
	$az->shout();
<?php
// implementor
interface Platform{
	public function control();
}

// concrete implementor
class AndroidPlatform implements Platform{
	public function control(){
		return "Android";
	}
}

// concrete implementor
class IOSPlatform implements Platform{
	public function control(){
		return "IOS";
	}
}

// abstraction
abstract class AngryBird{
	protected $platform = null;
	public function __construct(Platform $platform){
		$this->platform = $platform;
	}
	public abstract function play();
}

// refined abstraction
class AngryBirdNormal extends AngryBird{
	public function play(){
		echo "AngryBirdNormal, Platform is ".$this->platform->control()."\n";
	}
}

// refined abstraction
class AngryBirdSpace extends AngryBird{
	public function play(){
		echo "AngryBirdSpace, Platform is ".$this->platform->control()."\n";
	}
}

// refined abstraction
class AngryBirdRio extends AngryBird{
	public function play(){
		echo "AngryBirdRio, Platform is ".$this->platform->control()."\n";
	}
}

$iosPlatform = new IOSPlatform();
$abs = new AngryBirdSpace($iosPlatform);
$abs->play();

$androidPlatform = new AndroidPlatform();
$abr = new AngryBirdRio($androidPlatform);
$abr->play();

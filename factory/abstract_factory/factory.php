<?php
	abstract class TerranUnit{
		public abstract function playSlogan();
	}
	
	class TerranWorker extends TerranUnit{
		public function playSlogan(){
			echo "dogi, dogi\n";
		}
	}
	
	class TerranSolider extends TerranUnit{
		public function playSlogan(){
			echo "die for king\n";
		}
	}
	
	class TerranAircraft extends TerranUnit{
		public function playSlogan(){
			echo "we are flash\n";
		}
	}
	
	
	abstract class ZergUnit{
		public abstract function shout();
	}
	
	class ZergWorker extends ZergUnit{
		public function shout(){
			echo "build....build......\n";
		}
	}
	
	class ZergSolider extends ZergUnit{
		public function shout(){
			echo "can I eat that?\n";
		}
	}
	
	class ZergAircraft extends ZergUnit{
		public function shout(){
			echo "ow ow\n";
		}
	}
	
	abstract class BuildFactory{
		public abstract function outputTeranUnit();
		public abstract function outputZergUnit();
	}
	
	class CommandCenter extends BuildFactory{
		public function outputTeranUnit(){
			return new TerranWorker();
		}
		public function outputZergUnit(){
			return new ZergWorker();
		}
	}
	
	class Barrack extends BuildFactory{
		public function outputTeranUnit(){
			return new TerranSolider();
		}
		public function outputZergUnit(){
			return new ZergSolider();
		}		
	}
	
	class Airport extends BuildFactory{
		public function outputTeranUnit(){
			return new TerranAircraft();
		}
		public function outputZergUnit(){
			return new ZergAircraft();
		}
	}
<?php
	abstract class Unit{
		public abstract function playSlogan();
	}
	
	class Worker extends Unit{
		public function playSlogan(){
			echo "dogi, dogi\n";
		}
	}
	
	class Solider extends Unit{
		public function playSlogan(){
			echo "die for king\n";
		}
	}
	
	class Aircraft extends Unit{
		public function playSlogan(){
			echo "we like flash\n";
		}
		public function build(){
			echo "transmining";
		}
	}
	
	abstract class BuildFactory{
		abstract function outputUnit();
	}
	
	class CommandCenter extends BuildFactory{
		public function outputUnit(){
			return new Worker();
		}
	}
	
	class Barrack extends BuildFactory{
		public function outputUnit(){
			return new Solider();
		}
	}
	
	class Airport extends BuildFactory{
		public function outputUnit(){
			$ac = new Aircraft();
			$ac->build();
			return $ac;
		}
	}
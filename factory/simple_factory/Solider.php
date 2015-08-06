<?php
	class Solider extends Unit{
		public function getMaterial(){
			echo "using 50 crystal, 10 gas\n";
		}
		public function train(){
			echo "20 seconds tranning\n";
		}
		public function create(){
			echo "die for king\n";
		}
	}
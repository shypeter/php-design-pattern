<?php
	class Worker extends Unit{
		public function getMaterial(){
			echo "using 50 unit crystal\n";
		}
		
		public function train(){
			echo "10 second tranning\n";
		}
		
		public function create(){
			echo "dogi, dogi(worker)\n";
		}
	}
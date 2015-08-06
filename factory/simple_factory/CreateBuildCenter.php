<?php
	class CreateBuildCenter{
		public function outputUnit($type){
			$unit = SimpleBuildFactory::createUnit($type);
			
			$unit->getMaterial();
			$unit->train();
			$unit->create();
			
			return $unit;
		}
	}
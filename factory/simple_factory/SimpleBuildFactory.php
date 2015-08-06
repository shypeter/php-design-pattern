<?php
	class SimpleBuildFactory{
		public static function createUnit($type){
			switch($type){
				case 'solider':
					return new Solider();
				break;
				case 'worker':
					return new Worker();
				break;
			}
		}
	}
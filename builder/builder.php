<?php
	//套餐類別
	class Meal{
		private $food;
		private $drink;
		private $dessert;
		
		public function setFood($food){
			$this->food = $food;
		}
		public function setDrink($drink){
			$this->drink = $drink;
		}
		public function setDessert($dessert){
			$this->dessert = $dessert;
		}
		
		public function showMeal(){
			echo $this->food . ", " . $this->drink . ", " . $this->dessert."\n";
		}
	}
	
	//建立套餐
	abstract class MealBuilder{
		protected $meal = null;
		
		public function __construct(){
			$this->meal = new Meal();
		}
		
		public abstract function buildFood();
		public abstract function buildDrink();
		public abstract function buildDessert();
		
		public function getMeal(){
			return $this->meal;
		}
	}
	
	//雞肉套餐實體
	class ChickenKitMealBuilder extends MealBuilder{
		public function buildFood(){
			$this->meal->setFood("chicken burger");
		}
		public function buildDrink(){
			$this->meal->setDrink("coka");
		}
		public function buildDessert(){
			$this->meal->setDessert("french fries");
		}
	}
	
	//牛肉套餐實體
	class BeefKitMealBuilder extends MealBuilder{
		public function buildFood(){
			$this->meal->setFood("beef burger");
		}
		public function buildDrink(){
			$this->meal->setDrink("black tea");
		}
		public function buildDessert(){
			$this->meal->setDessert("apple pie");
		}
	}
	
	
	class MealDirector{
		private $mealBuilder;
		
		public function setMealBuilder(MealBuilder $mealBuilder){
			$this->mealBuilder = $mealBuilder;
		}
		
		public function buildMeal(){
			$this->mealBuilder->buildFood();
			$this->mealBuilder->buildDrink();
			$this->mealBuilder->buildDessert();
			
			return $this->mealBuilder->getMeal();
		}
	}
<?php
abstract class Unit{
	public function getComposite(){
		return null;
	}
	abstract function bombardStrength();
}

abstract class CompositeUnit extends Unit{
	private $units = array();
	public function getComposite(){
		return $this;
	}

	public function units(){
		return $this->units;
	}

	// 將戰鬥單位加入軍隊群組中
	public function addUnit(Unit $unit){
		if(in_Array($unit, $this->units, true)){
			return;
		}
		$this->units[] = $unit;
		//var_dump($this->units);
	}
	
	//將戰鬥單位從軍隊群組移除
	public function removeUnit(Unit $unit){
		$this->units = array_udiff($this->units, array($unit), create_function('$a, $b', 'return ($a === $b)?0:1;'));
	}
}

// 軍隊組隊
class Army extends CompositeUnit{
	public function bombardStrength(){
		$ret = 0;
		foreach ($this->units() as $unit){
			echo $unit->bombardStrength()."\n";
			$ret += $unit->bombardStrength();

		}
		return $ret;
	}
}

//裝甲運兵車
class TroopCarrier extends CompositeUnit{
	public function addUnit(Unit $unit){
		if($unit instanceof Cavalry){
			throw new Exception("can't get a horse on the vehicle");
		}
		parent::addUnit($unit);
	}
	public function bombardStrength(){
		return 15;
	}
}

class Archer extends Unit{
	public function bombardStrength(){
		return 4;
	}
}

class LaserCannonUnit extends Unit{
	public function bombardStrength(){
		return 44;
	}
}

class Cavalry extends Unit{
	public function bombardStrength(){
		return 15;
	}
}


$archer = new Archer();
echo "archer attacking with strength: ". $archer->bombardStrength() ."\n";

$main_army = new Army();
$main_army->addUnit($archer);
$main_army->addUnit(new Archer());
$main_army->addUnit(new LaserCannonUnit());
$main_army->addUnit(new Cavalry());
echo "main_army attacking with strength: ". $main_army->bombardStrength() ."\n";

$sub_army = new Army();
$sub_army->addUnit(new Cavalry());
$sub_army->addUnit(new Cavalry());
$main_army->addUnit($sub_army);
echo "main_army attacking with strength: ". $main_army->bombardStrength() ."\n";

$troop = new TroopCarrier();
$troop->addUnit(new Archer());
$troop->addUnit(new LaserCannonUnit());
$main_army->addUnit($troop);
echo "main_army attacking with strength: ". $main_army->bombardStrength() ."\n";

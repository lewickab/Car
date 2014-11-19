<?php

include_once('carinterface.php');

class Car implements CarInterface{

	private $brand;
	private $model;
	private $color;
	private $numberOfDoors;


	//public function Car() {
	//	$this->brand="Ford";
	//	$this->model="Fiesta";
	//	$this->color="rinbow";
	//	$this->numberOfDoors="5";
	//}

	public function Car($b, $m, $c, $nod) {
		$this->brand=$b;
		$this->model=$m;
		$this->color=$c;
		$this->numberOfDoors=$nod;
	}

	public function helloCar(){
	return "Hello! It's me - you car: ".$this->color. " ".$this->brand." ".$this->model." ".$this->numberOfDoors;
	}

	public function getBrand(){
		return $this->brand;
	}
	public function setBrand($brand){
		$this->brand=$brand;
	}	
	public function getModel(){
		return $this->model;
	}
	public function setModel($model){
		$this->model=$model;
	}
	public function getColor(){
		return $this->color;
	}
	public function setColor($color){
		$this->color=$color;
	}
	public function getNumberOfDoors(){
		return $this->numberOfDoors;
	}
	public function setNumberOfDoors($numberOfDoors){
		$this->numberOfDoors=$numberOfDoors;
	}
}


class RaceCar extends Car implements RaceCarInterface, EngineInterface  {
	private $HorsePower;
	
	
	public function RaceCar($b, $m, $c, $nod, $power) {     
       parent::Car($b, $m, $c, $nod);
	   $this->HorsePower=$power;
    }

	
	public function getVMax(){
		return $this->HorsePower*2+5;
	}
	
	public function getAcceleration(){
		return $this->HorsePower/2-5;
	}
	
	public function getHP(){
		return $this->HorsePower;
	}
}
?>

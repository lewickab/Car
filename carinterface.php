<?

interface CarInterface {
	public function getBrand();
	public function setBrand($brand);	
	public function getModel();
	public function setModel($model);
	public function getColor();
	public function setColor($color);
	public function getNumberOfDoors();
	public function setNumberOfDoors($numberOfDoors);
}

interface RaceCarInterface {
    public function getVMax();
    public function getAcceleration();
}

interface EngineInterface {
    public function getHP();
}

?>

<?
    abstract class Transport{
        public $model = model;
        public $fuelconsumption = 0;
        public $fuelcapacity = 0;
        public function __construct($model, $fuelconsumption, $fuelcapacity){
            $this->model = $model;
            $this->fuelconsumption = $fuelconsumption;
            $this->fuelcapacity = $fuelcapacity;  
        }
        public function start($distanta){
            $this->fuelcapacity -= $distanta/100 * $this->fuelconsumption;
        }
        public function combustibil($cantitate){
            $this->fuelcapacity += $cantitate;
        }
        public function cantitatearamasa(){
            echo "Combustibilul ramas: ". $this->fuelcapacity ."<br>";
        }
    }
?>
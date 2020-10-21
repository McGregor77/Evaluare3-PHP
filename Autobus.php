<?
    require_once "Transport.php";
    class Autobus extends Transport {
        public function start($distanta){
            $fuel = $this->fuelcapacity;
            $this->fuelcapacity -= $distanta/100 * $this->fuelconsumption;
            if($this->fuelcapacity <= 0){
                echo("Combustibilul este suficient: ". ($fuel / $this->fuelconsumption)*100 ."/". $distanta ."<br>");
            }
        }
    }
?>
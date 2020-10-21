<?
    require_once "Transport.php";
    class Avion extends Transport{
        public function start($distanta){
            $this->fuelcapacity -= $distanta/100 * $this->fuelconsumption;
            if($this->fuelcapacity <= 0){
                echo("Combustibil insuficient <br>");
                $this->fuelcapacity += $distanta/100 * $this->fuelconsumption;
                return 0;
            }
            return 1;
        }
    }
?>
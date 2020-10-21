<?
    include "Avion.php";
    include "Autobus.php";

    $avion = new Avion("Airbus", 128, 500);
    if($avion->start(400)){
        echo "Avionul a decolat. <br>";
    };
    
    $autobus = new Autobus("Mercedes", 20, 100);
    $autobus->start(550);

    $avion2 = new Avion("Airbus", 128, 800);
    if($avion2->start(400)){
        echo "Avionul a decolat. <br>";
        $avion2->cantitatearamasa();
    };
?>
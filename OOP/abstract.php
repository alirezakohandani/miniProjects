<?php

abstract class Car1 {
    protected $bak;
    abstract public function calculateMile();
    public function setbak($energy) {
        $this->bak = $energy;
    }

}

class Toyota extends Car1 {
    public function calculateMile() {
         $miles = $this->bak * 33;
         return $miles;
    }
}

class Bugatti extends Car1 {
    public function calculateMile() {
        $miles = $this->bak * 30;
        return $miles;
    }

}

$toyota = new Toyota();
$toyota->setbak(10);
echo "toyota is " . $toyota->calculateMile() . " Miles<br>";

$bugatti = new Bugatti();
$bugatti->setbak(10);
echo "bugatti is " . $bugatti->calculateMile() ." Miles<br>";


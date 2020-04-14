<?php

class Car {
    public $tunk = 3;
    public $comp;
    public $color = "beige";
    public $hasSunRoof = "true";
    private $model;
    private $trim = 'N/A';
    protected $test = "fuck";

    public function __construct($trim = null) {
        if($trim) {
        $this->trim = $trim;   
        }  
    }
    public function getTrim() {
        return "The trim is " . $this->trim;
    }

    public function fill($float) {
        $this->tunk += $float;
        return $this;
    }

    public function ride($float){
        $miles = $float;
        $gallons = $miles/50;
        $this-> tunk -= $gallons;  
        return $this;
    }

    public function hello() {
        echo "Company is " . $this->comp . ", the color is" . $this->color . " and has SunRoof " . $this->hasSunRoof;
    }

    public function setModel($mod) {
        $listOfCar = ["bmw", "benz"];
        if (!in_array($mod, $listOfCar)) {
            echo "Sorry your model is not exist";
        
        } else {
           return $this->model = $mod;
        }
    }
    
    public function getModel() {
        echo "The car model is " . $this->model;
    }

    public function displayConstant() {
        echo "<h2>The constant in class is</h2>";
        echo __CLASS__ . "<br>";
        echo __LINE__ . "<br>";
        echo __FILE__ . "<br>";
        echo __METHOD__ . "<br>";
    }

    //for tets override method
    public function test_override() {
        return "yes Car";
    }
}

class SportCar extends Car {
    private $feature = "Fast";

    public function isStyleForSport() {
        return "Drive is " . $this->feature . " and the model is " . $this->getModel();
    }

   public function test() {
        return $this->test;
    }
    //for test override method
public function test_override() {
    return "yes SportCar";
    
}
}



//create object From Car class
$car = new Car();
print_r($car);
echo "<br>";
$car1= (array) $car;
var_dump($car1);
;
echo $car -> fill(10) -> ride(430) -> tunk . "<br>";
$car->setModel("toyota");
echo $car->getModel() . "<br>";
echo "<h3>" . $car->getTrim() . "</h3><br>";
$car->displayConstant();


//create object from SportCar class

$sportCar = new SportCar();
$sportCar->comp = 'Ferrari';
echo "<h2>The inheritance</h2><br>";
$sportCar->hello();
echo "<br>";
echo $sportCar->setModel("bmw") . "<br>";
//set benz for model

// echo $sportCar->setModel('benz')->isStyleForSport();

echo $sportCar->isStyleForSport() . "<br>";
echo $sportCar->test() . "<br>";
echo $sportCar->test_override() . "<br>";
echo $car->test_override();


?>
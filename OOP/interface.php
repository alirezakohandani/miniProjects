<?php

interface Car {
    public function setModel($model);
    public function getModel();
}

interface vichele {
    public function hasTwoWheel($bool);
    public function display();
    
}

class MiniCar implements Car, vichele {
    private $model;
    private $bool;

    public function setModel($model) {
       return $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }

    public function hasTwoWheel($bool) {
         $this->bool = $bool;
         return $this;
    }

    public function display() {
        if($this->bool) {
            return "its bicycle";
        }
        else {
            return "its not bicycle";
        }
    }
    
    
     
}


$miniminer = new MiniCar();
$miniminer->setModel("700");
echo $miniminer->getModel();
echo $miniminer->hasTwoWheel("true")->display();



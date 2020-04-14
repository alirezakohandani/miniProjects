<?php

class A {
    public $test = 1;
    
    public function test($test) {
       $newTest =  $this->test = $test;
       return $newTest;
    }
}

//return true of false
var_dump(class_exists("B"));
echo "<br>";

 if (class_exists('A')){
    echo "yes the A class is exists";
 }else {
     echo "No the A class is not exists";
 }


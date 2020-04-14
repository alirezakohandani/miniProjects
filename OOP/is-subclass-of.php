<?php

class A {

}

class B extends A{

}

$newA = new A();
$newB = new B();

echo '<h3>$newA object is not subclass from classA:</h3><br>';
var_dump(is_subclass_of($newA, 'A'));
echo "<br>";

echo '<h3>$newB object is subclass from classA:</h3><br>';
var_dump(is_subclass_of($newB, 'A'));
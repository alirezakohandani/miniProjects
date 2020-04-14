<?php

class A {
    public $test;
}

class B {
    public $example;
}

foreach(get_declared_classes() as $key => $val) {
   
    echo $key . "=>" . $val . "<br>";
}
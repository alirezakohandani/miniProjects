<?php

class A {
    public $test;
    private $example;
}

$new = new A();

var_dump(property_exists($new, 'test'));
echo "<br>";

var_dump(property_exists($new, 'example'));
echo "<br>";

$type = property_exists($new, 'example');

echo gettype($type);


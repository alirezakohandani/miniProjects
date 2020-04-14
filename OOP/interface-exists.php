<?php

interface A {
public function test();
}

var_dump(interface_exists('A'));
echo "<br>";

if (interface_exists('A')) {
    class Myclass implements A {
         public function test() {
             echo "test";
         }
    }
    $test = new Myclass();
    $test->test();
}
<?php

interface A {
    public function test();
}

foreach(get_declared_interfaces() as $index => $value) {
    echo $index . "=>" . $value . "<br>";
}
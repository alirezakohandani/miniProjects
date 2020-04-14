<?php

class A {
    public function hello() {
        echo "hello";
    }
}

$new = new A();

var_dump(method_exists($new, 'hello'));
echo "<br>";

var_dump(method_exists($new, "test"));
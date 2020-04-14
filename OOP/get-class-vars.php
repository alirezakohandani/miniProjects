<?php

class A {
    public $test = 5;
    public $example = 'this is a example';
    public $answer;
    private $question;

}

var_dump(get_class_vars('A'));
echo "<br>";

foreach(get_class_vars('A') as $property_name => $value) {
    if ($value == null) {
        $value = 'this is a null';
    }
    echo $property_name . ": " . $value . "<br>";

}


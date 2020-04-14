

<?php

class A {
    public function test() {
        echo "test";
    }
    public function example() {
        echo "example";
    }
}
//About get_class_methods() And output is Array And if is empty return null
 print_r(get_class_methods('A'));
 echo "<br>";

 foreach(get_class_methods('A') as $index => $methods) {
     echo $methods . "<br>";
 }

?>
<?php
class A {

}

class B  extends A {
    
}
$new = new B();


//output true or false
var_dump(is_a($new, 'B'));
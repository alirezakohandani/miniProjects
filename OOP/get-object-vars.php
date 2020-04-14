<?php
class Family {
    public $relation;
    public $scaleKind;

    public function setRelation($relation) {
         return $this->relation = $relation;
        
    }

    public function claculateKind() {
        if ($this->relation == "father") {
            return "The kind in very much";
        }
    }
}

$father = new Family();
var_dump(get_object_vars($father));
echo "<br>";
$father->setRelation('father');
var_dump(get_object_vars($father));
echo "<br>";
echo $father->claculateKind() . "<br>";
$father->relation = "mother";
var_dump(get_object_vars($father));
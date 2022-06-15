<?php
class Student{
    public $name;
    public $age;
    function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }

    function printName(){
        return $this->name . " " . $this->age;
    }
}

$s = new Student("himanshurahi", 12);
echo $s->printName();
?>
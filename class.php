<?php 
class Dog {
    private String $bread
    public Function set_bread($name) {
        $this -> bread = $name;
    }
}
$doggy = new Dog;
$doggy -> bread = 'doberman';
var_dump $doggy;
$doggy1 = new Dog;
$doggy -> bread = 'epagneule';
var_dump $doggy1;
?>
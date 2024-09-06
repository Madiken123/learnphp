<?php

class Box {
    public $height;
    public $width;
    public $lenght;

    public function volume(){
        return $this->height * $this->width * $this->lenght;
    } 
}

class Metalbox extends Box {
    public $weightPerUnit = 10;
    public function weight(){
        return $this->volume() * $this->wheightPerUnit;
    }

}

$num1 = 1;
$num2 = $num1;
$num2 = 2;
var_dump($num1, $num2);





$metal1 = new Metalbox();
$metal1->height = 1;
$metal2 = $metal2;
$metal2->height = 2;
var_dump($metal1, $metal2);

trait HasMaterial {
    public $metal;
    public function getMaterial() {
        return $this->material;
    }
}


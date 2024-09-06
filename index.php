<?php

class Box {
    public $height;
    protected $width;
    private $lenght;

    public function volume(){
        return $this->height * $this->width * $this->lenght;
    } 
    public function getLenght(){
        return $this->lenght;
    }
    public function setLenght(){
        if(is_numeric($lenght) && $lenght > 0 ) {
            $this->lenght = $lenght;
        } else {
            $this->lenght = 0;
        }
    }
}

class Metalbox extends Box {
    public $weightPerUnit = 10;
    public function weight(){
        return $this->volume() * $this->wheightPerUnit;
    }
    public function testProtected(){
        var_dump($this->lenght);
    }
}

$box = new metalbox();
$box->setlenght(121);
$box->testProtected(141);
var_dump($box); 

?>
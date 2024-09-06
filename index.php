<?php

class Box {
    public function __construct(){
        echo "box was created\n";
    }
    public function __call($name, $args){
        var_dump($name, $args);
    }
    public function __get($name){
        return 'cool value';
    }
    public function __set($name, $value){
        var_dump($name, $value);
    }
    public function __destruct(){
        echo "box was destroyed\n";
    }
    public function __toString(){
        return 'cool box';
    }
    public function __invoke(...$args){
        var_dump($args);
    }
}

function hello(){
    $box =new Box();
}

$box = new Box();
$box->name = 'Madiken';
$box->something(1,2,'asd');
$box->else('xd', true, NULL);
var_dump($box->cats);
var_dump($box);
echo $box;
$box(1,'asd', 'asda');


?>
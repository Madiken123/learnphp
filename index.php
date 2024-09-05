<?php

$a = 1;
$a++;
$a--;
$a+=2;
$a-=2;
$a*=2;
$a/=2;
$a%=2;

$a = 'hello' . 'word';
$a .= 'sjfsljnfslkf';
$array = array(1,2,3);
$array = [1,2,3];

var_dump($array[1]);
$array = [
    'essa' => 1,
    'tessa' => 2,
    'kossa' => 3,
    5 => 4,
    'chad',
    1.2,
    true,

];
var_dump($array['kossa']);

var_dump($array);
//foreach($array as $key => $valiue){
//    echo $key . '=>' .$valiue. '\in';
//}

var_dump($array);
foreach($array as $key => $valiue){
    //echo $key . '=>' .$valiue. '\in';
}
$name = 'madiken';

$string = "hello $name\n";
var_dump($string);

$char = 'a';

for($i=0;$i<100;$i++){
    var_dump($char);
    $char++;
}
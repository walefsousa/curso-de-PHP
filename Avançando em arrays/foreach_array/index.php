<?php

$arr = [
    'nome' => 'walef',
    'idade' => '29',
    'altura' => '1.68'
];

$arr2 = [
    'nome' => 'teste',
    'idade' => '32',
    'altura' => '1.58'
];

foreach($arr as $carac => $value){
    echo $carac . $value . "<br>";
}
foreach($arr2 as $carac => $value){
    echo $carac . $value . "<br>";
}
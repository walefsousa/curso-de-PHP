<?php

$a = 10;

while($a > 0){
    $a--;

    if($a == 5 || $a == 7){
        echo $a;
        continue;
    }

}
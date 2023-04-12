<?php

$a = 10;
$b = 20;

function teste (){
    $a = 6;
    global $b;
    $b = 26;
    echo "Imprimindo " . $a;
    echo "Imprimindo " . $b;
}

echo "Imprimindo " . $a;
echo "Imprimindo " . $b;

teste();

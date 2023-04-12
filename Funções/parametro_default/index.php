<?php

function teste($a = "teste"){

    echo $a;
}

teste();
teste("asd");

function teste2($b, $a = "teste"){
    echo $b . " " . $a;
}

teste2(20, "walef");
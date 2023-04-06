<?php

$x = 10;

echo "$x Global";

function teste() {

    $x = 5;

    echo " $x Local";
}

teste();
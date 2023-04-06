<?php

$teste = "teste";

echo $teste . "Global";

if(5 > 2) {
    $teste = "teste";
    echo $teste . "Local";
}

echo $teste . "Global";

function Novo() {

  global $teste;
    
    echo $teste . "Global";
}

Novo();
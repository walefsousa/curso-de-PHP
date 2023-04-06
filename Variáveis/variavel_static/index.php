<?php
function Novo() {

    $a = 0;
    $a++;
    echo $a;
}   

Novo();
Novo();
Novo();

function Novo2() {

    static $a = 0;
    $a++;
    echo $a;
}   

Novo2();
Novo2();
Novo2();

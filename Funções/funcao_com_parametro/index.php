<?php

function teste($vel){
    
   if(is_int($vel)){

        echo "A velocidade maxíma é " . $vel . " Km/h";    
    }else{

        echo "ERRO: Digite um valor inteiro!!";
    }
}

function animal($nome, $raca){

    echo $nome . ", " . $raca;
}

animal("dog", "pastor alemão");
echo "    ";
teste(200);
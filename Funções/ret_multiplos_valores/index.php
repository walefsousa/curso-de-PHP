<?php

function teste($nome, $idade){

    $nome = "Sr. " . $nome;
    $idade = $idade . " anos";
    
    return [$nome, $idade];
}

$dados = teste("Walef", 29);

print_r($dados);

echo "Olá " . $dados[0] . ", VocÊ tem " . $dados[1];
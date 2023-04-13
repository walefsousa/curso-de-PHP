<?php


$array = ["nome" => "walef", "idade" => 29, "profissão" => "programador"];

if(array_key_exists("nome", $array)){
    echo "A chave existe";
}else{
    echo "chave não existe";
}


if(isset($array["nome"])){
    echo "A chave existe";
}else{
    echo "chave não existe";
}
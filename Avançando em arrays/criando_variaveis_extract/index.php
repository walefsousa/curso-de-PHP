<?php

$arr = [
    'cor' => 'azul',
    'nome' => 'walef',
    'idade' => '29'
];

extract($arr);

echo $cor = "vermelho";
echo $nome = "teste";
echo $idade = '50';



<?php

class Pessoa {

  function falar(){
    echo "Olá mundo";
  }
}
  $walef = new Pessoa();

  $walef->nome = "Walef";

  echo $walef->nome;
  
  echo "<br>";
  
  $walef->falar();

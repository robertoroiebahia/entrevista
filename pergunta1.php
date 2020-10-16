<?php
  $uf = array("ES", "MG", "RJ", "SP");
  $estados = array("Sao Paulo", "Rio de Janeiro", "Minas Gerais", "Espirito Santo" );
  $estadosReverse = array_reverse($estados);

  $resultado = array_combine($uf, $estadosReverse);

  foreach ($resultado as $key => $value) {
    echo "{$key} - {$value} \n ";
  }


?>

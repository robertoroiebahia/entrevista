<?php
  $uf = array("ES", "MG", "RJ", "SP");
  $estados = array("Sao Paulo", "Rio de Janeiro", "Minas Gerais", "Espirito Santo" );
  $resultado = array_combine($uf, array_reverse($estados));

  foreach ($resultado as $key => $value) {
    echo "{$key} - {$value} \n ";
  }


?>

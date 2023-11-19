<?php

  $arrayTeste = [5, "Eddie", true, false, "Farroch", 12.8, "Vasco", true, [], "Sete", 5, 10, "Alô"];

  // Contar o tamanho do array. = 13 elementos
  $x = count($arrayTeste);

  $y = 0;

  while ($y < $x) {

    if(is_string($arrayTeste[$y])) {
      echo $arrayTeste[$y] . "<br>";
    }
    $y++;
  }

  
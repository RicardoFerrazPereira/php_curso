<?php

  echo 7.15;
  echo "<br>";
  echo 23.12;
  echo "<br>";

  $c = -178.1;

  echo $c;
  echo "<br>";

  if(is_float($c)) {
    echo "Sim, podemos ter floats negativos!";
  }

  if(is_int($c)) {
    echo "É um inteiro";
  }
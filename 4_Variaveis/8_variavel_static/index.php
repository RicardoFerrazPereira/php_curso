<?php

  function teste() {

    $a = 0;
    $a++;

    echo "$a <br>";

  }

  teste();
  teste();
  teste();

  function testeStatic() { 

    static $a = 0; // Como a instrução STATIC, o escopo vai ser mantido e o valor vai ser sempre incrementado ou decrementado
    // O valor é mantido entre chamadas de função
    $a++;

    echo "$a <br>";

  }

  testeStatic();
  testeStatic();
  testeStatic();
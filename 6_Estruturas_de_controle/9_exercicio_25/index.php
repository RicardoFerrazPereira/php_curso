<?php

    $num1 = 10;
    $num2 = 70;
    $a = 'Eddie';
    
    if(is_int($num1) || is_float($num1)) {
       
        $numDobrado = $num1 * 2;

        if($numDobrado > 100) {
            echo 'O número É maior que 100 <br>';
        }
        else {
            echo 'O número NÃO é maior que 100 <br>';
        }
    }
    else {
        echo 'Não é um número! <br>';
    }

    if(is_int($num2) || is_float($num2)) {
       
        $numDobrado = $num2 * 2;

        if($numDobrado > 100) {
            echo 'O número é maior que 100 <br>';
        }
        else {
            echo 'O número NÃO é maior que 100 <br>';
        }
    }
    else {
        echo 'Não é um número! <br>';
    }


    if(is_int($a) || is_float($a)) {
       
        $numDobrado = $a * 2;

        if($numDobrado > 100) {
            echo 'O número é maior que 100 <br>';
        }
        else {
            echo 'O número NÃO é maior que 100 <br>';
        }
    }
    else {
        echo 'Não é um número! <br>';
    }

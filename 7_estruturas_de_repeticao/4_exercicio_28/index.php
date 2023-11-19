<?php

    $contador = 4;
    $limite = 30;

    while($contador < $limite) {
        echo "Executando o loop $contador <br>";        

        if($contador == 24) {
            echo 'Parando o loop';
            break;
        }
        $contador += 2;
    
    }
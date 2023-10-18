<?php

    $pessoa = [
        'nome' => 'Farrock', 
        'idade' => 15, 
        'profissao' => 'programador'];

    // if($pessoa['idade'] > 17) {
    //     echo "É maior de idade";
    // }
    // else {
    //     echo "É menor de idade";
    // }
    $maioridade = 18;

    if($pessoa['idade'] >= $maioridade) {
        echo "É maior de idade";
    }
    else {
        echo "É menor de idade";
    }
?>
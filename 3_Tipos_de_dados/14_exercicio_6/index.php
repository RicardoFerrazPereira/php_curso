<?php

    $carro = [
        'marca' => 'HB20',
        'portas' => 4,
        'ano' => 2015,
        'blindado' => false
    ];

    print_r($carro);

    $marca = $carro['marca'];
    $ano = $carro['ano'];

    echo "<br>";
    echo "O carro é $marca e o ano é $ano";

?>
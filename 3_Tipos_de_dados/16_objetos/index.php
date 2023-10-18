<?php

    class Pessoa {
        function falar() {
            echo "Saudações vascaínas";
        }
    }

    $nova_pessoa = new Pessoa();

    $nova_pessoa->nome = "Ricardo";

    echo $nova_pessoa->nome;

    echo "<br>";

    $nova_pessoa->falar();

?>
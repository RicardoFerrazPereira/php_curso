<?php

    // print_r($_GET);

    // $nome = $_GET['nome'];
    // $idade = $_GET['idade']

    if (isset($_GET['nome'])) {
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
    } else {
        $nome = "Padrão";
        $idade = "Padrão";
    }
   

?>

<h1>O seu nome é <?= $nome ?>, e vc tem <?= $idade ?> anos</h1>
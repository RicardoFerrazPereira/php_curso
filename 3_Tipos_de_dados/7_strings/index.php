<?php
   echo "Testando texto de aspas duplas <br>";
   echo 'Testando texto de aspas simples <br>';
   echo "Ele disse: 'Olá!' <br>";
   echo 'Ele disse: "Olá!" <br>';

   $idade = 15;

   echo "Ele tem $idade anos <br>"; // Aspas duplas interpretam as variáveis
   echo 'Ele tem $idade anos'; // Aspas simples não interpretam
?>
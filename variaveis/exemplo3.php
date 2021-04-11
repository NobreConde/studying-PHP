<?php

//básicos
$nome = "Matheus";
$site = 'www.google.com';
$ano = 1996;
$salario = 5500.99;
$bloqueado = false;

//compostos
$frutas = array("abacaxi", "laranja", "uva");
//echo $frutas[2];
$nascimento = new DateTime();
//var_dump($nascimento)

//especiais
$arquivo = fopen("exemplo3.php", "r");
var_dump($arquivo);

$nulo = null;
$vazio = "";

?>
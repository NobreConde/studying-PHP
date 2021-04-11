<?php
//include "exemplo1.php";
require_once "exemplo1.php";
require_once "exemplo1.php";

/*
Diferenças

Require:
- obriga que o arquivo exista
- e que o arquivo esteja funcionando

Include:
- tenta funcionar mesmo que o arquivo nao exista
- ele possui mais recursos

require_onde
- obriga que o arquivo exista
- e que o arquivo esteja funcionando
- ignora outra funcção repetida caso exista
*/

$resultado = somar(10, 20);
echo $resultado;

?>
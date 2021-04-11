<?php

$anoNascimento = 1996;

//isso é um comentário em linha

/*
Isso é um comentário em linhas
*/

$nome1 = "Caio";
$_nome2 = "Antonio";
$sobreNome = "Conde Nobre";
$nomeCompleto = $nome1 . " " . $sobreNome; //concatenação

//$this variavel interna

echo $nome1;
echo "</br>";
echo $nomeCompleto;
exit; //para de executar aqui

unset($nome1);
if(isset($nome1)) {
    echo $nome1;
}

?>
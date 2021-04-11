<?php

$nome = "Matheus";

function teste() { //escopo 1
    global $nome;
    echo $nome;
}

function teste2() { //escopo 2
    $nome = "Caio";
    echo $nome."agora no teste 2";
}

teste();
teste2();

?>
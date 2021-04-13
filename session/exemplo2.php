<?php

require_once("config.php");

unset($_SESSION['nome']); //limpa variaveis de seção

echo $_SESSION['nome'];

session_destroy(); //explode a seção do usuário, você tem que logar de novo

?>
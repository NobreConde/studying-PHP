<?php

$diaDaSemana = date("w");
switch ($diaDaSemana) {
    case 0:
        echo "Sabado";
        break;
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda";
        break;
    case 3:
        echo "Terça";
        break;
    case 4:
        echo "Quarta";
        break;
    case 5:
        echo "Quinta";
        break;
    case 6:
        echo "Sexta";
        break;
    default:
        echo "Data inválida";
        break;
}

?>
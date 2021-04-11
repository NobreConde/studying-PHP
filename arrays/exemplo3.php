<?php

$pessoas = array();

array_push($pessoas, array(
    'nome'=>"Matheus",
    'idade'=>"24"
));
array_push($pessoas, array(
    'nome'=>"Caio",
    'idade'=>"18"
));

print_r($pessoas[0]['nome']);

?>
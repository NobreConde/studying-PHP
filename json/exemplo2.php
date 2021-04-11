<?php

$json ='[{"nome":"Matheus","idade":"24"},{"nome":"Caio","idade":"18"}]';
$data = json_decode($json, true);
var_dump($data);

?>
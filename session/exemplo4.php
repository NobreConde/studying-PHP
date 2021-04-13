<?php

session_id('j0dnobd7aan6g0hhgvla6c9gac');
require_once("config.php");

session_regenerate_id();
echo session_id();
echo "<br>";
var_dump($_SESSION);

?>
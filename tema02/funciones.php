<?php
$title = "Funciones";

$level = (sizeof(explode("/", $_SERVER["PHP_SELF"])) >= 4) ? "../" : "";
include_once($level."includes/head.php");
?>

<h2>Tema 2</h2>
<h1>Funciones</h1>



<p>Con la ayuda de las funciones que necesites, haz un programa que, dados dos número enteros positivos, inicio y cantidad, nos muestre cantidad de números primos a partir de inicio, si no pasamos ningún valor cantidad=10.</p>


<?php 
include($level.'includes/footer.php');
?>
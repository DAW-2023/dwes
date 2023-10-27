<?php
$title = "Funciones";

$level = (sizeof(explode("/", $_SERVER["PHP_SELF"])) >= 4) ? "../" : "";
include_once($level . "includes/head.php");

include_once($level . "functions/primos.php");

?>

<h2>Tema 2</h2>
<h1>Funciones</h1>



<p>Con la ayuda de las funciones que necesites, haz un programa que, dados dos número enteros positivos, inicio y
    cantidad, nos muestre cantidad de números primos a partir de inicio, si no pasamos ningún valor cantidad=10.</p>

<form action="" method="post">
    <label for="inicio">Inicio: </label>
    <input type="number" name="inicio" id="inicio" value="1">
    <br>
    <label for="canticad" name="cantidad">Cantidad: </label>
    <input type="number" name="cantidad" id="cantidad" value="0">
    <br>
    <input type="submit" value="Calcular">
</form>

<?php 
    if(isset($_POST['cantidad'])){
        $primos = calcularPrimos($_POST['inicio'], $_POST['cantidad']);
        foreach($primos as $numero){
            echo $numero . '<br>';
        }
    }
?>

<?php
include($level . 'includes/footer.php');
?>
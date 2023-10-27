<?php 
$title = "Foreach. DWES 02";

$level = (sizeof(explode("/", $_SERVER["PHP_SELF"])) >= 4) ? "../" : "";
include($level."includes/head.php");
?>

<h2>DWES 02</h2>
<h1>Recorrer un array con <i>foreach</i></h1>

<p>Haz una página PHP que utilice foreach() para mostrar todos los valores del array "$_SERVER" en una tabla con dos columnas. La primera columna debe contener el nombre de la variable, y la segunda su valor.</p>

<table>
    <tr>
        <th>NOMBRE</th>
        <th>VALOR</th>
    </tr>

    <?php foreach($_SERVER as $key => $value): ?>
        <tr>
            <td><?=$key?></td>
            <td><?=$value?></td>
        </tr>
    <?php endforeach; ?>

</table>

<?php 
include($level."includes/footer.php");
?>
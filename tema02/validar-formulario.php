<?php
$title = "Validar formulario. DWES 02";

$level = (sizeof(explode("/", $_SERVER["PHP_SELF"])) >= 4) ? "../" : "";
include($level . "includes/head.php");
?>

<h2>DWES 02</h2>
<h1>Validar un fromulario con HTML y PHP</h1>



<p>Haremos un formulario con los campos nombre, apellidos, mail, edad (numérico tipo entero y mayor que 0), y checkboxs
    de módulos de los que nos matricularemos (de los que al menos uno será necesario). Validaremos con ayuda de HTML y
    con PHP, que todos los campos contengan algún dato y que hayamos elegido algún módulo.</p>

<p>Si todo está bien mostraremos los datos y si no mostraremos los errores.</p>


<fieldset>
    <legend>Formulario</legend>
    <form action="" method="post">

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" maxlength="20" required>
        <br>
        <label for="apellidos">Apellidos: </label>
        <input type="text" name="apellidos" id="apellidos" maxlength="50" required>
        <br>
        <label for="email" id="email">Email: </label>
        <input type="text" name="email" id="email" maxlength="100" required>
        <br>
        <label for="edad" id="edad">Edad: </label>
        <input type="number" name="edad" id="edad" max="99" min="16" required>
        <br>
        <input type="submit" value="Enviar">
    </form>

</fieldset>


<?php
include($level . "includes/footer.php");
?>
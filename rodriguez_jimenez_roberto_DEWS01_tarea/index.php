<?php
session_start();

// Agenda es una variable de sessión
if(!isset($_SESSION['agenda'])) {
    $_SESSION['agenda'] = [];
}

include("funciones.inc.php");

// Existen datos desde el formulario
if (count($_POST) > 0) {
    $errores = validarFormulario();

    // No hay errores, guardamos los datos
    if (count($errores) == 0) {
        procesarDatos();
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES02. Tarea</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Agenda</h1>

    <?php if (isset($errores) && in_array(0, $errores)): ?>
        <div class="error">
            <?= getError(0) ?>
        </div>
    <?php endif ?>

    <form action="" method="post">
        <fieldset>
            <legend>Nuevo contacto</legend>
            <div class="row">
                <div class="col label">
                    <label for="nombre" id="nombre">Nombre:</label>
                </div>
                <div class="col">
                    <input type="text" name="nombre" id="nombre" maxlength="50" placeholder="Mín. 3 caracteres">
                </div>
            </div>
            <div class="row">
                <div class="col label">
                    <label for="telefono">Telefono:</label>
                </div>
                <div class="col">
                    <input type="tel" name="telefono" id="telefono" placeholder="123456789" pattern="[0-9]{9}" required>
                </div>
            </div>
            <input type="submit" value="Añadir contacto" id="anadir">
            <input type="reset" value="Limpiar campos" id="reset">
        </fieldset>
    </form>

    <?php print_r($_SESSION["agenda"]); ?>

</body>

</html>
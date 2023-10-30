<?php
include("funciones.inc.php");

// Declaramos un array agenda
$agenda = [];

// Comprobar si existen datos recibidos desde el formulario para poder procesarlos
if (count($_POST) > 0) {

    // Validamos el formulario y recibimos un array con 
    // los id de los errores encontrados.
    $errores = validarFormulario();

    // Si no hay errores, procesamos los datos del formulario.
    if (count($errores) == 0) {

        // En este punto sabemos que tenemos los datos del formulario sin errores.
        // Es posible que en la agenda no haya datos aún, por lo que no existirá 
        // el campo $_POST['agenda']

        // procesarDatos 
        // Si la agenda está vacía, no puede existir $_POST['agenda'] ya que no se han 
        // podido crear los campos 'hiddden', entonces enviamos la agenda vacía.
        $agenda = procesarAgenda(
            isset($_POST['agenda']) ? $_POST['agenda'] : $agenda,
            $_POST['nombre'],
            $_POST['telefono']
        );
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

    <?php if (count($agenda) >= 1): ?>
        <fieldset>
            <legend>Agenda</legend>
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                </tr>
                <?php foreach ($agenda as $key => $value): ?>
                    <tr>
                        <td>
                            <?= $key ?>
                        </td>
                        <td class="telefono">
                            <?= $value ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </fieldset>
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
                    <input type="tel" name="telefono" id="telefono" placeholder="123456789" pattern="[0-9]{9}">
                </div>
            </div>
            <input type="submit" value="Añadir contacto" id="anadir">
            <input type="reset" value="Limpiar campos" id="reset">

            <!-- enviamos la agenda -->
            <?php foreach ($agenda as $key => $value): ?>
                <input type="hidden" name="agenda[<?= $key ?>]" value="<?= $value ?>">
            <?php endforeach ?>

        </fieldset>
    </form>

    <?php if (count($agenda) >= 1): ?>
        <fieldset>
            <legend>Vaciar agenda</legend>
            <form action="?vaciar=1" id="vaciar" method="get"></form>
                <input type="submit" value="vaciar" name="vaciar" id="vaciar">
            </form>
        </fieldset>
    <?php endif ?>

</body>

</html>
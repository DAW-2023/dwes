<?php
$title = "Condicionales";

$level = (sizeof(explode("/", $_SERVER["PHP_SELF"])) >= 4) ? "../" : "";
include_once($level."includes/head.php");
?>

<h2>Tema 2</h2>
<h1>Ejercicio resuelto 2</h1>
<h3>Condicionales</h3>



<p>Carlos ha decidido hacer su primer programa, un taller mecánico les ha propuesto que le hagan una web que, en función
    del tipo de motor, recomiende un aceite u otra.</p>

<p>Haz una página que en función de la variable $motor que puede tomar los valores 1 (Gasolina), 2 (Diésel), 3
    (Motocicleta), 4 (Eléctrico) nos muestre el tipo de motor, es decir si $motor=1 nos mostrará "El motor es de
    Gasolina". Hazlo de dos formas, con bucles if y con switch.</p>

<form action="" method="post">
    <label for="motor">Selecciona un motor:</label>
    <select name="motor" id="motor">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    <input type="submit" value="Enviar">
</form>

<?php
if (isset($_POST["motor"])) {

    if ($_POST["motor"] == "1") {
        echo "Motor de gasoline";
    } elseif ($_POST["motor"] == "2") {
        echo "El motor es diésel";
    } elseif ($_POST["motor"] == "3") {
        echo "El motor es de una motocicleta";
    } elseif ($_POST["motor"] == "4") {
        echo "El motor es eléctrico";
    } else {
        echo "Error, el tipo de motor no es válido";
    }

    echo "<br>";

    switch ($_POST["motor"]) {
        case "1":
            echo "Motor de gasolina";
            break;
        case "2":
            echo "El motor es diésel";
            break;
        case "3":
            echo "El motor es de una motocicleta";
            break;
        case "4":
            echo "El motor es eléctrico";
            break;
        default:
            echo "Error, el tipo de motor no es válido";
    }

}

?>

<?php
include_once($level."includes/footer.php");
?>
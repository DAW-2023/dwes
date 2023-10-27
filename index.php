<?php
$title = 'Desarrollo Web en Entorno Servidor - DAW';

$level = (sizeof(explode("/", $_SERVER["PHP_SELF"])) >= 4) ? "../" : "";
include( $level."includes/head.php");
?>

<h1>DWES</h1>

<ul>
	<li>Tema 01</li>
	<li>Tema 02
		<ul>
			<li><a href="tema02/fechas.php">Fechas</a></li>
			<li><a href="tema02/condicionales.php">Condicionales</a></li>
			<li><a href="tema02/funciones.php">Funciones</a></li>
			<li><a href="tema02/foreach.php">foreach</a></li>
			<li><a href="tema02/validar-formulario.php">Validar formulario</a></li>
		</ul>
	</li>
	<li>Tareas
		<ul>
			<a href="rodriguez_jimenez_roberto_DEWS01_tarea">
				<li>DWES02 - Agenda</li>
			</a>
		</ul>
	</li>
</ul>

<?php
include($level.'includes/footer.php');
?>

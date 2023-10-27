<?php

/**
 * función para procesar el formulario.
 * Se confía en que el formulario es correcto, no es misión de
 * esta función validar el formulario.
 */
function procesarDatos()
{

    // Si el nombre no existe y hay número, se añade a la agenda
    if (!in_array($_POST['nombre'], $_SESSION['agenda'])) {
        $_SESSION['agenda'][$_POST['nombre']] = $_POST['telefono'];
    }
}

/**
 * Función que devuelve el error pedido
 */
function getError($err)
{
    $errores = [
        0 => "El nombre es obligatorio",
        1 => "No es un nombre válido",
        2 => "El teléfono es obligatorio",
        3 => "El número de teléfono no es válido"
    ];

    return $errores[$err];
}

/**
 * Función que valida el formulario
 */
function validarFormulario()
{

    $errores = [];

    // Validar el nombre si se ha recibido
    if (!isset($_POST["nombre"]) || empty($_POST['nombre'])) {
        $errores[] = 0;
    } else if (!validarNombre($_POST['nombre'])) {
        $errores[] = 1;
    }

    // Validar el teléfono si se ha recibido

    if (!isset($_POST["telefono"])) {
        $errores[] = 2;
    } else if (!validarTelefono($_POST["telefono"])) {
        $errores[] = 3;
    }

    return $errores;

}

/**
 * Valida el nombre del usuario recibido como parámetro.
 * La longitud mínima del nombre es de 3 caracteres.
 * @return boolean true si el nombre es válido
 */
function validarNombre($nombre)
{

    // Eliminar espacios inicial y final
    $temp = trim($nombre);

    // Sustituir las tildes
    $temp = str_replace(['á', 'é', 'í', 'ó', 'ú'], ['a', 'e', 'i', 'o', 'u'], $temp);

    // Comprobar que unicamente contenga letras o espacios en blanco
    // preg_match devuelve 1 si encuentra el patrón
    $pattern = "/^[a-zA-Z ]+$/";
    return ((preg_match($pattern, $temp) == 1) && (strlen($temp) >= 3)) ? true : false;

}

/**
 * Valida el número de teléfono.
 * @return boolean true si el número de teléfono es válido.
 */
function validarTelefono($telefono)
{
    $pattern = "/^[0-9]{9}$/";
    return (preg_match($pattern, $telefono) == 1) ? true : false;
}

?>
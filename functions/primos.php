<?php
/**
 * Calcula 'cantidad' de números primos a partir de 'inicio'.
 * Devuelve un array con los valores.
 */
function calcularPrimos($inicio = 1, $cantidad = 10)
{

    $primos = [];     // Array para los primos
    $count = 0;       // Contador, control del bucle

    // Tenemos que comprobar una cantidad mínima, por lo
    // que al menos heremos un cálculo.
    do{
        if(isPrimo($inicio)){
            array_push($primos, $inicio);
            $count++;
        }
        $inicio++;
    }while( $count < $cantidad);

    return $primos;
}

function isPrimo($numero){
    if($numero==1) return false;
    for($i=2; $i<$numero; $i++){
        if($numero%$i==0) return false; //si encuentro un divisor distinto de 1 o $num el $num no es primo
        if($i>$numero/2) break; //si no he encontrado divisores a la mitad, no los encontaré depués
    }
    return true;
}
?>
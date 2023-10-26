<?php
function getCurrentDate()
{
    setlocale(LC_ALL, "es");
    date_default_timezone_set("Europe/Madrid");

    // $date = date("l\, d \d\\e F \d\\e Y");
    $date = strftime("%A, %d de %B de %Y");

    // $dateTimeObject = new DateTime('now',new DateTimeZone('Europe/Madrid'));

    // $date = IntlDateFormatter::formatObject(
    //     $dateTimeObject,
    //     'eeee, d MMMM y HH:mm',
    //     'es'
    // );

    // return ucwords($date); 
    return $date;
}
?>
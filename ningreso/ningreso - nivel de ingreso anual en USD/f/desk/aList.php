<?php

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../connection.php';
include '../connection2.php';

/*
 * Variables
 */

$n = $_GET["id"];


/*
 * Realiza una consulta a la base de datos.
 */

$_desk = mysqli_query($master, "SELECT * FROM desk WHERE deskStatus = 1 AND cDeskId = '" . $n . "'  ORDER BY deskId");

/*
 * Realiza una consulta a la base de datos.
 */
$_cdesk = mysqli_query($master, "SELECT * FROM cdesk WHERE cDeskStatus = 1  ORDER BY cDeskId");
/*
 * Realiza una consulta a la base de datos.
 */
$_module = mysqli_query($master, "SELECT * FROM module WHERE moduleStatus = 1 AND module ORDER BY cDeskId");

/*
 * Incluye y evalúa el archivo especificado.
 */

include '../plugins/toast/toast.php';

/*
 * Es similar a una serie de sentencias IF en la misma expresión. En muchas ocasiones, es posible que se quiera comparar la misma variable (o expresión) con muchos valores diferentes, y ejecutar una parte de código distinta dependiendo de a que valor es igual. Para esto es exactamente la expresión switch.
 */

switch ($n) {

    // Mensaje registrado
    
    case 'added': echo $added; require_once '../v/ac/jTeam.php'; break;

    // Mensaje eliminado
    
    case 'deleted': echo $deleted; require_once '../v/ac/jTeam.php'; break;
    
    // Mensaje eliminado
    case 'ee': echo $ee; require_once '../v/ac/jTeam.php'; break;
    case 'no': echo $no; require_once '../v/ac/jTeam.php'; break;

    default: require_once '../v/ac/jTeam.php'; break;
    
}

<?php

// connection

include '../connection.php';
include '../allow.php';

// select

$_client = mysqli_query($master, "
    SELECT * FROM requerimiento
    WHERE requerimientoId = '" . $_GET["cid"] . "'
");

$client = $_client -> fetch_object();
$requerimientoName = $client -> requerimientoName ;
$requerimientoText = $client -> requerimientoText ;
$serviceId = $client -> serviceId ;
$nrequerimiento = $client -> nrequerimiento ;

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $serviceId . "'
");

$servicio = $_service -> fetch_object();

$serviceName = $servicio -> serviceName ;

$_requerimientoN = mysqli_query($master, "
    SELECT * FROM requerimiento2
    WHERE serviceId = '" . $serviceId . "'
");

$servicio = $_service -> fetch_object();

$serviceName = $servicio -> serviceName ;



// VALOR DE REQUERIMIENTO INCREMENTAL 
$contador=1;
while ($contador <= $requerimientoNumber){
$requerimiento1 = $_POST['requerimiento'.$contador];

}




// view

require_once '../v/requerimiento/jUpdate.php';
<?php

// connection

include '../connection.php';
//variables obtenidas por GET
$requerimientoId = $_GET['requerimientoId'];
$serviceId = $_GET['serviceId'];

$_service = mysqli_query($master, "
    SELECT * FROM service
    WHERE serviceId = '" . $serviceId . "'    
    ");
                                                            
    $service = $_service -> fetch_object();
    $serviceName = $service -> serviceName ;

$_requerimiento = mysqli_query($master, "
    SELECT * FROM requerimiento
    WHERE requerimientoId = '" . $requerimientoId . "'    
    ");
                                                            
    $requerimiento = $_requerimiento -> fetch_object();
    $requerimientoName = $requerimiento -> requerimientoName ;
    $requerimientoNumber = $requerimiento -> nrequerimiento ;



// view

require_once '../v/requerimiento/jCreate2.php';

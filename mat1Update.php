<?php

// connection

include '../connection.php';
include '../connection2.php';
// module

$module = 'project';
$action = 'add';

//variables obtenidas por metodo GET
$c = $_GET["c"];
$amId = $_GET["amId"];
$serviceId = $_GET["serviceId"];
$md = $_GET["md"];

// variables obtenidas por metodo POST
$beneficioI = $_POST['beneficioI'];

// verify

$update = $connection -> prepare ("
    UPDATE materialidad
    SET
    beneficioI = ?    
    WHERE
    materialidadId = ? AND projectId = ? AND amId = ?
");	

$update -> bind_param (
    "iiii",
    $beneficioI, $materialidadId, $c, $amId
);

$update -> execute();
    
        
    // trace

    $trace = $master -> prepare ("
    	INSERT INTO trace
    	(userId, module, action, itemId)
    	VALUES
    	(?,?,?,?)
    ");

    $trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $id);

    $trace -> execute();

    // view

    echo "<script> window.location='../c/{$module}.php?m=index&n=added'</script>";
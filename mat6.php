<?php

// connection

include '../connection.php';
include '../connection2.php';
// module

$module = 'project';
$action = 'add';

// variables obtenidas por metodo GET
$materialidadId = $_GET['materialidadId'];
$c = $_GET['projectId'];
$amId = $GET['amId'];

// variables obtenidas por metodo POST
$nivelMRI = $_POST['nivelMRI'];
$nivelMRIenviado = $_POST['nivelMRIenviado'];




// verify

$update = $connection -> prepare ("
UPDATE materialidad
SET
nivelMRI = ?,
nivelMRIenviado = ?
WHERE
materialidadId = ? AND projectId = ? AND amId = ?
");	

$update -> bind_param (
"iiiii",
$nivelMRI, $nivelMRIenviado, $materialidadId, $c, $amId
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
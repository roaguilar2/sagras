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
$nivelMRI2 = $_POST['nivelMRI2'];




// verify

$update = $connection -> prepare ("
UPDATE materialidad
SET
nivelMRI2 = ?
WHERE
materialidadId = ? AND projectId = ? AND amId = ?
");	

$update -> bind_param (
"iiii",
$nivelMRI2, $materialidadId, $c, $amId
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
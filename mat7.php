<?php

// connection

include '../connection.php';
include '../connection2.php';
// module

$module = 'project';
$action = 'add';

// variables obtenidas por metodo POST
$nivelMRI = $_POST['nivelMRI'];
$nivelMRIenviado = $_POST['nivelMRIenviado'];




// verify

    $insert = $connection -> prepare ("
        INSERT INTO materialidad
        (nivelMRI, nivelMRIenviado)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ii",
        $nivelMRI, $nivelMRIenviado
    );


    $insert -> execute();
    
   
    
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
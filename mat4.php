<?php

// connection

include '../connection.php';
include '../connection2.php';
// module

$module = 'project';
$action = 'add';

// variables obtenidas por metodo POST
$importanciaRS = $_POST['importanciaRS'];


// verify

    $insert = $connection -> prepare ("
        INSERT INTO materialidad
        (importanciaRS)
        VALUES
        (?)
    ");

    $insert -> bind_param (
        "i",
        $importanciaRS
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
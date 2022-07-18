<?php

// connection

include '../connection.php';
include '../connection2.php';
// module

$module = 'project';
$action = 'add';

// variables obtenidas por metodo POST
$tramo = $_POST['tramo'];
$tramoEnviado = $_POST['tramoEnviado'];




// verify

    $insert = $connection -> prepare ("
        INSERT INTO materialidad
        (tramo, tramoEnviado)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ii",
        $tramo, $tramoEnviado 
    );


    $insert -> execute();
    
    $id = $master -> insert_id;
    
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
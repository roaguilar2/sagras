<?php

// connection

include '../connection.php';
include '../connection2.php';
// module

$module = 'project';
$action = 'add';

// variables obtenidas por metodo POST
$recorte = $_POST['recorte'];
$recorteEnviado = $_POST['recorteEnviado'];


// verify

    $insert = $connection -> prepare ("
        INSERT INTO materialidad
        (recorte, recorteEnviado)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "ii",
        $recorte, $recorteEnviado
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
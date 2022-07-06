<?php

// connection

include '../connection.php';

// module

$module = 'requerimiento';
$action = 'add';
//VARIABLES OBTENIDAS POR GET
$requerimientoId = $_GET['requerimientoId'];
$requerimientoNumber = $_GET['requerimientoNumber'];


// GUARDADO DE CAMPOS DE FORMA INCREMENTAL
$contador=1;
while ($contador <= $requerimientoNumber){
$requerimiento1 = $_POST['requerimiento'.$contador];    

    $insert = $master -> prepare ("
        INSERT INTO requerimiento2
        (requerimiento1, requerimientoId)
        VALUES
        (?,?)
    ");
    
    $insert -> bind_param (
        "si",
        $requerimiento1, $requerimientoId
    );

    $insert -> execute();
    $id = $master -> insert_id;    

    $contador++;
    
}
//FIN DE GUARDADO DE FORMA INCREMENTAL

// VARIABLES OBTENIDAS POR POST
$requerimiento2Name = $_POST['requerimiento2Name'];

// verify
    $insert = $master -> prepare ("
        INSERT INTO requerimiento2
        (requerimiento2Name, requerimientoId)
        VALUES
        (?,?)
    ");

    $insert -> bind_param (
        "si",
        $requerimiento2Name, $requerimientoId
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
    


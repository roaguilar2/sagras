<?php

// module
$module = 'aestrategia';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$aestrategiaName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$aestrategiatext = filter_var($_POST['aestrategiaText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE aestrategia
    SET
    aestrategiaName = ?,
    aestrategiatext = ?
    WHERE
    aestrategiaId = ?
");	

$update -> bind_param (
    "ssi",
    $aestrategiaName, $aestrategiatext, $_GET["cid"]
);

$update -> execute();

// trace

$trace = $master -> prepare ("
    INSERT INTO trace
    (userId, module, action, itemId)
    VALUES
    (?,?,?,?)
");

$trace -> bind_param ("issi", $_SESSION["userId"], $module, $action, $_GET["cid"]);

$trace -> execute();


// view

echo "<script> window.location='../c/{$module}.php?m=index&n=updated'</script>";

    
    
    
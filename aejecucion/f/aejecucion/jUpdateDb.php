<?php

// module
$module = 'aejecucion';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$aejecucionName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$aejecuciontext = filter_var($_POST['aejecucionText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE aejecucion
    SET
    aejecucionName = ?,
    aejecuciontext = ?
    WHERE
    aejecucionId = ?
");	

$update -> bind_param (
    "ssi",
    $aejecucionName, $aejecuciontext, $_GET["cid"]
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

    
    
    
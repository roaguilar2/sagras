<?php

// module
$module = 'pcontrol';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$pcontrolName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$pcontroltext = filter_var($_POST['pcontrolText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE pcontrol
    SET
    pcontrolName = ?,
    pcontroltext = ?
    WHERE
    pcontrolId = ?
");	

$update -> bind_param (
    "ssi",
    $pcontrolName, $pcontroltext, $_GET["cid"]
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

    
    
    
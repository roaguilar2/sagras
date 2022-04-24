<?php

// module
$module = 'caproject';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$caprojectName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$caprojecttext = filter_var($_POST['caprojectText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE caproject
    SET
    caprojectName = ?,
    caprojecttext = ?
    WHERE
    caprojectId = ?
");	

$update -> bind_param (
    "ssi",
    $caprojectName, $caprojecttext, $_GET["cid"]
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

    
    
    
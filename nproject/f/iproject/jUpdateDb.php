<?php

// module
$module = 'nproject';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$nprojectName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$nprojecttext = filter_var($_POST['nprojectText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE nproject
    SET
    nprojectName = ?,
    nprojecttext = ?
    WHERE
    nprojectId = ?
");	

$update -> bind_param (
    "ssi",
    $nprojectName, $nprojecttext, $_GET["cid"]
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

    
    
    
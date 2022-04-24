<?php

// module
$module = 'acproject';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$acprojectName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$acprojecttext = filter_var($_POST['acprojectText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE acproject
    SET
    acprojectName = ?,
    acprojecttext = ?
    WHERE
    acprojectId = ?
");	

$update -> bind_param (
    "ssi",
    $acprojectName, $acprojecttext, $_GET["cid"]
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

    
    
    
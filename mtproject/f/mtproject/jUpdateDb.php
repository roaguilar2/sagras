<?php

// module
$module = 'mtproject';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$mtprojectName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$mtprojecttext = filter_var($_POST['mtprojectText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE mtproject
    SET
    mtprojectName = ?,
    mtprojecttext = ?
    WHERE
    mtprojectId = ?
");	

$update -> bind_param (
    "ssi",
    $mtprojectName, $mtprojecttext, $_GET["cid"]
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

    
    
    
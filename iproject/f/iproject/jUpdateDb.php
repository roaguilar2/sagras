<?php

// module
$module = 'iproject';

/*
 * Incluye y evalúa el archivo especificado.
 */
include '../connection.php';

// var
$iprojectName = filter_var($_POST['d'], FILTER_SANITIZE_STRING);
$iprojecttext = filter_var($_POST['iprojectText'], FILTER_SANITIZE_STRING);

// update

$update = $master -> prepare ("
    UPDATE iproject
    SET
    iprojectName = ?,
    iprojecttext = ?
    WHERE
    iprojectId = ?
");	

$update -> bind_param (
    "ssi",
    $iprojectName, $iprojecttext, $_GET["cid"]
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

    
    
    